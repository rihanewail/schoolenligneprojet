
<?php

use App\Http\Controllers\AdsController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\CoursEnLigneController;
use App\Http\Controllers\DemandeDinscriptionController;
use App\Http\Controllers\DemandePubController;
use App\Http\Controllers\EvenmentPaymentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\RessourceController;
use App\Models\CoursEnLigne;
use App\Models\DemandeDinscription;
use App\Models\Ressource;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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


        // Route::get('/student', function () {
        //     $demandes = DemandeDinscription::all();

        // return view('admin.demandeinscription',compact('demandes'));

        // });
        // Pass the data to the view
        Route::get('/', function () {
            return view('welcome');
        });
        Route::post('/redirects', [HomeController::class, 'index']);

// Route::get('/b', function () {
//     return view('enseignant.demendeEvent');
// });
// Route::get('/a', function () {
//     return view('admin.index');
// });
Route::get('/admin/demandeinscription', function () {
    $demandes = DemandeDinscription::all();
    return view('admin.demandeinscription', compact('demandes'));})->name('demandes.index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('demandepub',DemandepubController::class);
Route::resource('demandinscreption',DemandeDinscriptionController::class);
Route::post('/demands/{id}/admit', [DemandeDinscriptionController::class, 'admit'])->name('demand.admit');

Route::resource('demandinscreption',DemandeDinscriptionController::class);


Route::middleware(['auth'])->group(function(){

Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->middleware('admin');
Route::get('/expert', [App\Http\Controllers\ExpertController::class, 'index'])->middleware('expert');
Route::get('/enseignant', [App\Http\Controllers\EnseignantController::class, 'index'])->middleware('enseignant');
Route::get('/etudiant', [App\Http\Controllers\EtudiantController::class, 'index'])->middleware('etudiant');

Route::resource('EvenmentPayment',EvenmentPaymentController::class);
Route::resource('CoursEnLigne',CoursEnLigneController::class);
Route::resource('resources',RessourceController::class);

Route::get('/etudiant/afficherresources/mesresources', function () {
    $mesresources =Ressource::where('user_id', Auth::id())->get();
    return view('expert.index', compact('mesresources'));})->name('mesresources.index');


});
Route::get('/resource_search', [RessourceController::class, 'resource_search']);

Route::get('/post', function () {
   $authUser = Auth::user();
   $filteredRessources = Ressource::whereHas('user', function($query) use ($authUser) {
    $query->where('specialite', $authUser->specialite)
          ->where('usertype', $authUser->usertype);
})->get();

    return view('posts', compact('filteredRessources'));})->name('posts.index');





// Fetch resources where the user has the same speciality and user type as the authenticated user

















// <?php

// use App\Http\Controllers\AdsController;
// use App\Http\Controllers\Controller;
// use App\Http\Controllers\CoursEnLigneController;
// use App\Http\Controllers\DemandeDinscriptionController;
// use App\Http\Controllers\DemandePubController;
// use App\Http\Controllers\EvenmentPaymentController;
// use App\Http\Controllers\HomeController;
// use App\Http\Controllers\OwnerController;
// use App\Http\Controllers\RessourceController;
// use App\Models\CoursEnLigne;
// use App\Models\DemandeDinscription;
// use App\Models\Ressource;

// use Illuminate\Support\Facades\Route;
// use Illuminate\Support\Facades\Auth;

// /*
// |--------------------------------------------------------------------------
// | Web Routes
// |--------------------------------------------------------------------------
// |
// | Here is where you can register web routes for your application. These
// | routes are loaded by the RouteServiceProvider and all of them will
// | be assigned to the "web" middleware group. Make something great!
// |
// */


//         // Route::get('/student', function () {
//         //     $demandes = DemandeDinscription::all();

//         // return view('admin.demandeinscription',compact('demandes'));

//         // });
//         // Pass the data to the view
//         Route::get('/', function () {
//             return view('welcome');
//         });
//         Route::post('/redirects', [HomeController::class, 'index']);

// // Route::get('/b', function () {
// //     return view('enseignant.demendeEvent');
// // });
// // Route::get('/a', function () {
// //     return view('admin.index');
// // });/
// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::resource('demandepub',DemandepubController::class);
// Route::resource('demandinscreption',DemandeDinscriptionController::class);
// Route::post('/demands/{id}/admit', [DemandeDinscriptionController::class, 'admit'])->name('demand.admit');
// //Route::resource('demandinscreption',DemandeDinscriptionController::class);


// Route::middleware(['auth'])->group(function(){

// Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->middleware('admin');
// Route::get('/expert', [App\Http\Controllers\ExpertController::class, 'index'])->middleware('expert');
// Route::get('/enseignant', [App\Http\Controllers\EnseignantController::class, 'index'])->middleware('enseignant');
// Route::get('/etudiant', [App\Http\Controllers\EtudiantController::class, 'index'])->middleware('etudiant');

// Route::resource('EvenmentPayment',EvenmentPaymentController::class);
// Route::resource('CoursEnLigne',CoursEnLigneController::class);
// Route::get('/etudiant/afficherresources/mesresources', function () {
//     $mesresources =Ressource::where('user_id', Auth::id())->get();
//     return view('expert.index', compact('mesresources'));})->name('mesresources.index');


// });

