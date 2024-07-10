<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
use App\Http\Controllers\SmsController;
use App\Http\Controllers\PdfController;
Route::get('/', function () {
    return view('welcome');
});


Route::get('/send-mail',[MailController::class,'sendMail']);
Route::get('/send-sms', [SmsController::class, 'sendSms']);
Route::get('/send-smss', [SmsController::class, 'sendSmss']);

Route::get('/pdf/{type}/{profile_id}',[PdfController::class,'index']);

