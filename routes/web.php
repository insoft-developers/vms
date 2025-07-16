<?php

use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InsuranceCompanyController;
use App\Http\Controllers\LicenseController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\VehicleJenisController;
use App\Http\Controllers\VehicleMerkController;
use App\Http\Controllers\VehicleTypeController;
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

require __DIR__.'/auth.php';

Route::get('/', function () {
    return view('dashboards.dashboard');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// Dashboard Routes
  Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
  Route::get('/analytics', [HomeController::class, 'analytics'])->name('analytics');


  Route::resource('department', DepartmentController::class);
  Route::get('/department_table', [DepartmentController::class, 'departmentTable'])->name('department.table');


  Route::resource('license', LicenseController::class);
  Route::get('/license_table', [LicenseController::class, 'licenseTable'])->name('license.table');

  Route::resource('driver', DriverController::class);
  Route::get('/driver_table', [DriverController::class, 'driverTable'])->name('driver.table');

  Route::resource('location', LocationController::class);
  Route::get('location_table', [LocationController::class, 'locationTable'])->name('location.table');

  Route::resource('insurance', InsuranceCompanyController::class);
  Route::get('/insurance_table', [InsuranceCompanyController::class, 'insuranceTable'])->name('insurance.table');

  Route::resource('vehicle_type', VehicleTypeController::class);
  Route::get('/vehicle_type_table', [VehicleTypeController::class, 'vehicleTypeTable'])->name('vehicle.type.table');

  Route::resource('vehicle_jenis', VehicleJenisController::class);
  Route::get('/vehicle_jenis_table', [VehicleJenisController::class, 'vehicleJenisTable'])->name('vehicle.jenis.table');

  Route::resource('vehicle_merk', VehicleMerkController::class);
  Route::get('/vehicle_merk_table', [VehicleMerkController::class, 'vehicleMerkTable'])->name('vehicle.merk.table');

  Route::resource('vehicle', VehicleController::class);
  Route::get('/vehicle_table', [VehicleController::class, 'vehicleTable'])->name('vehicle.table');




  //App Details Pages Routs
  Route::group(['prefix' => 'app'], function() {

    //Userdetail Page Routs
    Route::get('user/profile', [HomeController::class, 'userprofile'])->name('userdetail.userprofile');
    Route::get('user/add', [HomeController::class, 'useradd'])->name('userdetail.useradd');
    Route::get('user/userlist', [HomeController::class, 'userList'])->name('userdetail.userlist');
    Route::get('user/user-profile-edit', [HomeController::class, 'userProfileEdit'])->name('userdetail.userprofileedit');
  });

  //Policy Page Routs
  Route::group(['prefix' => ''], function() {
    Route::get('privacy-policy', [HomeController::class, 'PrivacyPolicy'])->name('userdetail.privacyPolicy');
    Route::get('terms-of-service', [HomeController::class, 'TermsOfUse'])->name('userdetail.termsofuse');
  });

//UI Pages Routs
  Route::group(['prefix' => 'ui'], function() {
    Route::get('avatars', [HomeController::class, 'UiAvatars'])->name('ui.avatars');
    Route::get('alerts', [HomeController::class, 'UiAlerts'])->name('ui.alerts');
    Route::get('badges', [HomeController::class, 'UiBadges'])->name('ui.badges');
    Route::get('breadcrumb', [HomeController::class, 'UiBreadcrumb'])->name('ui.breadcrumb');
    Route::get('buttons', [HomeController::class, 'UiButtons'])->name('ui.buttons');
    Route::get('buttongroup', [HomeController::class, 'UiButtongroup'])->name('ui.buttongroup');
    Route::get('boxshadows', [HomeController::class, 'UiBoxshadows'])->name('ui.boxshadows');
    Route::get('colors', [HomeController::class, 'UiColors'])->name('ui.colors');
    Route::get('cards', [HomeController::class, 'UiCards'])->name('ui.cards');
    Route::get('carousel', [HomeController::class, 'UiCarousel'])->name('ui.carousel');
    Route::get('grid', [HomeController::class, 'UiGrid'])->name('ui.grid');
    Route::get('helperclass', [HomeController::class, 'UiHelperClass'])->name('ui.helperclass');
    Route::get('images', [HomeController::class, 'UiImages'])->name('ui.images');
    Route::get('listgroup', [HomeController::class, 'UiListgroup'])->name('ui.listgroup');
    Route::get('media', [HomeController::class, 'UiMedia'])->name('ui.media');
    Route::get('modal', [HomeController::class, 'UiModal'])->name('ui.modal');
    Route::get('notification', [HomeController::class, 'UiNotification'])->name('ui.notification');
    Route::get('pagination', [HomeController::class, 'UiPagination'])->name('ui.pagination');
    Route::get('popovers', [HomeController::class, 'UiPopovers'])->name('ui.popovers');
    Route::get('progressbars', [HomeController::class, 'UiProgressbars'])->name('ui.progressbars');
    Route::get('typography', [HomeController::class, 'UiTypography'])->name('ui.typography');
    Route::get('tabs', [HomeController::class, 'UiTabs'])->name('ui.tabs');
    Route::get('tooltips', [HomeController::class, 'UiTooltips'])->name('ui.tooltips');
    Route::get('video', [HomeController::class, 'UiVideo'])->name('ui.video');
  });

//Forms Pages Routs
  Route::group(['prefix' => 'forms'], function() {
    Route::get('layout', [HomeController::class, 'FormsLayout'])->name('forms.layout');
    Route::get('inputgroup', [HomeController::class, 'FormsInputgroup'])->name('forms.inputgroup');
    Route::get('validation', [HomeController::class, 'FormsValidation'])->name('forms.validation');
    Route::get('switch', [HomeController::class, 'FormsSwitch'])->name('forms.switch');
    Route::get('checkbox', [HomeController::class, 'FormsCheckbox'])->name('forms.checkbox');
    Route::get('radio', [HomeController::class, 'FormsRadio'])->name('forms.radio');
    Route::get('textarea', [HomeController::class, 'FormsTextarea'])->name('forms.textarea');
  });

//Auth pages Routs
  Route::group(['prefix' => 'auth'], function() {
    Route::get('login', [HomeController::class, 'authLogin'])->name('auth.login');
    Route::get('register', [HomeController::class, 'authRegister'])->name('auth.register');
    Route::get('recover-password', [HomeController::class, 'authRecoverPassword'])->name('auth.recover-password');
    Route::get('confirm-email', [HomeController::class, 'authConfirmEmail'])->name('auth.confirm-email');
    Route::get('lock-screen', [HomeController::class, 'authlockScreen'])->name('auth.lock-screen');
  });
//Table Page Routs
  Route::group(['prefix' => 'table'], function() {
   Route::get('basics', [HomeController::class, 'tableBasics'])->name('table.tablebasics');
   Route::get('data', [HomeController::class, 'tableData'])->name('table.tabledata');
   Route::get('tree', [HomeController::class, 'tableTree'])->name('table.tabletree');
  });

  //Pricing Page Routs
  Route::group(['prefix' => 'pricing'], function() {
    Route::get('pricing1', [HomeController::class, 'Pricing1'])->name('pricing.pricing1');
    Route::get('pricing2', [HomeController::class, 'Pricing2'])->name('pricing.pricing2');
  });

  //Error Page Route
  Route::group(['prefix' => 'error'], function() {
    Route::get('error404', [HomeController::class, 'Error404'])->name('pageError.error404');
    Route::get('error500', [HomeController::class, 'Error500'])->name('pageError.error500');
  });

  //Extra Page Routs
  Route::group(['prefix' => 'pages'], function() {
    Route::get('timeline', [HomeController::class, 'TimeLine'])->name('timeline');
    Route::get('blankpage', [HomeController::class, 'BlankPages'])->name('blankpage');
    Route::get('maintenance', [HomeController::class, 'Maintenance'])->name('maintenance');
  });
