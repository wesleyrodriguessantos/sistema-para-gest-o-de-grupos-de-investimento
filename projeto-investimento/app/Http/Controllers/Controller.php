<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function homePage()
    {
        $varTitle = "Homepage do sistema de gestão para grupos de investimento";
        return view('welcome', [
            'title' => $varTitle
        ]);
    }
    public function fazerLogin()
    {
        return view('user.login');
    }
}
