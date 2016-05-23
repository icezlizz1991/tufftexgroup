<?php

namespace Main;
use Slim\App;
use Main\Controller\IndexController;
use Main\Controller\ProductController;
use Main\Controller\ProductMediaController;

class Route
{
	/** @var Slim\App; */
	private $slim;

	public function __construct(App $slim)
	{
		$this->slim = $slim;
	}

	public function run()
	{
		// inject permission to container
		$container = $this->slim->getContainer();
		// PermissionMiddleware::setContainer($container);

		$this->slim->get('/', IndexController::class. ':index');
		$this->slim->get('/login', IndexController::class. ':getLogin');
		$this->slim->post('/login', IndexController::class. ':postLogin');
		$this->slim->any('/logout', IndexController::class. ':anyLogout');

		$this->slim->get('/product', ProductController::class. ':products');
		// $this->slim->get('/product/{id:[0-9]+}', ProductController::class. ':product');
		$this->slim->get('/product/add', ProductController::class. ':productGetAdd');
		$this->slim->post('/product/add', ProductController::class. ':productPostAdd');
		$this->slim->get('/product/edit/{id:[0-9]+}', ProductController::class. ':productGetEdit');
		$this->slim->post('/product/edit/{id:[0-9]+}', ProductController::class. ':productPostEdit');
		$this->slim->get('/product/remove/{id:[0-9]+}', ProductController::class. ':productRemove');

		$this->slim->get('/product/{product_id:[0-9]+}/media', ProductMediaController::class. ':product_medias');
		// $this->slim->get('/product/{product_id:[0-9]+}/media/{id:[0-9]+}', ProductMediaController::class. ':product_media');
		// $this->slim->get('/product/{product_id:[0-9]+}/media/add', ProductMediaController::class. ':product_mediaGetAdd');
		$this->slim->post('/product/{product_id:[0-9]+}/media/add/image', ProductMediaController::class. ':product_imagePostAdd');
		$this->slim->post('/product/{product_id:[0-9]+}/media/add/youtube', ProductMediaController::class. ':product_youtubePostAdd');
		// $this->slim->get('/product/{product_id:[0-9]+}/media/edit/{id:[0-9]+}', ProductMediaController::class. ':product_mediaGetEdit');
		$this->slim->post('/product/{product_id:[0-9]+}/media/edit/{id:[0-9]+}', ProductMediaController::class. ':product_mediaPostEdit');
		$this->slim->get('/product/{product_id:[0-9]+}/media/remove/{id:[0-9]+}', ProductMediaController::class. ':product_mediaRemove');
	}
}
