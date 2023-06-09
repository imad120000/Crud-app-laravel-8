<?php

use App\Models\produit;
use Illuminate\Support\Facades\Route;

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


//get for page 3adiya Post ila kna radi nsifto les donner 
//1 first with native routes
/* Route::get('/home', function () {
    return view('home');
});
 */
//2 secand Method with controler

Route::get('/', "Homecontroller@index")->name('home');

Route::get('/first-produit', "Homecontroller@first_element");

Route::get('/detail-produit/{slug}', "Homecontroller@detail")->name('produit.detail');

Route::get('/addproduit', "Homecontroller@pageAddproduit")->name('produit.page');

Route::post('/addproduit', "Homecontroller@add")->name('add');


Route::get('/update/{slug}', "Homecontroller@pageUpdate")->name('produit.update');

Route::put('/update/{slug}', "Homecontroller@infoupdate")->name('infoupdate');

Route::delete('/update/{slug}', "Homecontroller@delete")->name('delete');





Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});



//display info
Route::get('/desplay', function () {
    return view('desplay',[
        'info'=>produit::all(),
    ]);
});