<?php
use App\Http\Controllers\FixedAssetsLedger\FixedAssetsLedgerController;
use App\Http\Controllers\FixedAssetsLedger\DropdownController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Authenticate;

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
Auth::routes();



Route::group(['middleware' =>Authenticate::class ], function () {
Route::get('/home', [FixedAssetsLedgerController::class,'home'])->name('home');

Route::prefix('fixed-assets')->name('fixed_assets.')->group(function () {
Route::post("/conformord",[FixedAssetsLedgerController::class,"save"])->name("save");
Route::get("/delete/{id}",[FixedAssetsLedgerController::class,"delete"])->name("delete");
Route::get("/edit/{id}",[FixedAssetsLedgerController::class,"edit"])->name("edit");
Route::post("/update/{id}",[FixedAssetsLedgerController::class,"update"])->name("update");

});
Route::post('/getCategoryName', [DropdownController::class,'getCategoryName']);
Route::post('/getMainAccountsName', [DropdownController::class,'getMainAccountsName']);

Route::post('/updategetCategoryName', [DropdownController::class,'updategetCategoryName']);
Route::post('/updategetMainAccountsName', [DropdownController::class,'updategetMainAccountsName']);

});

