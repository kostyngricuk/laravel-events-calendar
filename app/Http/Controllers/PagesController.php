<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    public function home() {
        $pageProperty = array(
            'pageTitle' => 'Главная страница',
            'seoTitle' => 'SEO TITLE - Главная страница',
        );
        return view('home', compact('pageProperty'));
    }
    public function about() {
        $pageProperty = array(
            'pageTitle' => 'О проекте',
            'seoTitle' => 'SEO TITLE - О проекте',
        );
        return view('about', compact('pageProperty'));
    }
}
