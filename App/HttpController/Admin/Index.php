<?php
namespace App\HttpController\Admin;
use EasySwoole\Template\Render;
/**
 * 
 */
class Index extends Base
{
	
	public function index()
	{
		$html = $this->blade()->render("admin.index",['user'=>'lemon','time'=>time()]);
		$this->response()->write($html);
	}
}