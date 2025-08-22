<?php

use App\Http\Controllers\MedicalRecordController;
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

Route::get('/', function () {
    return redirect('home');
});

Auth::routes();

Route::get('home', 'HomeController@index')->name('home');
Route::get('send-email', 'HomeController@sendEmail')->name('send-email');

Route::get('menu', 'MenuController@index');
Route::get('menu-create', 'MenuController@create');
Route::post('menu-save', 'MenuController@save');

Route::get('user-menu', 'MenuController@user');
Route::get('user-menu-create', 'MenuController@userMenuCreate');
Route::post('user-menu-save', 'MenuController@userMenuSave');

Route::get('profile-view', 'ProfileController@viewProfile');
Route::get('appointment-view', 'AppointmentController@viewAppointment');

Route::get('consents-view', 'ConsentsController@index');
Route::post('sign-save', 'ConsentsController@signStore');
Route::get('payment-receipt-list', 'PaymentController@index');
Route::get('payment-receipt-create', 'PaymentController@create');
// Route::post('payment-receipt-save', 'PaymentController@store');


Route::get('treatment-plan', 'TreatmentController@treatmentPlan');
Route::get('treatment-details', 'TreatmentController@treatmentDetails');
Route::get('treatment-guide', 'TreatmentController@treatmentGuide');
Route::get('nutrition-view', 'TreatmentController@nutrition');
Route::get('common-adverse-events', 'TreatmentController@commonAdverseEvents');
Route::get('optimizing-outcome', 'TreatmentController@optimizingOutcome');
Route::get('before-appointment', 'TreatmentController@beforeAppointment');

Route::get('quote-view', 'TreatmentController@quote');
Route::get('master-class', 'TreatmentController@masterClass');
Route::get('procedure-instruct', 'TreatmentController@procedureInstruct');
Route::get('faq', 'TreatmentController@faq');

Route::get('medical-history', 'MedicalRecordController@index');
Route::get('medical-history-create', 'MedicalRecordController@create');
Route::post('medical-history-save', 'MedicalRecordController@store');


