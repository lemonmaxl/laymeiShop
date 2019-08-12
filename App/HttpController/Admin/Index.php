<?php
namespace App\HttpController\Admin;

/**
 * 
 */
class Index extends Base
{
	
	public function index()
	{
		$this->response()->write("hello world");
	}
}