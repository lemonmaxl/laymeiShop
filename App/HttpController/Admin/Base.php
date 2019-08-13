<?php
namespace App\HttpController\Admin;

use EasySwoole\Http\AbstractInterface\Controller;
use EasySwoole\Http\Message\Status;
use duncan3dc\Laravel\BladeInstance;
use EasySwoole\EasySwoole\Config;

/**
 * 
 */
class Base extends Controller
{
	public function index()
	{
		$this->actionNotFound('index');
	}

	public function blade()
	{
		$viewPath = Config::getInstance()->getConf('VIEW_TEMPLATE');
		$tmpPath = Config::getInstance()->getConf('VIEW_TMP_TEMPLATE');
		return new BladeInstance($viewPath, $tmpPath);
	}

	protected function actionNotFound(?string $action): void
    {
        $this->response()->withStatus(Status::CODE_NOT_FOUND);
        $this->response()->write('action not found');
    }
}