<?php

namespace App\Http\Controllers;

use App\Anthor;
use App\DailyReportFooter;
use App\DailyReportHeader;
use App\DailyReportNots;
use App\DailyReportPharmacy;
use App\info_Monthly_Report;
use App\MonthlyPlanInfo;
use App\Notifications\databaseNotifiy;
use App\Notifications\emailNotification;
use App\Statment_Monthly_Report;
use App\sumtion_monthly;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


use App\DailyReportEvening;
use App\DailyReportMorning;
use App\Letter;
use App\PriceShow;
use App\PromotionPlan;
use App\Vaction;
use Auth;
use App\Comparison;
use Carbon\Carbon;
use Illuminate\Support\Facades\Notification;
use StreamLab\StreamLabProvider\Facades\StreamLabFacades;
use Validator;
use Illuminate\Support\Facades\Input;




class formcontroller extends Controller
{

    public function MonthlyPlan($dateCome=null)
    {

            return view('Forms.monthlyPlan',compact('dateCome'));


    }
    public function storeMonthlyPlan()
    {
    	$valid=request()->validate([

    		'city'=>'required|string',
    		'area'=>'required|string',
    		'name'=>'required',

    		]);


            $info = new MonthlyPlanInfo();
            $info->name = request('name');
            $info->city = request('city');
            $info->area = request('area');

            $info->user_id = Auth::user()->id;
            $info->date = date('Y-m-d', strtotime(request('date')));

            $info->save();

            $reports = array();
            for ($i = 1; $i <= cal_days_in_month(CAL_GREGORIAN, date('m', strtotime(request('date'))), date('Y', time())); $i++) {
                $reports[] =

                    array(
                        'date_num' => \request('date_num' . $i), 'day' => \request('day' . $i), 'location' => \request('location' . $i),
                        'pharm' => request('pharm' . $i), 'time' => request('time' . $i), 'locationPm' => \request('locationPm' . $i),
                        'pharmPm' => request('pharmPm' . $i), 'timePm' => request('timePm' . $i),

                        'user_id' => Auth::user()->id, 'date' => date('Y-m-d', strtotime(request('date'))),
                    );

            }
            DB::table('monthly__plans')->insert($reports);



        /*send notification*/

        $admins = User::whereHas('roles', function ($query) {

            $query->where('name', '=', 'admin');

        })->get();
        $data=Auth::user()->name . ' sand a Monthly Plan';


        StreamLabFacades::pushMessage('challenge','databaseNotifiy',$data);

        Notification::send($admins,new databaseNotifiy($data));




            return back()->withInput()->with('message', 'You successfully Sand the Monthly Report')->with('type', 'Well done!');

    }
    public function storeDailyReportMorning(Request $request)
    {


        if ($request->ajax()) {



            $validation = Validator::make( Input::all(), [
                'code_no'=>'nullable|string',
                'hosp_name'=>'required|string',
                'doctor_name'=>'required|string',
                'specialty'=>'required|string',
                'pro_f1'=>'nullable|string',
                'pro_f2'=>'nullable|string',
                'pro_r'=>'nullable|string',

            ]);


            if( $validation->fails() )
            {
                return  response()->json ([
                    'success'=>false,
                    'errors' => $validation->errors()->toArray(),

                ]);
            }

            $dailyReport=new DailyReportMorning();
            $dailyReport->code_no=$request->input('code_no');
            $dailyReport->hosp_name=$request->input('hosp_name');
            $dailyReport->doctor_name=$request->input('doctor_name');
            $dailyReport->specialty=$request->input('specialty');
            $dailyReport->pro_f1=$request->input('pro_f1');
            $dailyReport->pro_f2=$request->input('pro_f2');
            $dailyReport->pro_r=$request->input('pro_r');


            $dailyReport->user_id=Auth::user()->id;
            $dailyReport->save();

            /*send notification*/

            $admins = User::whereHas('roles', function ($query) {

                $query->where('name', '=', 'admin');

            })->get();
            $data=Auth::user()->name.' sand a Morning Daily Report';


            StreamLabFacades::pushMessage('challenge','databaseNotifiy',$data);

            Notification::send($admins,new databaseNotifiy($data));



            return response()->json(['success' => true], 200);


        }


    }
    public function storeDailyReportEvening(Request $request)
    {


        if ($request->ajax()) {



            $validation = Validator::make( Input::all(), [
                'code_m'=>'nullable|string',
                'doctors_name'=>'required|string',
                'specialty_m'=>'required|string',
                'class_m'=>'nullable|string',
                'clinic_address'=>'required|string',
                'prd_f1'=>'nullable|string',
                'prd_f2'=>'nullable|string',
                'prd_r'=>'nullable|string',
                'prd_d'=>'nullable|string',

            ]);

            if( $validation->fails() )
            {
                return  response()->json ([
                    'success'=>false,
                    'errors' => $validation->errors()->toArray(),

                ]);
            }

            $dailyReport=new DailyReportEvening();
            $dailyReport->code_m=$request->input('code_m');
            $dailyReport->doctors_name=$request->input('doctors_name');
            $dailyReport->specialty_m=$request->input('specialty_m');
            $dailyReport->class_m=$request->input('class_m');
            $dailyReport->clinic_address=$request->input('clinic_address');
            $dailyReport->prd_f1=$request->input('prd_f1');
            $dailyReport->prd_f2=$request->input('prd_f2');
            $dailyReport->prd_r=$request->input('prd_r');
            $dailyReport->prd_d=$request->input('prd_d');


            $dailyReport->user_id=Auth::user()->id;
            $dailyReport->save();


            /*send notification*/

            $admins = User::whereHas('roles', function ($query) {

                $query->where('name', '=', 'admin');

            })->get();
            $data=Auth::user()->name.' sand a Evening Daily Report';


            StreamLabFacades::pushMessage('challenge','databaseNotifiy',$data);

            Notification::send($admins,new databaseNotifiy($data));


 /*send notification email*/

            $admins = User::whereHas('roles', function ($query) {

                $query->where('name', '=', 'admin');

            })->get();
            $data=Auth::user()->name.' sand a Evening Daily Report';
            $path='/dailyReportMorningShow';
            $subject='Evening Daily Report ';


            Notification::send($admins,new emailNotification($subject,$data,$path));




            return response()->json(['success' => true], 200);

        }


    }
    public function StorePharmacy(Request $request)
    {


        if ($request->ajax()) {



            $validation = Validator::make( Input::all(), [
                'code_p'=>'nullable|string',
                'pharmacy'=>'required|string',
                'address'=>'required|string',


            ]);

            if( $validation->fails() )
            {
                return  response()->json ([
                    'success'=>false,
                    'errors' => $validation->errors()->toArray(),

                ]);
            }

            $dailyReport=new DailyReportPharmacy();
            $dailyReport->code_p=$request->input('code_p');
            $dailyReport->pharmacy=$request->input('pharmacy');
            $dailyReport->address=$request->input('address');

            $dailyReport->user_id=Auth::user()->id;
            $dailyReport->save();



            /*send notification*/

            $admins = User::whereHas('roles', function ($query) {

                $query->where('name', '=', 'admin');

            })->get();
            $data=Auth::user()->name.' sand a Pharmacy Daily Report  ';


            StreamLabFacades::pushMessage('challenge','databaseNotifiy',$data);

            Notification::send($admins,new databaseNotifiy($data));




            return response()->json(['success' => true], 200);

        }


    }
    public function StoreNotes(Request $request)
    {


        if ($request->ajax()) {



            $validation = Validator::make( Input::all(), [
                'publicNote'=>'nullable|string',


            ]);

            if( $validation->fails() )
            {
                return  response()->json ([
                    'success'=>false,
                    'errors' => $validation->errors()->toArray(),

                ]);
            }

            $dailyReport=new DailyReportNots();
            $dailyReport->publicNote=$request->input('publicNote');

            $dailyReport->user_id=Auth::user()->id;
            $dailyReport->save();


            return response()->json(['success' => true], 200);

        }


    }
    public function StoreFooter(Request $request)
    {


        if ($request->ajax()) {



            $validation = Validator::make( Input::all(), [
                'hospital'=>'nullable|string',
                'hospital_doctor'=>'nullable|string',
                'medical_center'=>'nullable|string',
                'medical_center_doctor'=>'nullable|string',
                'clinic_doctor'=>'nullable|string',
                'pharmacies'=>'nullable|string',
                'aa'=>'nullable|string',
                'ab'=>'nullable|string',
                'ac'=>'nullable|string',
                'ba'=>'nullable|string',
                'bb'=>'nullable|string',
                'bc'=>'nullable|string',
                'ca'=>'nullable|string',
                'cb'=>'nullable|string',
                'cc'=>'nullable|string',
                'cm_all'=>'nullable',


            ]);

            if( $validation->fails() )
            {
                return  response()->json ([
                    'success'=>false,
                    'errors' => $validation->errors()->toArray(),

                ]);
            }

            $dailyReport=new DailyReportFooter();
            $dailyReport->hospital=$request->input('hospital');
            $dailyReport->hospital_doctor=$request->input('hospital_doctor');
            $dailyReport->medical_center=$request->input('medical_center');
            $dailyReport->medical_center_doctor=$request->input('medical_center_doctor');
            $dailyReport->clinic_doctor=$request->input('clinic_doctor');
            $dailyReport->pharmacies=$request->input('pharmacies');
            $dailyReport->aa=$request->input('aa');
            $dailyReport->ab=$request->input('ab');
            $dailyReport->ac=$request->input('ac');
            $dailyReport->ba=$request->input('ba');
            $dailyReport->bb=$request->input('bb');
            $dailyReport->bc=$request->input('bc');
            $dailyReport->ca=$request->input('ca');
            $dailyReport->cb=$request->input('cb');
            $dailyReport->cc=$request->input('cc');
            $dailyReport->cm_all=$request->input('cm_all');

            $dailyReport->user_id=Auth::user()->id;
            $dailyReport->save();



            /*send notification*/

            $admins = User::whereHas('roles', function ($query) {

                $query->where('name', '=', 'admin');

            })->get();
            $data=Auth::user()->name.' Complete Daily Report  ';


            StreamLabFacades::pushMessage('challenge','databaseNotifiy',$data);

            Notification::send($admins,new databaseNotifiy($data));





            return response()->json(['success' => true], 200);

        }


    }
    public function storeDailyReportMorningHeader(Request $request)
    {


        if ($request->ajax()) {



            $validation = Validator::make( Input::all(), [
                'area'=>'required|string',
                'line'=>'required|string',


            ]);

            if( $validation->fails() )
            {
                return  response()->json ([
                    'success'=>false,
                    'errors' => $validation->errors()->toArray(),

                ]);
            }

            $dailyReportheader=new DailyReportHeader();
            $dailyReportheader->area=$request->input('area');
            $dailyReportheader->line=$request->input('line');
            $dailyReportheader->date=date('Y-m-d',time());


            /*send notification*/

            $admins = User::whereHas('roles', function ($query) {

                $query->where('name', '=', 'admin');

            })->get();
            $data=Auth::user()->name.' Start  Daily Report  ';


            StreamLabFacades::pushMessage('challenge','databaseNotifiy',$data);

            Notification::send($admins,new databaseNotifiy($data));




            $dailyReportheader->user_id=Auth::user()->id;
            $dailyReportheader->save();



            return response()->json(['success' => true], 200);

        }


    }


    public function storeletter()
    {
       $valid= request()->validate([
            'cityNum'=>'required|string',
            'category'=>'required|string',
            'unit'=>'required|string',
            'totalQ'=>'required|string',
            'recievedQ'=>'required|string',
            'price'=>'required',
            'total'=>'required|string',
            ]);


            $Letter = new Letter;

            $Letter->cityNum = request('cityNum');
            $Letter->category = request('category');
            $Letter->unit = request('unit');
            $Letter->totalQuantity = request('totalQ');
            $Letter->recievedQuantity = request('recievedQ');
            $Letter->price = request('price');
            $Letter->total = request('total');
            $Letter->save();


            return back()->withInput();

    }
    public function storePriceShow()
    {
        $valid = request()->validate([
            'categoryName'=>'required|string',
            'companyMedecin'=>'required|string',
            'refill'=>'required|string',

            'total'=>'required|numeric',

            'date'=>'date',
            ]);

            $PriceShow = new PriceShow;

            $PriceShow->categoryName = request('categoryName');
            $PriceShow->companyMedecin = request('companyMedecin');
            $PriceShow->refill = request('refill');
            $PriceShow->unitPrice = request('unitPrice');
            $PriceShow->quantity = request('quantity');
            $PriceShow->total = request('total');
            $PriceShow->note = request('note');
            $PriceShow->date = date('Y-m-d', strtotime(request('date')));
            $PriceShow->save();


            return back()->withInput()->with('message', 'You successfully Sand the Report')->with('type', 'Well done!');


    }
    public function storePromotionPlan()
    {
        request()->validate([

            'url'=>'required',
        ]);
        $file_name=time().'.'.request('url')->getClientOriginalExtension();

        $PromotionPlan=new PromotionPlan;

        $PromotionPlan->url=$file_name;
        $PromotionPlan->date=request('date');

        $PromotionPlan->save();
        request('url')->move('image',$file_name);



        return back();

    }
    public function storeVaction()
    {
        $valid=request()->validate([
        'name'=>'required|string',
        'job'=>'required|string',

        'month'=>'required|numeric',
        'annual'=>'nullable|numeric',
        'connected'=>'nullable|numeric',
        'objection'=>'nullable|numeric',
        ]);


            $Vaction = new Vaction;

            $Vaction->name = request('name');
            $Vaction->job = request('job');

            $Vaction->month = request('month');
            $Vaction->Annual = request('annual');
            $Vaction->Connected = request('connected');
            $Vaction->Objection = request('objection');
            $Vaction->save();
            return back()->withInput()->with('message', 'You successfully Sand the Report')->with('type', 'Well done!');


    }
    public function storeComparison()
    {
        request()->validate([

        'url'=>'required',
        ]);
        $file_name=time().'.'.request('url')->getClientOriginalExtension();

        $Comparison=new Comparison;

        $Comparison->url=$file_name;

        $Comparison->save();
        request('url')->move('image',$file_name);

        return back();


    }
    public function storeAnthor()
    {
        request()->validate([

        'url'=>'required',
        ]);
        $file_name=time().'.'.request('url')->getClientOriginalExtension();

        $Anthor=new Anthor();

        $Anthor->url=$file_name;

        $Anthor->save();
        request('url')->move('image',$file_name);

        return back();


    }
    public function storeWeeklyPlan()
    {
       $valided= request()->validate([
            'week_number' => 'required|numeric',
            'leader' => 'required|string',

            'name_am' => 'nullable|string',
            'name_pm' => 'nullable|string',
            'starting_point_am' => 'nullable|string',
            'starting_point_pm' => 'nullable|string',
            'time_am' => 'nullable|string',
            'time_pm' => 'nullable|string',


        ]);

            $reports = array();

            for ($i = 1; $i <= 5; $i++) {
                $reports[] =

                    array(
                        'week_number' => \request('week_number'), 'leader' => \request('leader'), 'date' => date('Y-m-d', time()), 'user_id' => Auth::user()->id,
                        'day' => request('day' . $i), 'name_am' => request('name_am' . $i), 'name_pm' => request('name_pm' . $i), 'starting_point_am' => request('starting_point_am' . $i),
                        'starting_point_pm' => request('starting_point_pm' . $i), 'time_am' => request('time_am' . $i), 'time_pm' => request('time_pm' . $i),
                    );

            }


            DB::table('weekly_plans')->insert($reports);



        /*send notification*/

        $admins = User::whereHas('roles', function ($query) {

            $query->where('name', '=', 'admin');

        })->get();
        $data=Auth::user()->name . ' sand a Weekly Plan';


        StreamLabFacades::pushMessage('challenge','databaseNotifiy',$data);

        Notification::send($admins,new databaseNotifiy($data));


        return back()->withInput()->with('message', 'You successfully Sand the Report')->with('type', 'Well done!')->withInput();

    }

    public function storeMonthlyReport()
    {
        $valid= request()->validate([
            'pranch'=>'required|string',
            'name'=>'required|string',
            'place'=>'required',
            'area'=>'required',
            'km_start'=>'required',
            'km_end'=>'required',
            'km_consum'=>'required',
            'km_paid'=>'required',




        ]);

            $statment = new Statment_Monthly_Report;
            $statment->work_days_pa = request('work_days_pa');
            $statment->doctors_clinic_pa = request('doctors_clinic_pa');
            $statment->pharmacy_pa = request('pharmacy_pa');
            $statment->station_h_pa = request('station_h_pa');
            $statment->station_m_pa = request('station_m_pa');
            $statment->station_w_pa = request('station_w_pa');
            $statment->doctors_num_h_pa = request('doctors_num_h_pa');
            $statment->doctors_num_m_pa = request('doctors_num_m_pa');
            $statment->doctors_num_w_pa = request('doctors_num_w_pa');
            $statment->eg_pranch_pa = request('eg_pranch_pa');
            $statment->work_days_ac = request('work_days_ac');
            $statment->doctors_clinic_ac = request('doctors_clinic_ac');
            $statment->pharmacy_ac = request('pharmacy_ac');
            $statment->station_h_ac = request('station_h_ac');
            $statment->station_m_ac = request('station_m_ac');
            $statment->station_w_ac = request('station_w_ac');
            $statment->doctors_num_h_ac = request('doctors_num_h_ac');
            $statment->doctors_num_m_ac = request('doctors_num_m_ac');
            $statment->doctors_num_w_ac = request('doctors_num_w_ac');
            $statment->eg_pranch_ac = request('eg_pranch_ac');
            $statment->user_id = Auth::user()->id;
            $statment->date = date('Y-m-d', time());
            $statment->save();

            $info = new info_Monthly_Report();
            $info->pranch = request('pranch');
            $info->name = request('name');
            $info->place = request('place');
            $info->area = request('area');
            $info->km_start = request('km_start');
            $info->km_end = request('km_end');
            $info->km_consum = request('km_consum');
            $info->km_paid = request('km_paid');
            $info->total_samples = request('total_samples');
            $info->paid_samples = request('paid_samples');
            $info->back_samples = request('back_samples');
            $info->average_samples = request('average_samples');
            $info->user_id = Auth::user()->id;
            $info->date = date('Y-m-d', time());
            $info->save();

            $sumtion = new sumtion_monthly();
            $sumtion->doc = request('doc');
            $sumtion->ph = request('ph');
            $sumtion->station_h = request('station_h');
            $sumtion->station_m = request('station_m');
            $sumtion->station_w = request('station_w');
            $sumtion->num_h = request('num_h');
            $sumtion->num_m = request('num_m');
            $sumtion->num_w = request('num_w');
            $sumtion->pr = request('pr');
            $sumtion->actual = request('actual');
            $sumtion->user_id = Auth::user()->id;
            $sumtion->date = date('Y-m-d', time());
            $sumtion->save();

            $reports = array();
            for ($i = 1; $i <= cal_days_in_month(CAL_GREGORIAN, date('m', time()), date('Y', time())); $i++) {
                $reports[] =

                    array(
                        'date_num' => \request('date_num' . $i), 'day_name' => \request('day_name' . $i), 'rou_pm' => \request('route_pm' . $i),
                        'doctors_pm' => request('doctors_pm' . $i), 'pharma_pm' => request('pharma_pm' . $i), 'rou_am' => \request('route_am' . $i),
                        'station_h_am' => request('station_h_am' . $i), 'station_m_am' => request('station_m_am' . $i), 'station_w_am' => request('station_w_am' . $i),
                        'doctors_num_h_am' => request('doctors_num_h_am' . $i), 'doctors_num_m_am' => request('doctors_num_m_am' . $i), 'doctors_num_w_am' => request('doctors_num_w_am' . $i),
                        'egption_pranch' => request('egption_pranch' . $i), 'actual_paid' => request('actual_paid' . $i), 'user_id' => Auth::user()->id, 'date' => date('Y-m-d', time()),
                    );

            }


            DB::table('monthly__reports')->insert($reports);


        /*send notification*/

        $admins = User::whereHas('roles', function ($query) {

            $query->where('name', '=', 'admin');

        })->get();
        $data=Auth::user()->name . ' sand a Monthly Reports';

        StreamLabFacades::pushMessage('challenge','databaseNotifiy',$data);

        Notification::send($admins,new databaseNotifiy($data));


            return back()->withInput()->with('message', 'You successfully Sand the Monthly Report')->with('type', 'Well done!');

    }
    
    public function getDaily()
    {
   $count__headers=DB::table('daily_report_headers')->where('user_id', Auth::user()->id
        )->whereDate( 'created_at', Carbon::parse(date('Y/m/d',time()))->toDateTimeString())->count();
        
        $count__footers=DB::table('daily_report_footers')->where('user_id', Auth::user()->id
        )->whereDate( 'created_at', Carbon::parse(date('Y/m/d',time()))->toDateTimeString())->count();
    		
            return view('Forms.dailyReportMorning',compact('count__headers','count__footers'));

    }
    
    


}
