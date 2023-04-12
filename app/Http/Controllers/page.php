<?php

namespace App\Http\Controllers;
use Jenssegers\Agent\Agent;

use Illuminate\Http\Request;

class page extends Controller
{
    public function show_me(){
        $agent = new Agent();

        if ($agent->isDesktop()) {
            return view('desktop');
        }else {
            return view('mobile');
        }
    }
}
