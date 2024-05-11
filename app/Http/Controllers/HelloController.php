<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    function index() {
        echo "hello";
    }

    function worlds() {
        echo "World";
    }
}
