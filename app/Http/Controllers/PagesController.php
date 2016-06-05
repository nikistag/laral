<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller {

    public function about() {
        $people = ['Gica', 'Ghita', 'Ion'];
        return view('pages.about', compact('people'));
    }

    public function contact() {
        return view('pages.contact');
    }

    public function status() {
        return 'Gica este manu';
    }

}
