<?php


namespace app\controller;


use app\BaseController;
use think\App;

use think\facade\Session;


class LookBase extends BaseController
{
    public function __construct(App $app)
    {
        parent::__construct($app);
    }

    private function connectionCheck()
    {
        if (!Session::get('conn')) {
            return redirect('index');
        }
    }
}