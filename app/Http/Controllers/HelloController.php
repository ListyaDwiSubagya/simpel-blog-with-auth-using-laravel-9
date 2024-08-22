<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// test
class HelloController extends Controller
{
    function index() {
        echo "hello";
    }

    function worlds() {
        echo "World";
    }
}
