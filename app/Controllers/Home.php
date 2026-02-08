<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {


        $data = [];
        $jsonPath = ROOTPATH . 'data/content.json';

        if (file_exists($jsonPath)) {
            $data = json_decode(file_get_contents($jsonPath), true);
        }
        return view('home', $data);

    }
}