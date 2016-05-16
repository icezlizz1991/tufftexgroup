<?php
/**
 * Created by PhpStorm.
 * User: p2
 * Date: 7/15/14
 * Time: 11:27 AM
 */

namespace Main\CTL;


use Main\Context\Context;
use Main\Http\RequestInfo;
use Main\View\JsonView;
use Main\View\HtmlView;
use Main\View\RedirectView;
use Main\Helper\URL;


/**
 * @Restful
 */
class AdminCTL extends BaseCTL {
    /**
     * @GET
     * @uri /
     */
    public function get(){
        return new RedirectView(URL::absolute('/product'));
    }

    /**
     * @GET
     * @uri /product
     */
    public function getProduct(){
        // if PHP under version 5.4 use return new JsonView(array("message"=> "test"));
        return new HtmlView('/product');
    }

    /**
     * @GET
     * @uri /[i:id]
     */
    public function getTestById(){
        $id = $this->reqInfo->urlParam("id");

        // if PHP under version 5.4 use return new JsonView(array("id"=> $id));
        return new JsonView(["id"=> $id]);
    }
}
