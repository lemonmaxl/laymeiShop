<?php
namespace App\HttpController;

use EasySwoole\Http\AbstractInterface\AbstractRouter;
use FastRoute\RouteCollector;
use EasySwoole\Http\Request;
use EasySwoole\Http\Response;

/**
 * 
 */
class Router extends AbstractRouter
{
	
	public function initialize(RouteCollector $route)
    {
  		// TODO: Implement initialize() method.
		$route->get('/', '/Index/index');

		// $route->get('/', function (Request $request, Response $response) {
		//   $response->write('this router index');
		// });
		// $route->get('/test', function (Request $request, Response $response) {
		//   $response->write('this router test');
		//   return '/a';//重新定位到/a方法
		// });
		// $route->get('/user/{id:\d+}', function (Request $request, Response $response) {
		//   $response->write("this is router user ,your id is {$request->getQueryParam('id')}");//获取到路由匹配的id
		//   return false;//不再往下请求,结束此次响应
		// });

    }
}