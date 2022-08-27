<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DateController extends Controller
{
    public function date() {

        echo "Hoje é dia: " . date("d/m/Y");
        }
}
