<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrmController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\DealController;
use App\Http\Controllers\ListController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\CompaignController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ResultCodeController;
use App\Http\Controllers\AppointmentController;
use Illuminate\Support\Facades\Artisan;

//auth
Route::get('/',[IndexController::class,'index'])->name('index');
Route::post('/signin',[IndexController::class,'signin']);
Route::get('/logout',[IndexController::class,'logout'])->middleware('auth');

//Admin Routes
Route::get('/admin',[AdminController::class,'index'])->middleware('auth');
Route::get('/admin/profile',[AdminController::class,'profile'])->middleware('auth');
Route::PUT('/admin/profile-update',[AdminController::class,'profile_update'])->middleware('auth');

//user
Route::get('/admin/users',[UserController::class,'index'])->middleware('auth');
Route::post('/admin/add-user',[UserController::class,'store'])->middleware('auth');
Route::get('/admin/view-user',[UserController::class,'show'])->middleware('auth');
Route::get('/admin/edit-user',[UserController::class,'edit'])->middleware('auth');
Route::PUT('/admin/update-user',[UserController::class,'update'])->middleware('auth');
Route::DELETE('/admin/delete-user',[UserController::class,'destroy'])->middleware('auth');
Route::get('/admin/delete-user/{user_id}',[UserController::class,'destroy'])->middleware('auth');
Route::get('/admin/mass-user',[UserController::class,'mass_delete'])->middleware('auth');
//Lists
Route::get('/admin/lists',[ListController::class,'index'])->middleware('auth');
Route::post('/admin/add-list',[ListController::class,'store'])->middleware('auth');
Route::get('/admin/view-list',[ListController::class,'show'])->middleware('auth');
Route::get('/admin/edit-list',[ListController::class,'edit'])->middleware('auth');
Route::PUT('/admin/update-list',[ListController::class,'update'])->middleware('auth');
Route::DELETE('/admin/delete-list',[ListController::class,'destroy'])->middleware('auth');
Route::get('/admin/mass-list',[ListController::class,'mass_delete'])->middleware('auth');
//Agents
Route::get('/admin/remote-agent',[AgentController::class,'index'])->middleware('auth');
Route::post('/admin/add-agent',[AgentController::class,'store'])->middleware('auth');
Route::get('/admin/view-agent',[AgentController::class,'show'])->middleware('auth');
Route::get('/admin/edit-agent',[AgentController::class,'edit'])->middleware('auth');
Route::PUT('/admin/update-agent',[AgentController::class,'update'])->middleware('auth');
Route::DELETE('/admin/delete-agent',[AgentController::class,'destroy'])->middleware('auth');
Route::get('/admin/mass-agent',[AgentController::class,'mass_delete'])->middleware('auth');
//Group
Route::get('/admin/groups',[GroupController::class,'index'])->middleware('auth');
Route::post('/admin/add-group',[GroupController::class,'store'])->middleware('auth');
Route::get('/admin/view-group',[GroupController::class,'show'])->middleware('auth');
Route::get('/admin/edit-group',[GroupController::class,'edit'])->middleware('auth');
Route::PUT('/admin/update-group',[GroupController::class,'update'])->middleware('auth');
Route::DELETE('/admin/delete-group',[GroupController::class,'destroy'])->middleware('auth');
Route::get('/admin/mass-group',[AgentController::class,'mass_delete'])->middleware('auth');
//Compaign

Route::get('/admin/compaigns',[CompaignController::class,'index'])->middleware('auth');
Route::post('/admin/add-compaign',[CompaignController::class,'store'])->middleware('auth');
Route::get('/admin/view-compaign',[CompaignController::class,'show'])->middleware('auth');
Route::get('/admin/edit-compaign',[CompaignController::class,'edit'])->middleware('auth');
Route::PUT('/admin/update-compaign',[CompaignController::class,'update'])->middleware('auth');
Route::DELETE('/admin/delete-compaign',[CompaignController::class,'destroy'])->middleware('auth');
Route::get('/admin/mass-compaign',[AgentController::class,'mass_delete'])->middleware('auth');
//Admin Reporting
Route::get('/admin/reporting',[ReportController::class,'index'])->middleware('auth');

//company
Route::get('/admin/setting',[CompanyController::class,'index'])->middleware('auth');
Route::post('/admin/company_setting',[CompanyController::class,'store'])->middleware('auth');
//user deal
Route::get('/admin/deal',[DealController::class,'index'])->middleware('auth');
Route::post('/add-deal',[DealController::class,'store'])->middleware('auth');
//user project
Route::get('/project',[ProjectController::class,'index'])->middleware('auth')->name('project');
Route::post('/project',[ProjectController::class,'store'])->middleware('auth');
Route::DELETE('/project-delete',[ProjectController::class,'destroy'])->middleware('auth');
Route::PUT('/update-project',[ProjectController::class,'update'])->middleware('auth');
Route::get('/edit-project',[ProjectController::class,'edit'])->middleware('auth');

//user calendar
Route::get('/calendar',[AppointmentController::class,'calendar'])->middleware('auth');
Route::post('/add-appointment',[AppointmentController::class,'store'])->middleware('auth');
Route::get('/appointment',[AppointmentController::class,'index'])->middleware('auth');
Route::get('/edit-appointment',[AppointmentController::class,'edit'])->middleware('auth');
Route::PUT('/update-appointment',[AppointmentController::class,'update'])->middleware('auth');
//user add contact
Route::get('/add-contact',[ContactController::class,'create'])->middleware('auth');
Route::get('/edit-contact/{id}',[ContactController::class,'edit'])->middleware('auth');
Route::post('/add-contact',[ContactController::class,'store'])->middleware('auth');
Route::post('/update-contact',[ContactController::class,'update_contact'])->middleware('auth');
Route::get('add-contactdashboard/{id}',[ContactController::class,'addcontact'])->middleware('auth');

Route::post('/update-details',[ContactController::class,'update_details'])->middleware('auth');
Route::get('/admin/contacts',[ContactController::class,'index'])->middleware('auth');
Route::get('/delete_contacts/{id}',[ContactController::class,'destroy'])->middleware('auth');


//user Dashboard
Route::get('/dashboard',[DashboardController::class,'index'])->middleware('auth');
Route::PUT('/update-dashboard',[DashboardController::class,'update'])->middleware('auth');
//user Crm

Route::get('/admin/crm',[CrmController::class,'index'])->middleware('auth');
//user chart chat
Route::get('/admin/chat',[ChatController::class,'index'])->middleware('auth');
Route::get('/search',[SearchController::class,'index'])->middleware('auth');
//user Dashboard
// Route::get('/my-dashboard',[DashboardController::class,'dashboard'])->middleware('auth');

//user Document
Route::get('/documents',[DocumentController::class,'index'])->middleware('auth');
Route::post('/documents',[DocumentController::class,'store'])->middleware('auth');
Route::post('/update-document',[DocumentController::class,'update'])->middleware('auth');
Route::get('/show-document',[DocumentController::class,'show'])->middleware('auth');
Route::DELETE('/delete-document',[DocumentController::class,'destroy'])->middleware('auth');
//user activity
Route::post('/add-activity',[ActivityController::class,'store'])->middleware('auth');
//user task
Route::post('/add-task',[TaskController::class,'store'])->middleware('auth');
//User Resultcode
Route::get('result/{id}',[ResultCodeController::class,'index'])->middleware('auth');
Route::post('addresultcode',[ResultCodeController::class,'addresultcode'])->middleware('auth');
// Route::post('addresult',[ResultCodeController::class,'AddResult'])->middleware('auth');
Route::get('admin/resultcode',[ResultCodeController::class,'ResultCode'])->middleware('auth')->name('resultcode');
Route::get('resultcodedel/{id}',[ResultCodeController::class,'destroy'])->middleware('auth');
Route::post('resultCodeEdit',[ResultCodeController::class,'resultCodeEdit'])->middleware('auth');

Route::get('dashboard/{id}',[DashboardController::class,'DashboardDetails'])->middleware('auth')->name('dashboard');
Route::get('dashboard/{id}/{contactId}',[DashboardController::class,'DashboardDetails'])->middleware('auth');
Route::get('admin/script',[ResultCodeController::class,'script'])->middleware('auth');
Route::post('addscript',[ResultCodeController::class,'addscript'])->middleware('auth');
Route::get('scriptdel/{id}',[ResultCodeController::class,'scriptdel'])->middleware('auth');
Route::get('dashboard/getscript/{id}',[ResultCodeController::class,'getscript'])->middleware('auth');
Route::get('admin/recchecked/{id}',[ResultCodeController::class,'recchecked'])->middleware('auth');
Route::get('admin/recunchecked/{id}',[ResultCodeController::class,'recunchecked'])->middleware('auth');
Route::get('admin/comchecked/{id}',[ResultCodeController::class,'comchecked'])->middleware('auth');
Route::get('admin/comunchecked/{id}',[ResultCodeController::class,'comunchecked'])->middleware('auth');
Route::get('admin/activechecked/{id}',[ResultCodeController::class,'activechecked'])->middleware('auth');
Route::get('admin/activeunchecked/{id}',[ResultCodeController::class,'activeunchecked'])->middleware('auth');
Route::get('reqcontact/{id}',[DashboardController::class,'reqcontact'])->middleware('auth');
Route::get('admin/emailsms',[DashboardController::class,'emailsms'])->middleware('auth');
Route::get('admin/email',[DashboardController::class,'add_email'])->middleware('auth');
Route::get('admin/sms',[DashboardController::class,'add_sms'])->middleware('auth');
Route::get('/return-dashboard',[DashboardController::class,'dashboardreturn'])->middleware('auth');
Route::match(['get', 'post'],'/newdashboard',[DashboardController::class,'newdashboard'])->middleware('auth');

///// Email Template Routes
Route::get('admin/email-send',[DashboardController::class,'email'])->middleware('auth');
Route::post('/renameEmail',[DashboardController::class,'renameEmailTemp'])->middleware('auth');
Route::get('admin/deleteEmailTemp/{id}',[DashboardController::class,'deleteEmailTemp'])->middleware('auth');
Route::post('/addEmail',[DashboardController::class,'addEmailTemp'])->middleware('auth');

///// SMS Template Routes
Route::get('admin/sms-templates',[DashboardController::class,'smsTemplates'])->middleware('auth');
Route::get('admin/sms-add/{id?}',[DashboardController::class,'smsForm'])->middleware('auth');
Route::post('admin/sms-add',[DashboardController::class,'smsFormPost'])->middleware('auth');
Route::get('smsTemDelete/{id}',[DashboardController::class,'smsTemDelete'])->middleware('auth');



Route::get('searchuser/{id}',[DashboardController::class,'searchuser'])->middleware('auth');

Route::get('/clear',function(){
    $res = Artisan::call('optimize:clear');
    return $res;
});

Route::get('/user',[DashboardController::class,'Userdetails'])->middleware('auth');
Route::post('/add-user',[UserController::class,'store'])->middleware('auth');

// User Active
Route::get('/useractive/{id}',[UserController::class,'checkeduser'])->middleware('auth');
Route::get('/editprofile/{id}',[UserController::class,'editprofile'])->middleware('auth');
Route::get('/dialinfo/{id}',[UserController::class,'dialinfo'])->middleware('auth');
Route::get('/allowswitch/{id}',[UserController::class,'allowswitch'])->middleware('auth');
Route::get('/mystats/{id}',[UserController::class,'mystats'])->middleware('auth');
Route::get('/changeproject/{id}',[UserController::class,'changeproject'])->middleware('auth');

Route::match(['get', 'post'],'/filter-contacts/{id}',[DashboardController::class,'filterProject'])->middleware('auth')->name('filter-contacts');
Route::get('/order-route',[DashboardController::class,'orderRoute'])->middleware('auth');
Route::post('/update-order-routing',[DashboardController::class,'orderRouteUpdate'])->middleware('auth');


/*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                                                Routes added by Mahar Nisar
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////*/


//Custom fields

Route::get('fields/duplicate/{id}', 'App\Http\Controllers\FieldsController@duplicate')->name('fields.duplicate')->middleware('auth');
Route::resource('fields', 'App\Http\Controllers\FieldsController')->middleware('auth');
Route::get('fields/delete/{id}', 'App\Http\Controllers\FieldsController@destroy')->middleware('auth');
Route::get('fields-move/{id}/{direction}', 'App\Http\Controllers\FieldsController@move')->middleware('auth');

//Contacts import


Route::get('download-contacts-smaple',[ContactController::class,'downloadcontactssample'])->middleware('auth');
Route::get('import-contacts',[ContactController::class,'importcontacts'])->middleware('auth');
Route::post('import-contacts-store',[ContactController::class,'importcontactsstore'])->name('import-contacts-store')->middleware('auth');

// Deals
Route::get('deals',[ContactController::class,'deals'])->middleware('auth');

//Collabrator


Route::post('add-collaborator',[UserController::class,'addcollabrator'])->middleware('auth');