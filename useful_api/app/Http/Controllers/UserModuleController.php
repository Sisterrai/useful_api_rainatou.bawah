<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModule;

class UserModuleController extends Controller
{ 
    //
    public function activateModule($module_id,$user_id)
    {

        $module = UserModule::find($module_id);

    }    
}
