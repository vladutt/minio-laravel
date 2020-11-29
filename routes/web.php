<?php

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {

//    $s3 = new Aws\S3\S3Client([
//        'version' => 'latest',
//        'region'  => 'eu-west-1',
//        'endpoint' => ' http://168.119.253.234:9000',
//        'use_path_style_endpoint' => true,
//        'credentials' => [
//            'key'    => 'minioadmin',
//            'secret' => 'minioadmin',
//        ],
//    ]);
//
//    $result = $s3->createBucket([
//        'Bucket' => 'test',
//    ]);

//    dd($s3);

    Storage::cloud()->put('hello.json', '{"hello": "world"}');
//    Storage::disk('minio')->files();
});
