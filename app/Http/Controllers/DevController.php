<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Cache, Helpers,Carbon; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class DevController extends Controller
{
    public function cache(Request $request)
    { 
        Cache::flush(); 
        Artisan::call('route:cache');
        Artisan::call('cache:clear');
        Artisan::call('config:clear');
        echo 'CACHE - OK';
    }

    public function artisan(Request $request)
    { 
       // $exitCode = Artisan::call('cache:clear');  
      //  dd(system('composer update'));
    } 
   

    public function pull(Request $request)
    { 
        // $hooks = array(
        //     '10.1.1.171' => 'https://focused-elgamal.213-74-184-66.plesk.page:8443/modules/git/public/web-hook.php?uuid=f0bab948-c491-a02a-5f87-2dcc21f2a76d',
        //     '10.1.1.172' => 'https://inspiring-haibt.213-74-184-66.plesk.page:8443/modules/git/public/web-hook.php?uuid=d4e39605-05a9-e969-f2d0-3eb754e77b1e',
        //     '10.1.1.173' => 'https://busy-babbage.213-74-184-66.plesk.page:8443/modules/git/public/web-hook.php?uuid=a93b4dd8-839f-778f-5eaf-3de751db4bc6', 
        // );

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $hooks[$_SERVER['SERVER_ADDR']]);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

        $output = curl_exec($ch);
        curl_close($ch);

        echo 'PULL - OK';
    } 

    public function cacheall(Request $request)
    { 
        // $servers = array(
        //     '10.1.1.171',
        //     '10.1.1.172',
        //     '10.1.1.173', 
        // );

        foreach ($servers as $ip)
        {
            $ch = curl_init();

            curl_setopt($ch, CURLOPT_URL, "https://" . $ip . "/dev/cache");

            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch,CURLOPT_USERAGENT,'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
            $output = curl_exec($ch);

            curl_close($ch); 

            echo '<pre>' . $ip . '</pre>';
        }
    }

    public function oneclick(Request $request)
    {   
        // $servers = array(
        //     '10.1.1.171',
        //     '10.1.1.172',
        //     '10.1.1.173', 
        // );

        foreach ($servers as $ip)
        {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, "https://" . $ip . "/dev/pull");
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch,CURLOPT_USERAGENT,'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
            $output = curl_exec($ch);
            curl_close($ch); 
            echo '<pre>' . $ip . '</pre>';

            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, "https://" . $ip . "/dev/cache");
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch,CURLOPT_USERAGENT,'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
            $output = curl_exec($ch);
            curl_close($ch); 
            echo '<pre>' . $ip . '</pre>';
        }
    }

}
