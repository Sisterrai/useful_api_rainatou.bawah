<?php

namespace App\Http\Controllers;

use App\Models\Modules;
use Illuminate\Http\Request;

class ModuleController extends Controller
{
    //
    public function index(){
        $modules = Modules::all();
        return response($modules,200);
    }
}
