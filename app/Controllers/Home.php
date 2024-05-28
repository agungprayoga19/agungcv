<?php

namespace App\Controllers;

use App\Models\AgungModel;

class Home extends BaseController
{
    public function index()
    {
        $model = new AgungModel();
        $data['about'] = $model->first();
        return view('index', $data);
    }
}