<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CountController extends Controller
{
    public function button_pressed() {
        $count = Count::first();
        $count->times_pressed += 1;
        $count->save();

        return redirect('/');
    }
}
