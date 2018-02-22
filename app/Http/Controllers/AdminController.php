<?php

namespace App\Http\Controllers;

use App\Comparison;
use App\DailyReportEvening;
use App\DailyReportHeader;
use App\DailyReportMorning;
use App\DailyReportPharmacy;
use App\EmailNotify;
use App\info_Monthly_Report;
use App\MonthlyPlanInfo;
use App\Notify;
use App\Post;
use App\Preformance;
use App\PriceShow;
use App\PromotionPlan;
use App\Vaction;
use App\WeeklyPlan;

use App\Event;
use App\Medication;
use App\Gallery;
use App\Objective;
use App\Instruction;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AdminController extends Controller
{

    //
   public function StoreEvent(){
       request()->validate([
           'title' => 'required|string',
           'edate'  => 'date|required',
           'time'  => 'required',
           'desc'  => 'required|string',
           'url'   => 'required|image'
       ]);
       $img_name=time().'.'.request('url')->getClientOriginalExtension();


       $event=new Event();
       $event->title = \request('title');
       $event->date  = \request('edate');
       $event->time  = \request('time');
       $event->description  = \request('desc');
       $event->url  = $img_name;
       $event->save();

       \request('url')->move('image',$img_name);
       return back();
   }
    public function StoreMedecin()
    {
        request()->validate([
            'MTitle' => 'required|string',
            'MDesc' => 'required|string',
            'MUrl' => 'required|image'
        ]);
        $img_name=time().'.'.request('MUrl')->getClientOriginalExtension();
        $medecine=new Medication();
        $medecine->title = \request('MTitle');
        $medecine->description = \request('MDesc');
        $medecine->url  = $img_name;
        $medecine->save();

        \request('MUrl')->move('image',$img_name);
        return back();
    }

    public function StoreImg(){
        request()->validate([
         'MUrl' => 'required|image',
        ]);

        $image=new Gallery();
        $img_name=time().'.'.request('MUrl')->getClientOriginalExtension();
        $image->url  = $img_name;
        $image->save();

        \request('MUrl')->move('image',$img_name);
        return back();
    }
    public function EditObjective(){

        request()->validate([
            'body' => 'required|string',
        ]);

        DB::table('objectives')
            ->where('id', \request('id'))
            ->update(['body' => \request('body')]);
        return back();
    }

    public function getuser()
    {
        $users=User::all();
        $emails=EmailNotify::where('reading','1')->orderBy('created_at','desc')->get();
        $notifies=Notify::where('reading','1')->orderBy('created_at','desc')->get();


        $dailyReport_count=DailyReportHeader::all()->count();
        $monthlyReport_count=info_Monthly_Report::all()->count();
        $monthlyPlan_count=MonthlyPlanInfo::all()->count();
        $weeklyPlan_count=WeeklyPlan::all()->count();
        $price_count=PriceShow::all()->count();
        $promotion_count=PromotionPlan::all()->count();
        $comp_count=Comparison::all()->count();
        $vac_count=Vaction::all()->count();


        return view('admin',compact('emails','users','notifies','dailyReport_count','monthlyPlan_count','monthlyReport_count','weeklyPlan_count','price_count','promotion_count','comp_count','vac_count'));

    }
    public function removeNotifay()
    {
        DB::table('notifies')->delete();
    }


    public function Storeinst(){

        request()->validate([

        ]);

        if (request('url')) {
            $img_name = time() . '.' . request('url')->getClientOriginalExtension();

        }



        $Inst=new Instruction();
        $Inst->body = \request('body');
        if(request('url'))
        {
            $Inst->url=$img_name;
        }
        $Inst->user_id=\request('select_name');
        $Inst->save();

        if(request('url'))
        {
            \request('url')->move('image',$img_name);
        }
        return back();
    }


    public function Storeperformance(){

        request()->validate([
            'pdate' => 'required',
            'url' => 'required',
            'select_name' => 'required',
        ]);

        if (request('url')) {
            $file_name = time() . '.' . request('url')->getClientOriginalExtension();

        }



        $perf=new Preformance();
        $perf->date = request('pdate');
        if(request('url'))
        {
            $perf->url=$file_name;
        }
        $perf->user_id=\request('select_name');
        $perf->save();

        if(request('url'))
        {
            \request('url')->move('image',$file_name);
        }
        return back();
    }


    public function deletuser($id)
    {

        User::where('id',$id)->delete();
        Instruction::where('user_id',$id)->delete();
        return back();


    }

    public function deleteEvent($id)
    {
        Event::where('id',$id)->delete();
        return back();

    }


    public function deleteMedication($id)
    {
        Medication::where('id',$id)->delete();
        return back();

    }
    public function deleteGallery($id)
    {
        Gallery::where('id',$id)->delete();
        return back();

    }
    public function deleteObject($id)
    {
        Objective::where('id',$id)->delete();
        return back();

    }
    public function deletepost($id)
    {
        Post::where('id',$id)->delete();
        return back();

    }

 public function removeRow($id)
    {
        $users=User::all();
        DailyReportMorning::where('id',$id)->delete();
        return view('Forms.dailyReportMorningShow',compact('users'));

    }

public function removeRowM($id)
    {
        $users=User::all();
        DailyReportEvening::where('id',$id)->delete();
        return view('Forms.dailyReportMorningShow',compact('users'));

    }

public function removeRowP($id)
    {
        $users=User::all();
        DailyReportPharmacy::where('id',$id)->delete();
        return view('Forms.dailyReportMorningShow',compact('users'));

    }

public function editAdmin()
    {
        DB::table('contacts')
            ->where('id', \request('id'))
            ->update(['A_mail1' => \request('A_mail1'),'A_mail2' => \request('A_mail2'),'A_num' => \request('A_num')]);
        return back();

    }
public function editCompany()
    {
        DB::table('contacts')
            ->where('id', \request('id'))
            ->update(['c_mail1' => \request('c_mail1'),'c_mail2' => \request('c_mail2'),'c_num' => \request('c_num')]);
        return back();

    }

public function editPublic()
    {
        DB::table('contacts')
            ->where('id', \request('id'))
            ->update(['p_mail1' => \request('p_mail1'),'p_mail2' => \request('p_mail2'),'p_num' => \request('p_num')]);
        return back();

    }


    public function changeReading()
    {
        DB::table('notifies')->update(['reading' => '2']);
        return response()->json(['success'=>true],200);
    }


   public function changeReadingEmail()
    {
        DB::table('email_notifies')->update(['reading' => '2']);
        return response()->json(['success'=>true],200);
    }

    public function getNotify()
    {
        $notifies=Notify::where('reading','0')->orderBy('created_at','desc')->get();
        $notifies_count=Notify::where('reading','1')->count();
        DB::table('notifies')->where('reading','0')->update(['reading' => '1']);

        return response()->json([
            'success'=>true,
            'notifies' => $notifies->toArray(),
            'notifies_count'   => $notifies_count
        ],200);

    }


 public function getNotifyE()
    {
        $notifies=EmailNotify::where('reading','0')->orderBy('created_at','desc')->get();
        $notifies_count=EmailNotify::where('reading','1')->count();
        DB::table('email_notifies')->where('reading','0')->update(['reading' => '1']);

        return response()->json([
            'success'=>true,
            'notifies' => $notifies->toArray(),
            'notifies_count' => $notifies_count
        ],200);

    }





}

