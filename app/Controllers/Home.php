<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $page_title = 'Welcome to the test';

        return view('home', ['page_title' => $page_title]);
    }
}
