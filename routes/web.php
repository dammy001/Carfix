<?php
use App\User;
use Illuminate\Support\Facades\Input;
//use App\Carbon;
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

    //$today = Carbon::now();
    return view('index');
});


Route::post('/pay', 'PaymentController@redirectToGateway')->name('pay');
Route::get('/payment/callback', 'PaymentController@handleGatewayCallback');
Route::get('/transaction', 'PaymentController@transactionlist');

Auth::routes(['verify' => true]);

//Facebook Account Login
Route::get('/facebookredirect', 'SocialAuthFacebookController@redirect')->name('facebook');
Route::get('/callback', 'SocialAuthFacebookController@callback');

Route::get('/home', 'HomeController@index')->name('home');

//Google Account Login
Route::get('/googleredirect', 'SocialAuthGoogleController@redirect')->name('google');
Route::get('/callback', 'SocialAuthGoogleController@callback');

//User Dashboard
Route::get('/dashboard', 'UserDashboardController@UserDashboard')->name('userdashboard');

//Blog
Route::get('/blog', 'BlogController@index')->name('blog');
Route::get('/blog/{id}', 'BlogController@show')->name('blog.detail');

//Comment
Route::post('/comment', 'CommentController@store')->name('comment');

//Appointment
Route::get('/appointment', 'AppointmentController@index')->name('appointment');
Route::post('/appointment', 'AppointmentController@store')->name('appointment.store');

Route::any('/search', function(){
    $q = Input::get('q');
    $user = User::where('name', 'LIKE', '%'.$q.'%')->orWhere('email', 'LIKE', '%'.$q.'%')->get();
    if(count($user) > 0)
        return view('searchresult')->withDetails($users)->withQuery($q);
    else
        return view('searchresult')->withMessage('No Details Found. Try to search again!');
        return $this->error('not found');
});

//Contact
Route::get('/contact', function () {
    return view('contact');
});

//Gallery
Route::get('/gallery', function(){
    return view('gallery');
});
