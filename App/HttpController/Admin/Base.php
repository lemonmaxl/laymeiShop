<?php
namespace App\HttpController\Admin;

use EasySwoole\Http\AbstractInterface\Controller;

/**
 * 
 */
class Base extends Controller
{
	public function index()
	{
		$this->actionNotFound('index');
	}
}