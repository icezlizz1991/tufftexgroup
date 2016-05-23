<?php
namespace Main\Controller;

use Slim\Http\Request;
use Slim\Http\Response;
use Slim\Http\ResponseInterface;
use Main\Service\XMLService;

class ProductMediaController extends BaseController
{
  public function product_medias(Request $req, Response $res, $attr = [])
  {
    $container = $this->slim->getContainer();
    $db = $container->medoo;

    $product = $this->getProduct($attr["product_id"]);

    $where = ["product_id"=> $attr["product_id"]];
    $items = $db->select("product_media", "*", ["AND"=> $where, "ORDER"=> "sort_order ASC"]);
    $this->buildItems($items);

    return $container->view->render($res, "product_media/list.twig", [
      "items"=> $items,
      "product"=> $product
    ]);
	}

  public function product_imagePostAdd(Request $req, Response $res, $attr = [])
  {
    $container = $this->slim->getContainer();
    $db = $container->medoo;

    $files = $req->getUploadedFiles();

    foreach($files["image"] as $file) {
      $name = $file->getClientFilename();
      $name = explode(".", $name);
      $ext = array_pop($name);
      $ext = strtolower($ext);
      if(!in_array($ext, ["jpeg", "jpg", "png"])) {
        continue;
      }

      $name = $this->genToken(12).".".$ext;
      $insertParams = [];
      $insertParams["product_id"] = $attr["product_id"];
      $insertParams["type"] = "image";
      $insertParams["image_path"] = $name;
      $insertParams["sort_order"] = $db->max("product_media", "sort_order", ["AND"=> ["product_id"=> $attr["product_id"]]]) + 1;

      if(!$db->insert("product_media", $insertParams)) {
        return $res->withStatus(500)
          ->withHeader('Content-Type', 'application/json')
          ->write(json_encode(["error"=> true]));
      }

      $file->moveTo("../product_media/".$name);
    }

    return $res->withStatus(200)
      ->withHeader('Content-Type', 'application/json')
      ->write(json_encode(["success"=> true]));
  }

  public function product_youtubePostAdd(Request $req, Response $res, $attr = [])
  {
    $container = $this->slim->getContainer();
    $db = $container->medoo;

    $postBody = $req->getParsedBody();
    // $insertParams = $this->adapterParams($postBody);
    $insertParams = [];
    $insertParams["product_id"] = $attr["product_id"];
    $insertParams["type"] = "youtube";
    $insertParams["youtube_id"] = $postBody["youtube_id"];
    $insertParams["sort_order"] = $db->max("product_media", "sort_order", ["AND"=> ["product_id"=> $attr["product_id"]]]) + 1;

    if(!$db->insert("product_media", $insertParams)) {
      return $res->withStatus(500)
        ->withHeader('Content-Type', 'application/json')
        ->write(json_encode(["error"=> true]));
    }

    return $res->withStatus(200)
      ->withHeader('Content-Type', 'application/json')
      ->write(json_encode(["success"=> true]));
  }

  public function product_mediaRemove(Request $req, Response $res, $attr = [])
  {
    $container = $this->slim->getContainer();
    $db = $container->medoo;

    $media = $db->get("product_media", "*", ["id"=> $attr["id"]]);
    if(!$media) {
      return $res->withHeader("Location", $req->getUri()->getBasePath()."/product/".$attr["product_id"]."/media");
    }
    if($media["type"] == "image") {
      @unlink("../product_media/".$media["image_path"]);
    }
    $db->delete("product_media", ["id"=> $attr["id"]]);
    return $res->withHeader("Location", $req->getUri()->getBasePath()."/product/".$attr["product_id"]."/media");
  }

  public function adapterParams($input)
  {
    $params = $input;

    return $params;
  }

  public function buildItems(&$items)
  {
    foreach ($items as $key => &$item) {
      $this->buildItem($item);
    }
  }

  public function buildItem(&$item)
  {

  }

  public function getProduct($id)
  {
    $container = $this->slim->getContainer();
    $db = $container->medoo;

    return $db->get("product", "*", ["id"=> $id]);
  }

  // component
  // generate string on a-z, 0-9
  public function genToken($length)
   {
      $key = '';
      $keys = array_merge(range(0, 9), range('a', 'z'));

      for ($i = 0; $i < $length; $i++) {
          $key .= $keys[array_rand($keys)];
      }

      return $key;
   }
}
