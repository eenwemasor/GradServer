<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/sendEmail', 'sendEmailController@sendMail');
Route::post('/sendApprovedMail', 'ApprovedApplicationMailController@index');
Route::post('/sendDeclinedMail', 'DeclinedApplicationMailController@index');
Route::post('/applicationAssigned', 'AssignedApplicationMailController@index');


Route::post('/applicationReview', 'ApplicationReviewController@index');
Route::post('/changePassword', 'PasswordReset@index');

Route::post('/resetForgottenPassword', 'ResetForgottenPassword@verifyEmail');
Route::post('/saveResetPassword', 'ResetForgottenPassword@saveResetPassword');

Route::post('/saveProfileImage', 'ProfileImageController@index');
Route::post('/updateProfileImage', 'ProfileImageController@update');
Route::post('/getExpertProfileImageRef', 'ProfileImageController@getProfileImageRef');
Route::post('/expertAverageRating', 'ProfileImageController@AverageRatingExpert');




