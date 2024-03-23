<?php

use App\Http\Controllers\ConnectionRequestController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostReactionAndCommentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PublicProfileController;
use App\Http\Controllers\ViewPeopleController;
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

Route::get('/aaaa', function () {
    return view('partials/login');
});
Route::get('/1', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('welcome');
});
Route::get('/11', function () {
    return view('messages');
});
Route::get('/dashboard', function () {
    return view('home');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/1', function () {
        return view('profile2');
    });

    // Profile related related routes
    Route::get('/me', [PublicProfileController::class, 'index'])->name('PublicProfile.view');
    Route::post('/fetchMyProfileData', [PublicProfileController::class, 'fetchMyProfileData'])->name('MyProfileData.view');
    Route::any('/saveMyProfileData', [PublicProfileController::class, 'saveMyProfileData'])->name('MyProfileData.save');
    Route::any('/saveMyProfilePic', [PublicProfileController::class, 'saveMyProfilePic'])->name('MyProfilePic.save');
    Route::any('/saveMyCoverPic', [PublicProfileController::class, 'saveMyCoverPic'])->name('MyCoverPic.save');
    // -- END Profile related related routes

    // Find people related related routes
    Route::get('/viewpeople', [ViewPeopleController::class, 'index'])->name('People.view');
    Route::post('/fetchpeopledata', [ViewPeopleController::class, 'fetchPeopleData'])->name('PeopleData.view');
    Route::get('/user/{id}', [ViewPeopleController::class, 'viewProfile'])->name('Profile.view');
    Route::any('fetchUserProfileData', [ViewPeopleController::class, 'viewProfileData'])->name('Profile.Data');
    // -- END Find people related related routes

    // connection request related routes
    // Route::get('//connection', [ConnectionRequestController::class, 'index'])->name('connection');
    Route::any('/send_request', [ConnectionRequestController::class, 'sendRequest'])->name('sendRequest.save');
    Route::any('/view_request', [ConnectionRequestController::class, 'getRequestList'])->name('Request.view');
    Route::any('/getMyFriendList', [ConnectionRequestController::class, 'getMyFriendList'])->name('MyFriends.view');
    Route::any('/reponse_to_request', [ConnectionRequestController::class, 'RequestAction'])->name('Request.action');
    // -- END connection request related routes

    // users posts related routes
    Route::any('createpost', [PostController::class, 'createPost'])->name('newPost.save');
    Route::post('getsingleuserposts', [PostController::class, 'getSingleUserPosts'])->name('PostSingleUser.view');
    // --END users posts related routes

    // Home Page Controller
    Route::get('/home', [HomePageController::class, 'index'])->name('dashboard');
    Route::post('trigger', [HomePageController::class, 'trigger'])->name('trigger');
    Route::post('/fetchHomePosts', [HomePageController::class, 'HomePostData'])->name('HomePost.view');
    //-- END Home Page Controller

    // Message Controller
    Route::get('/messages', [MessageController::class, 'index'])->name('messages');
    Route::post('/fetchMessagePeopleList', [MessageController::class, 'fetchMessagePeopleList'])->name('MessagePeopleList.view');
    Route::post('/fetchMessagePeopleDetailList', [MessageController::class, 'fetchMessagePeopleDetailList'])->name('MessagePeopleDetailList.view');
    Route::post('/fetchMessages', [MessageController::class, 'fetchMessages'])->name('MessageList.view');
    Route::post('/sendMessage', [MessageController::class, 'sendMessage'])->name('Message.send');
    //-- END Message Controller

    //--  Reaction Controller
    Route::any('send_reaction', [PostReactionAndCommentController::class, 'sendReaction'])->name('sendReaction.save');
    Route::any('getReactionOfMyown', [PostReactionAndCommentController::class, 'getReactionOfMyown'])->name('getReactionOfMyown');
    Route::any('newComment', [PostReactionAndCommentController::class, 'newComment'])->name('newComment.save');
    //-- END Reaction Controller
});

require __DIR__.'/auth.php';
