<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function setting() {
        return view("pages.settingpage.index");
    }
    
    public function feature() {
        return view("pages.featurepage.index");
    }
}