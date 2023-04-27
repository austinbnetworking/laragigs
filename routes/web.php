<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

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

// Examples:

// Route::get('/hello', function() {
//     return 'Hello World'; // Basic response
// });

// Route::get('/hello-plain', function() {
//     return response('<h1>Hello World</h1>', 200) // Set status code
//         ->header('Content-Type', 'text/plain') // Set the content type explicitly
//         ->header('foo', 'bar'); // Set a custom header response
// });

// Route::get('/posts/{id}', function($id) { // Set a dynamic variable to pass into the function
//     return response('Post Number: ' . $id);
// })->where('id', '[0-9]+'); // Set a clause to only accept certain values

// Route::get('/search', function(Request $request) { 
//     // The request object can be passed through, but needs to be included at the top
//     // This allows us to access query parameters
//     // dd($request); // See the request object
//     dd($request->name . ' is from ' . $request->city);
// });

// All Listings
Route::get('/', function () {
    return view('listings', [
        'heading' => 'Latest Listings',
        'listings' => Listing::all()
    ]);
});

// Single Listing
Route::get('/listings/{id}', function ($id) {
    return view('listing', [
        'listing' => Listing::find($id)
    ]);
});
