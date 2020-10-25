<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use Illuminate\Support\Facades\Artisan;
use Exception;


class InstallController extends Controller
{
    
    public function install()
    {
        try {
            echo '<br>init migrate tables...';
            Artisan::call('migrate');
            echo 'done migrate';
            echo '<br>init with tables seeder...';
            Artisan::call('db:seed');
            echo '<br>done with tables seeder';
        } catch (Exception $e) {
            Response::make($e->getMessage(), 500);
        }
    }
 
    public function refresh($key)
    {
        if ($key == "gustavovalerio") {          
        
        try {
            echo '<br>init refresh files...';
            Artisan::call('refresh');
            echo '<br>done with refresh files';
        } catch (Exception $e) {
            Response::make($e->getMessage(), 500);
        }
    }else{
        return "You must send the secret key to do that";
    }
    }
}
