<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

session_start();

class WelcomeController extends Controller {

    public function index() {

        $slide_table = DB::table('sliders')->where('slider_status', 'Active')->get();
        $menu = view('pages.menu');

        $content = view('pages.home');

        $slide = view('pages.slider')->with('slide_table', $slide_table);
        return view('master')
                        ->with('menu', $menu)
                        ->with('slider', $slide)
                        ->with('master-content', $content);
    }

    public function about() {

        $menu = view('pages.menu');
        $content = view('pages.about');

        return view('master')
                        ->with('menu', $menu)
                        ->with('master-content', $content);
    }

}
