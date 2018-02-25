<?php

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

Route::get('/', 'LoginController@getall');
Route::get('/access', 'LoginController@acd');
Route::view('/permission', 'permission');


Route::post('/', 'LoginController@store_register');
Route::post('/login', 'SessionController@check');



/*Role*/

/*if admin*/

Route::group(['middleware'=>'roles','roles'=>['admin']],function()
{


    Route::namespace('Admin')->group(function (){
        Route::get('/removeNotifay','AdminController@removeNotifay');
        Route::get('/showCV/{id}','LoginController@ShowCV');
        Route::get('/changeReading','AdminController@changeReading');
        Route::get('/changeReadingEmail','AdminController@changeReadingEmail');
        Route::get('/getNotify','AdminController@getNotify');
        Route::get('/getNotifyE','AdminController@getNotifyE');



        Route::post('/editObjective', 'AdminController@EditObjective');
        Route::post('/inst', 'AdminController@Storeinst');
        Route::post('/performance', 'AdminController@Storeperformance');
        Route::get('/deletuser/{id}','AdminController@deletuser');
        Route::get('/removeEvent/{id}','AdminController@deleteEvent');
        Route::get('/removeMedication/{id}','AdminController@deleteMedication');
        Route::get('/removegallery/{id}','AdminController@deleteGallery');
        Route::get('/removeobject/{id}','AdminController@deleteObject');
        Route::post('/post', 'LoginController@StorePost');
        Route::get('/removepost/{id}','AdminController@deletepost');
        Route::get('/removeRow/{id}','AdminController@removeRow');
        Route::get('/removeRowM/{id}','AdminController@removeRowM');
        Route::get('/removeRowP/{id}','AdminController@removeRowP');
        Route::post('/editAdmin','AdminController@editAdmin');
        Route::post('/editCompany','AdminController@editCompany');
        Route::post('/editPublic','AdminController@editPublic');




        Route::post('/event', 'AdminController@StoreEvent');

        Route::post('/medecin', 'AdminController@StoreMedecin');

        Route::post('/img', 'AdminController@StoreImg');

        Route::prefix('/admin')->group(function (){
            Route::get('','AdminController@getuser');

            Route::get('/AddEvent','AdminForms@getEvent');
            Route::get('/AddGalleryPic','AdminForms@getGalleryPic');
            Route::get('/AddMedications','AdminForms@getMedications');
            Route::get('/AddComparison','AdminForms@getComparison');
            Route::get('/AddPerformanceFile','AdminForms@getPerformance');
            Route::get('/AddPromotionPlanFile','AdminForms@getPromotionPlan');
            Route::get('/SendPrivateInstruction','AdminForms@getInstruction');
            Route::get('/UsersManager','AdminForms@getUsers');
            Route::get('/Truncate','AdminForms@Truncate');
            Route::post('/Truncate','AdminForms@TruncateTable');
            Route::get('/BackUp', 'BackupController@index');
            Route::get('/BackUp/create', 'BackupController@create');
            Route::get('/BackUp/download/{file_name}', 'BackupController@download');
            Route::get('/BackUp/delete/{file_name}', 'BackupController@delete');
        });


    });





    Route::get('/promotionPlanShow',function (){
        return view('Forms.promotionPlanShow');
    });



    Route::post('/search', 'ShowFormController@dailyReportMorningShow');
    Route::post('/Adsearch', 'ShowFormController@dailyReportMorningShow');

    Route::post('/searchWeek', 'ShowFormController@weeklyPlanShow');
    Route::post('/AdsearchWeek', 'ShowFormController@weeklyPlanShow');

 Route::post('/searchMonth', 'ShowFormController@monthlyReportShow');
    Route::post('/AdsearchMonth', 'ShowFormController@monthlyReportShow');

 Route::post('/searchMonthPlan', 'ShowFormController@monthlyPlanShow');
    Route::post('/AdsearchMonthPlan', 'ShowFormController@monthlyPlanShow');


 Route::post('/searchPrice', 'ShowFormController@priceShowShow');
    Route::post('/AdsearchPrice', 'ShowFormController@priceShowShow');

    Route::post('/searchCom', 'ShowFormController@searchCom');
    Route::post('/searchAn', 'ShowFormController@searchAn');
    Route::post('/searchPromotion', 'ShowFormController@searchPromotion');
    Route::post('/searchVacation', 'ShowFormController@searchVacation');




///////////////Form Show///////


    Route::get('/checkShow',function(){
        return view('Forms.checks');
    });
////////////////////

    Route::get('/dailyReportMorningShow','ShowFormController@dailyReportMorningShow');
    //////////////////
    Route::get('/weeklyPlanShow','ShowFormController@weeklyPlanShow');

 //////////////////
    Route::get('/monthlyReportShow','ShowFormController@monthlyReportShow');

 //////////////////
    Route::get('/monthlyPlanShow','ShowFormController@monthlyPlanShow');



//////////////////////

////////////////////
    Route::get('/priceShowShow','ShowFormController@priceShowShow');
    Route::get('/priceShow',function(){
        return view('Forms.priceShow');
    });
    Route::post('/priceShow','formcontroller@storePriceShow');
///////////////////

    Route::get('/vactionShow',function(){
$users=\App\User::all();
        return view('Forms.vacationShow',compact('users'));
    });
    Route::get('/Comparison',function(){
        return view('Forms.comparsion');
    });
    Route::post('/Comparison','formcontroller@storeComparison');
    Route::post('/Anthor','formcontroller@storeAnthor');

    Route::get('/Anthor',function(){
        return view('Forms.Anthor');
    });




});

/*if user*/

Route::group(['middleware'=>'roles','roles'=>['user','admin']],function()
{
    Route::get('/logout', 'SessionController@destroy');

    Route::get('/home','LoginController@getPost' );
    Route::post('/profile/storeCv','LoginController@storeCv');




    Route::post('/sandmail','MailController@sendEmail');




//////// Routes Form/////////
    Route::get('/check',function(){
        return view('Forms.checks');
    });
    ////////////////////

    Route::get('/dailyReportMorning','formcontroller@getDaily');

    Route::post('/dailyReportMorning','formcontroller@storeDailyReportMorning');
    Route::post('/header','formcontroller@storeDailyReportMorningHeader');
    Route::post('/DailyReportEvening','formcontroller@storeDailyReportEvening');
    Route::post('/Pharmacy','formcontroller@StorePharmacy');
    Route::post('/notes','formcontroller@StoreNotes');
    Route::post('/footer','formcontroller@StoreFooter');

    //////////////////////
    Route::get('/monthReport',function(){
        return view('Forms.monthReport');
    });

    Route::post('/monthlyReport','formcontroller@storeMonthlyReport');

    ///////////////
    ///
    //////////////////////
    Route::get('/monthPlan/{dateCome?}','formcontroller@MonthlyPlan');

    Route::post('/monthlyPlan','formcontroller@storeMonthlyPlan');

    ///////////////


    ////////////////////
    Route::get('/priceShow',function(){
        return view('Forms.priceShow');
    });
    Route::post('/priceShow','formcontroller@storePriceShow');

    Route::post('/promotionPlan','formcontroller@storePromotionPlan');
    ///////////////////
    Route::get('/vaction',function(){
        $users=\App\User::all();
        return view('Forms.vaction',compact('users'));
    });
    Route::post('vaction','formcontroller@storeVaction');

 ///////////////////
    Route::get('/weeklyPlan',function(){
        return view('Forms.weeklyPlan');
    });
    Route::post('/weekly','formcontroller@storeWeeklyPlan');

    Route::get('/performance',function(){
        return view('Forms.performance');
    });
    Route::post('/searchPer', 'ShowFormController@searchPer');







});
Route::group(['middleware'=>'roles','roles'=>['user']],function() {
    Route::get('/profile', 'LoginController@getInst');
});


Route::get('/r', function (){
    return view('Forms.drms');
});

Route::get('/cv',function (){
   return view('cv');
});








