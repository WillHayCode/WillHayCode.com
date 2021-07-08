<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
    
Route::group( [
    'domain' => '{subdomain}.localhost'
], function() {
    Route::any('/{slug?}', 'App\Http\Controllers\PageController@showPage');
});
    
Route::get('/t', function() {
    $to_name = 'Me';
    $to_email = 'willhaycode@gmail.com';
    $data = array(
        'json' => json_encode($_POST)
    );
    
    Mail::send('emails.mail',
        $data, function($message) use ($to_name, $to_email) {
            $message->to($to_email,
            $to_name)->subject('Laravel Test Mail');
            $message->from('willhaycode@gmail.com','Test Mail');
        }
    );
    return 'moo';
});
