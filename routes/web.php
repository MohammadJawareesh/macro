<?php

use App\Http\Controllers\ProductController;
use App\Mail\Contact;
use App\Models\Product;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $product=Product::all();

    return view('page.index',compact('product'));
});

Route::get('/contact', function () {
    return view('page.contact');
});

Route::post('/mail', function () {
    $data = request()->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'message' => 'required|string',
    ]);
    $email = config('mail.from.address');
    Mail::to($email)->send(new Contact($data));

    return back();
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::resource('/product',ProductController::class);
    Route::get('/ProductDetail/{id}',[ProductController::class,'ProductDetail']);
});
