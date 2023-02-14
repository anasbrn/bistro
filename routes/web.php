<?php

use App\Models\Plates;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlateController;
use App\Http\Controllers\ProfileController;

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
    return view('welcome', [
        'Plates' => Plates::all()
    ]);
});


Route::get('/plates', [PlateController::class, 'index']) ;
Route::get('/plate/add', [PlateController::class, 'create']) ;
Route::post('plates', [PlateController::class, 'store']) ;
Route::get('plates/{id}/edit', [PlateController::class, 'edit']);
Route::put('plates/{id}', [PlateController::class, 'update']);
Route::delete('plates/{id}', [PlateController::class, 'destroy']);



Route::get('/plate/id={id}', function($id){
    $specificPlate = Plates::find($id);
    
    if($specificPlate){
        return view('Plate', [
            'Plate' => $specificPlate
        ]);
    } else {
        abort(404) ;
    }
});

Route::get('/dashboard', function () {
    return view('dashboard', [
        'Plates' => Plates::all()
    ]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
