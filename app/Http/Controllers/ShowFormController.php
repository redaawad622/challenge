<?php

namespace App\Http\Controllers;
use App\Anthor;
use App\Comparison;
use App\Preformance;
use App\PromotionPlan;
use App\User;
use App\Vaction;
use Illuminate\Http\Request;
use App\DailyReportMorning;
use App\DailyReportEvening;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Auth;


class ShowFormController extends Controller
{
    public function dailyReportMorningShow()
    {


        $users=User::all();
        $reports_headers=DB::table('daily_report_headers')->where('user_id', \request('select_name')
    )->whereDate( 'created_at', Carbon::parse(\request('date'))->toDateTimeString())->get();
 $reports_mornings=DB::table('daily_report_mornings')->where('user_id', \request('select_name'))
            ->whereDate( 'created_at', Carbon::parse(\request('date'))->toDateTimeString())->get();
 $reports_evenings=DB::table('daily_report_evenings')->where('user_id', \request('select_name'))
            ->whereDate( 'created_at', Carbon::parse(\request('date'))->toDateTimeString())->get();
 $reports_notes=DB::table('daily_report_nots')->where('user_id', \request('select_name'))
            ->whereDate( 'created_at', Carbon::parse(\request('date'))->toDateTimeString())->get();
 $reports_pharmacies=DB::table('daily_report_pharmacies')->where('user_id', \request('select_name'))
            ->whereDate( 'created_at', Carbon::parse(\request('date'))->toDateTimeString())->get();
$reports_footers=DB::table('daily_report_footers')->where('user_id', \request('select_name'))
            ->whereDate( 'created_at', Carbon::parse(\request('date'))->toDateTimeString())->get();

        $count__headers=DB::table('daily_report_headers')->where('user_id', \request('select_name')
        )->whereDate( 'created_at', Carbon::parse(\request('date'))->toDateTimeString())->count();
 $count__morning=DB::table('daily_report_mornings')->where('user_id', \request('select_name')
        )->whereDate( 'created_at', Carbon::parse(\request('date'))->toDateTimeString())->count();
 $count__evening=DB::table('daily_report_evenings')->where('user_id', \request('select_name')
        )->whereDate( 'created_at', Carbon::parse(\request('date'))->toDateTimeString())->count();
 $count__notes=DB::table('daily_report_nots')->where('user_id', \request('select_name')
        )->whereDate( 'created_at', Carbon::parse(\request('date'))->toDateTimeString())->count();
 $count__pharmacies=DB::table('daily_report_pharmacies')->where('user_id', \request('select_name')
        )->whereDate( 'created_at', Carbon::parse(\request('date'))->toDateTimeString())->count();
 $count__footers=DB::table('daily_report_footers')->where('user_id', \request('select_name')
        )->whereDate( 'created_at', Carbon::parse(\request('date'))->toDateTimeString())->count();
 $count=$count__headers+$count__morning+$count__evening+$count__notes+$count__pharmacies+$count__footers;

        $user_name = User::find(request('select_name'));


        if($count>=1)
        {
            return view('Forms.dailyReportMorningShow',compact('count__headers','count__morning','count__evening','count__notes','count__pharmacies','count__footers','reports_headers','reports_mornings','reports_evenings','reports_notes','reports_pharmacies','reports_footers','users','user_name'));
        }
        else
        {
            $reports_mornings=null;
            return view('Forms.dailyReportMorningShow',compact('reports_mornings','users'));
        }


    }

    public function weeklyPlanShow()
    {


        $users=User::all();
        $reports=DB::table('weekly_plans')->where('user_id', \request('select_name'))->where('week_number', \request('week_number'))
            ->whereMonth('date', '=',date('m',strtotime(request('date'))))->get();

        $count=DB::table('weekly_plans')->where('user_id', \request('select_name'))->where('week_number', \request('week_number'))
            ->whereMonth('date', '=',date('m',strtotime(request('date'))))->count();

        $user_name = User::find(request('select_name'));


        if($count>=1)
        {
            return view('Forms.weekPlanShow',compact('reports','users','user_name'));
        }
        else
        {
            $reports=null;
            return view('Forms.weekPlanShow',compact('reports','users'));
        }


    }

    public function monthlyReportShow()
    {
        $users=User::all();
        $reports=DB::table('monthly__reports')->where('user_id', \request('select_name'))
            ->whereMonth('date', '=',date('m',strtotime(request('date'))))->orderBy('date_num', 'ASC')->get();

        $count=DB::table('monthly__reports')->where('user_id', \request('select_name'))
            ->whereMonth('date', '=',date('m',strtotime(request('date'))))->count();

        $user_name = User::find(request('select_name'));

        $statments=DB::table('statment__monthly__reports')->where('user_id', \request('select_name'))
            ->whereMonth('date', '=',date('m',strtotime(request('date'))))->get();

        $sums=DB::table('sumtion_monthlies')->where('user_id', \request('select_name'))
            ->whereMonth('date', '=',date('m',strtotime(request('date'))))->get();

        $infos=DB::table('info__monthly__reports')->where('user_id', \request('select_name'))
            ->whereMonth('date', '=',date('m',strtotime(request('date'))))->get();




        if($count>=1)
        {
            return view('Forms.monthlyReportShow',compact('reports','users','user_name','statments','sums','infos'));
        }
        else
        {
            $reports=null;
            return view('Forms.monthlyReportShow',compact('reports','users'));
        }



    }
    public function monthlyPlanShow()
    {
        $users=User::all();
        $reports=DB::table('monthly__plans')->where('user_id', \request('select_name'))
            ->whereMonth('date', '=',date('m',strtotime(request('date'))))->orderBy('date_num', 'ASC')->get();

        $count=DB::table('monthly__plans')->where('user_id', \request('select_name'))
            ->whereMonth('date', '=',date('m',strtotime(request('date'))))->count();

        $user_name = User::find(request('select_name'));


        $infos=DB::table('monthly_plan_infos')->where('user_id', \request('select_name'))
            ->whereMonth('date', '=',date('m',strtotime(request('date'))))->get();




        if($count>=1)
        {
            return view('Forms.monthlyPlanShow',compact('reports','users','user_name','infos'));
        }
        else
        {
            $reports=null;
            return view('Forms.monthlyPlanShow',compact('reports','users'));
        }



    }
    public function priceShowShow()
    {

        $reports=DB::table('price_shows')
            ->whereMonth('created_at', '=',date('m',strtotime(request('date'))))->orderBy('created_at', 'DESC')->get();

        $count=DB::table('price_shows')
            ->whereMonth('created_at', '=',date('m',strtotime(request('date'))))->count();


        if($count>=1)
        {
            return view('Forms.priceShowShow',compact('reports'));
        }
        else
        {
            $reports=null;
            return view('Forms.priceShowShow',compact('reports'));
        }


    }
    public function searchCom()
    {

        $reports=Comparison::all();
        $count=Comparison::all()->count();


        if($count>=1)
        {
            return view('Forms.comparsion',compact('reports'));
        }
        else
        {
            $reports=null;
            return view('Forms.comparsion',compact('reports'));
        }


    }
    public function searchPromotion()
    {

        $reports=PromotionPlan::all();
        $count=PromotionPlan::all()->count();


        if($count>=1)
        {
            return view('Forms.promotionPlanShow',compact('reports'));
        }
        else
        {
            $reports=null;
            return view('Forms.promotionPlanShow',compact('reports'));
        }


    }
    public function searchAn()
    {

        $reports=Anthor::all();
        $count=Anthor::all()->count();


        if($count>=1)
        {
            return view('Forms.Anthor',compact('reports'));
        }
        else
        {
            $reports=null;
            return view('Forms.Anthor',compact('reports'));
        }


    }
 public function searchPer()
    {

        $reports=Preformance::where('user_id',Auth::user()->id)->get();
        $count=Preformance::where('user_id',Auth::user()->id)->count();


        if($count>=1)
        {
            return view('Forms.performance',compact('reports'));
        }
        else
        {
            $reports=null;
            return view('Forms.performance',compact('reports'));
        }


    }
public function searchVacation()
    {

            $user_name=User::where('id',\request('user_id'))->get();
            $users=User::all();

            $reports= Vaction::where('name',request('user_id'))->get();




        $count=Vaction::where('name',request('user_id')) ->count();




$innerReport=array();
$reports2=array();

        for ($i=0;$i<12;$i++)
            {
                $reports2[0]= DB::table('vactions')
                    ->select(DB::raw('sum(Annual)+sum(Connected)+sum(Objection) as tot') )
                    ->where('name', '=', \request('user_id'))
                    ->where('month', '=',$i+1)

                    ->get();
                $innerReport[$i]=$reports2;
            }




if($count>0)
{
    return view('Forms.vacationShow',compact('reports','innerReport','user_name','users'));

}
else
{
    $reports=null;
    return view('Forms.vacationShow',compact('reports','users'));


}



    }

}
