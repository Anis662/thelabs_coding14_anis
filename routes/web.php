<?php

use App\Http\Controllers\AboutContentController;
use App\Http\Controllers\AdminBlogController;
use App\Http\Controllers\AdminFooterController;
use App\Http\Controllers\AdminHomeController;
use App\Http\Controllers\AdminLogoController;
use App\Http\Controllers\AdminMapController;
use App\Http\Controllers\AdminNewsletterController;
use App\Http\Controllers\AdminServiceController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\AdresseController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BlogPostController;
use App\Http\Controllers\BlogRapidController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentaireController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\HomeContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IconePrimeController;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\NavbarController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\ProfilTeamController;
use App\Http\Controllers\ReadyController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ServiceHomeController;
use App\Http\Controllers\ServicePrimeController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\TitreServiceController;
use App\Http\Controllers\TitreSloganController;
use App\Http\Controllers\TitreTeamController;
use App\Http\Controllers\TitreTestiController;
use App\Http\Controllers\UserController;
use Database\Seeders\ServiceHomeSeeder;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

// Auth::routes();

// Route::get('/home', function() {
//     return view('home');
// })->name('home')->middleware('auth');

Route::get("/", [HomeController::class, "index"])->name("home1");

Route::get("/service", [ServiceController::class, "index"])->name("service");

Route::get("/blog", [BlogController::class, "index"])->name("blog");

Route::get("/blogPost/{id}", [BlogPostController::class, "index"]);

Route::get("/contact", [ContactController::class, "index"])->name("contact");

Route::get("/admin/user", [AdminUserController::class, "index"])->name("adminUser");

Route::get("/admin/profil", [ProfilController::class, "index"])->name("profil");

Route::get("/admin/navbar", [NavbarController::class, "index"])->name("navbar");

Route::get("/admin/home", [HomeController::class, "index"]);

// Route::get("/admin/profil", [ProfilController::class, "index"])->name("profil");

Route::get("/admin/logo", [AdminLogoController::class, "index"])->name("adminLogo");

Route::get("/admin/home2", [AdminHomeController::class, "index"])->name("adminHome");

Route::get("/admin/service", [AdminServiceController::class, "index"])->name("adminService");

Route::get("/admin/blog", [AdminBlogController::class, "index"])->name("adminBlog");

Route::get("/admin/newsletter", [AdminNewsletterController::class, "index"])->name("adminNewsletter");

Route::get("/admin/footer", [AdminFooterController::class, "index"])->name("adminFooter");

Route::get("/admin/map", [AdminMapController::class, "index"])->name("adminMap");

Route::post('/send-article/{id}', [ArticleController::class, 'sendArticle']);


//EMAIL
Route::post("/send-email", [MailController::class, "sendEmail"]);

//RESSOURCE
Route::resource("/user", UserController::class);

Route::resource("/navbar", NavbarController::class);

Route::resource("/logo", LogoController::class);

Route::resource("/banner", BannerController::class);

Route::resource("/serviceHome", ServiceHomeController::class);

Route::resource("/aboutContent", AboutContentController::class);

Route::resource("/titreTesti", TitreTestiController::class);

Route::resource("/testimonial", TestimonialController::class);

Route::resource("/titreService", TitreServiceController::class);

Route::resource("/titreTeam", TitreTeamController::class);

Route::resource("/profilTeam", ProfilTeamController::class);

Route::resource("/titreSlogan", TitreSloganController::class);

Route::resource("/ready", ReadyController::class);

Route::resource("/homeContact", HomeContactController::class);

Route::resource("/servicePrime", ServicePrimeController::class);

Route::resource("/iconePrime", IconePrimeController::class);

Route::resource("/blogRapid", BlogRapidController::class);

Route::resource("/article", ArticleController::class);

// Route::resource("/commentaire/{id}", CommentaireController::class);

Route::post("/commentaire/{id}", [CommentaireController::class, "store"]);

Route::resource("/newsletter", NewsletterController::class);

Route::resource("/footer", FooterController::class);

// Route::resource("/tag", TagC)

Route::resource("/adresse", AdresseController::class);

Route::resource("/category", CategoryController::class);    

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Auth::routes();

Route::get('/home', function() {
    return view('homeLTE');
})->name('home')->middleware('auth');
