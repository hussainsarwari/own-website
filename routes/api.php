<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\apiController;
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {return $request->user();});
// Route::get('/api/{e}',[apiController::class,'index']);

