<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\User;
use Illuminate\Http\Request;
use App\Notify;
use App\EmailNotify;
use App\PriceShow;
use Illuminate\Support\Facades\DB;

class AdminForms extends Controller
{
    private $emails,$notifies,$price_count;
    public function __construct()
    {
        $this->emails=EmailNotify::where('reading','1')->orderBy('created_at','desc')->get();
        $this->notifies=Notify::where('reading','1')->orderBy('created_at','desc')->get();
        $this->price_count=PriceShow::all()->count();

    }
    public function getEvent()
    {
        $emails=$this->emails;
        $notifies=$this->notifies;
        $price_count=$this->price_count;

        return view('admin.AddEvent',compact('emails','users','notifies','price_count'));

    }
    public function getGalleryPic()
    {
        $emails=$this->emails;
        $notifies=$this->notifies;
        $price_count=$this->price_count;
        return view('admin.AddGalleryPic',compact('emails','users','notifies','price_count'));

    }
    public function getMedications()
    {
        $emails=$this->emails;
        $notifies=$this->notifies;
        $price_count=$this->price_count;
        return view('admin.AddMedications',compact('emails','users','notifies','price_count'));

    }
    public function getComparison()
    {
        $emails=$this->emails;
        $notifies=$this->notifies;
        $price_count=$this->price_count;
        return view('admin.AddComparison',compact('emails','users','notifies','price_count'));

    }
    public function getPerformance()
    {
        $users=User::all();
        $emails=$this->emails;
        $notifies=$this->notifies;
        $price_count=$this->price_count;
        return view('admin.AddPerformanceFile',compact('emails','users','notifies','price_count'));

    }
    public function getPromotionPlan()
    {
        $emails=$this->emails;
        $notifies=$this->notifies;
        $price_count=$this->price_count;
        return view('admin.AddPromotionPlanFile',compact('emails','users','notifies','price_count'));

    }
    public function getInstruction()
    {
        $users=User::all();

        $emails=$this->emails;
        $notifies=$this->notifies;
        $price_count=$this->price_count;
        return view('admin.SendPrivateInstruction',compact('emails','users','notifies','price_count'));

    }
    public function getUsers()
    {
        $users=User::all();

        $emails=$this->emails;
        $notifies=$this->notifies;
        $price_count=$this->price_count;
        return view('admin.UsersManager',compact('emails','users','notifies','price_count'));

    }
    public function BackUp()
    {

        $emails=$this->emails;
        $notifies=$this->notifies;
        $price_count=$this->price_count;
        return view('admin.BackUp',compact('emails','notifies','price_count'));

    }
    public function Truncate()
    {
        $tables = DB::select('SHOW TABLES');
        $tables = array_map('current',$tables);


        $emails=$this->emails;
        $notifies=$this->notifies;
        $price_count=$this->price_count;
        return view('admin.Truncate',compact('tables','emails','notifies','price_count'));

    }

    public function TruncateTable()
    {
        DB::table(\request('table_name'))->truncate();
        return back() ->with('message', 'You Successfully Truncate '.\request('table_name').'Table')->with('type','Well done!');

    }
}
