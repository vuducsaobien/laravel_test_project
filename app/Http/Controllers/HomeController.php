<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\HomeModel;
class HomeController extends Controller
{
    public $homeModel = null;

    public function __construct()
    {
        // echo '<h3>Die is Called - HomeController</h3>';die;
    }

    private function _getHomeModel ()
    {
        $this->homeModel = new HomeModel;

        return $this->homeModel;
    }

    public function index()
    {

        $homeModel = $this->_getHomeModel();

        $fff = $homeModel->indexModel();
        echo '<h3>Die is Called - index</h3>';die;
    }
}
