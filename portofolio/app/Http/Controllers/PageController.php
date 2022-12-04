<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

    public function page() {
        return view("home");
    }
    public function page_contact() {
        return view("page.page_contact");
    }
    public function page_about() {
        return view("page.page_about");
    }
    public function page_services() {
        return view("page.page_services");
    }
}
