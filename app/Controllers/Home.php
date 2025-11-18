<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message', [
            'title' => 'Home',
            'show_title' => false,
        ]);
    }

    public function about(): string
    {
        return view('about', [
            'title' => 'About Us',
            'show_title' => true,
        ]);
    }

    public function services(): string
    {
        return view('services', [
            'title' => 'Our Services',
            'show_title' => true,
        ]);
    }

    public function contact(): string
    {
        return view('contact', [
            'title' => 'Contact Us',
            'show_title' => true,
        ]);
    }
}
