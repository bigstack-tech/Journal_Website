<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminAccessController;
use App\Http\Controllers\AdminCreateController;
use App\Http\Controllers\AdminCreateEditorialController;
use App\Http\Controllers\AdminCreateEmailController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdminEditorialController;
use App\Http\Controllers\AdminEmailController;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\AdminManageController;
use App\Http\Controllers\AdminPendingApproveController;
use App\Http\Controllers\AdminPendingPublicationController;
use App\Http\Controllers\AdminPublicationController;
use App\Http\Controllers\AdminRejectedController;
use App\Http\Controllers\AdminSendEmailController;
use App\Http\Controllers\AdminUpdateEditorialController;
use App\Http\Controllers\AdminUpdatePendingStatusController;
use App\Http\Controllers\AdminUserProfileController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\EditorialController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PublicationController;
use App\Http\Controllers\ForgotPasswordController;
use App\Mail\ApprovedPublicationMail;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\SendMailController;
use Illuminate\Support\Facades\Mail;

use App\Models\Journal_submission;
use Illuminate\Support\Facades\Notification;
use App\Notifications\SendEmailNotification;

use App\Models\Contact_Admin;


use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Cookie;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/contact', [HomeController::class, 'store'])->name('contact.admin');

Route::get('/about', [AboutController::class, 'index'])->name('about');

// Get Submission


Route::get('/forgot-password', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('/forgot-password', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
// Get Publications
Route::get('/publication', [PublicationController::class, 'index'])->name('publication');
Route::get('/journals/for/{id}', [PublicationController::class, 'show']);
Route::get('/view/journal/information/{id}', [PublicationController::class, 'show_abstract']);

// Get Editorial
Route::get('/editorial', [EditorialController::class, 'index'])->name('editorial');

// Get Admin
Route::get('/admin', [AdminAccessController::class, 'index']);

Route::middleware('auth:sanctum')->group(function ()  {
    Route::get('/user/panel', [DashboardController::class, 'index'])->name('dash');

    // Admin HAS BEEN DISABLED

    // Route::get('/manage_admins', [AdminManageController::class, 'index']);
    // Route::get('/remove_admin/{id}', [AdminManageController::class, 'destroy']);
    // Route::post('/add_admin', [AdminManageController::class, 'store']);
    // Route::get('/create_admin', [AdminManageController::class, 'AdminCreateController']);

    // Admin ENDS
    Route::get('/journal/submission', [PostController::class, 'index'])->name('journal.submission');
    Route::get('/journal', [PostController::class, 'show'])->name('user.journal');
    Route::get('/journals/{id}/edit', [PostController::class, 'edit'])->name('journals.edit');

    //
    Route::get('/journals/{id}/reviews', [ReviewController::class, 'index'])->name('reviews.index');
    Route::post('/journals/{id}/reviews', [ReviewController::class, 'store'])->name('reviews.store');
    


    // Update journal route
    Route::put('/journals/{id}', [PostController::class, 'update'])->name('journals.update');

    // Delete journal route
    Route::delete('/journals/{id}', [PostController::class, 'destroy'])->name('journals.destroy');

    Route::post('/upload/post', [PostController::class, 'store'])->name('upload.post');

    Route::get('/view/publications', [AdminPublicationController::class, 'index'])->name('view.publications');
    Route::get('/pending/publications', [AdminPublicationController::class, 'AdminPendingPublicationController'])->name('pending.publications');
    Route::post('/update_status/{id}', [AdminPublicationController::class, 'AdminUpdatePendingStatusController'])->name('update.journalStatus');
    Route::get('/rejected/publications', [AdminPublicationController::class, 'AdminRejectedController'])->name('rejected.publications');

    Route::get('/editorials', [AdminEditorialController::class, 'index'])->name('editorials');
    Route::get('/remove/editorial/{id}', [AdminEditorialController::class, 'destroy'])->name('remove.editorials');
    Route::post('/confirm/editorials', [AdminEditorialController::class, 'store'])->name('confirm.editorials');
    Route::get('/create/editorials', [AdminEditorialController::class, 'AdminCreateEditorialController'])->name('create.editorials');



    Route::get('/email', [AdminEmailController::class, 'index'])->name('email');
    Route::get('/email/update/template/{id}', [AdminEmailController::class, 'update'])->name('save.update.template');
    // Route::get('/create/email/{id}', [AdminEmailController::class, 'AdminCreateEmail'])->name('create-email');
    // Route::post('/send/emailto/{id}', [AdminEmailController::class, 'AdminSendEmailController'])->name('send.approvedjournal.email');

    Route::post('/user/profile', [AdminUserProfileController::class, 'index'])->name('settings.user.profile');

   Route::get('/view/messages', function(){
        $Contact_Admin = Contact_Admin::all();
        return view('admin.messages', compact('Contact_Admin'));
   })->name('view.messages');
    Route::get('/remove/message/{id}', function(string $id){
        $data = Contact_Admin::find($id);
        $data->delete();
        return redirect()->back();
    })->name('remove.message');

     Route::get('/forgot-password', function(){
        return view('auth.login');
    });

    Route::get('/logout', function(){
        Session::flush();
        Cookie::forget('laravel_session');
        // Cookie::forget('XSRF-TOKEN');
        return redirect()->back();
    });
});


