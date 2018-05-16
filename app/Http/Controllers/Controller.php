<?php

namespace App\Http\Controllers;

use App\Administracao;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function store(Request $request)
    {
        $admins = Administracao::create($request->all());
        return redirect('/list');
    }
    public function index()
    {
        $admins = Administracao::all();
        return view('admin.list',compact('admins'));
    }

}
