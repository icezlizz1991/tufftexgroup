<?php
namespace Main\Controller;

use Slim\Http\Request;
use Slim\Http\Response;
use Slim\Http\ResponseInterface;
use Main\Service\XMLService;

class ProductController extends BaseController
{
  public function products(Request $req, Response $res)
  {
    $container = $this->slim->getContainer();
    $db = $container->medoo;

    $items = $db->select("product", "*", ["ORDER"=> "sort_order ASC"]);
    $this->buildItems($items);

    return $container->view->render($res, "product/list.twig", [
      "items"=> $items
    ]);
	}

  public function product(Request $req, Response $res, $attr = [])
  {
    $container = $this->slim->getContainer();
    $db = $container->medoo;

    $item = $db->get("product", "*", ["id"=> $attr["id"]]);
    if(!$item) {
      return $res->withHeader("Location", $req->getUri()->getBasePath()."/product");
    }

    return $container->view->render($res, "product/item.twig", [
      "item"=> $item
    ]);
  }

  public function productGetAdd(Request $req, Response $res)
  {
    $container = $this->slim->getContainer();

    return $container->view->render($res, "product/form.twig");
  }

  public function productPostAdd(Request $req, Response $res)
  {
    $container = $this->slim->getContainer();
    $db = $container->medoo;

    $postBody = $req->getParsedBody();
    $files = $req->getUploadedFiles();
    $insertParams = $this->adapterParams($postBody, $files);
    $insertParams["sort_order"] = $db->max("product", "sort_order") + 1;

    if($db->insert("product", $insertParams)) {
      return $res->withHeader("Location", $req->getUri()->getBasePath()."/product");
    }

    return $container->view->render($res, "product/form.twig", [
      "form"=> $postBody
    ]);
  }

  public function productGetEdit(Request $req, Response $res, $attr = [])
  {
    $container = $this->slim->getContainer();
    $db = $container->medoo;

    $item = $db->get("product", "*", ["id"=> $attr["id"]]);
    if(!$item) {
      return $res->withHeader("Location", $req->getUri()->getBasePath()."/product");
    }

    return $container->view->render($res, "product/form.twig", [
      "form"=> $item
    ]);
  }

  public function productPostEdit(Request $req, Response $res, $attr = [])
  {
    $container = $this->slim->getContainer();
    $db = $container->medoo;

    $postBody = $req->getParsedBody();
    $files = $req->getUploadedFiles();
    $editParams = $this->adapterParams($postBody, $files);

    if($db->update("product", $editParams, ["id"=> $attr["id"]]) !== false) {
      return $res->withHeader("Location", $req->getUri()->getBasePath()."/product");
    }

    return $container->view->render($res, "product/form.twig", [
      "form"=> $postBody
    ]);
  }

  public function productRemove(Request $req, Response $res, $attr = [])
  {
    $container = $this->slim->getContainer();
    $db = $container->medoo;

    $db->delete("product", ["id"=> $attr["id"]]);
    $db->delete("person_cripple", ["cripple_id"=> $attr["id"]]);
    return $res->withHeader("Location", $req->getUri()->getBasePath()."/product");
  }

  public function adapterParams($input, $files)
  {

    $params = $input;
    if(!empty($files["pdf"]) && $files["pdf"]->getError() == 0) {
      $name = $files["pdf"]->getClientFilename();
      $name = explode(".", $name);
      $ext = array_pop($name);
      $ext = strtolower($ext);
      if($ext == "pdf") {
        $params["pdf"] = $this->genToken(12).".pdf";
        $files["pdf"]->moveTo("../product_pdf/".$params["pdf"]);
      }
    }
    if(!empty($files["thumb"]) && $files["thumb"]->getError() == 0) {
      $name = $files["thumb"]->getClientFilename();
      $name = explode(".", $name);
      $ext = array_pop($name);
      $ext = strtolower($ext);
      if(in_array($ext, ["jpg", "jpeg", "png"])) {
        $params["thumb"] = $this->genToken(12).".".$ext;
        $files["thumb"]->moveTo("../product_thumb/".$params["thumb"]);
      }
    }
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
