<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        // Read JSON file
        $data = json_decode(file_get_contents(ROOTPATH . 'data/content.json'), true);

        // Make sure $navbar exists
        if (!isset($data['navbar'])) {
            $data['navbar'] = [];
        }

        // Send data to home.php
        return view('home', $data);
    }
}