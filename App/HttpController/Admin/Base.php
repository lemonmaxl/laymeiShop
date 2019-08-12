<?php
namespace App\HttpController\Admin;

use EasySwoole\Http\AbstractInterface\Controller;
use EasySwoole\Http\Message\Status;

/**
 * 
 */
class Base extends Controller
{
	public function index()
	{
		$this->actionNotFound('index');
	}

	protected function actionNotFound(?string $action): void
    {
        $this->response()->withStatus(Status::CODE_NOT_FOUND);
        $this->response()->write('action not found');
    }
}