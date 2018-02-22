<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Cv;
use App\Instruction;
use Illuminate\Http\Request;
use App\Event;
use App\Gallery;
use App\Medication;
use App\Objective;
use App\User;
use App\Notify;
use App\Role;
use App\Post;
use Auth;
use Illuminate\Support\Facades\Input;

use Validator;



class LoginController extends Controller
{
   public function getall()
   {

   	 $events=Event::all();
   	 $galleries=Gallery::all();
   	 $medications=Medication::all();
   	 $objectives=Objective::all();
   	 $objectives_count=Objective::all()->count();
   	 $contacts=Contact::all();

   

   	 return view('login',compact('events','galleries','medications','objectives','objectives_count','contacts'));

   }
   public function acd()
   {

   	 return view('access');

   }
   public function store_register()
   {

   	request()->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'file_num'=>'required|unique:users|numeric',
            'password'=>'required|confirmed',
            'password_confirmation'=>'required',
            'url'=>'nullable',
        ]);

   	$user=new User();


   	if(request('url'))
        {
           $img_name=time().'.'.request('url')->getClientOriginalExtension();
        }
   	$user->name=request('name');
   	$user->email=request('email');
   	$user->file_num=request('file_num');

   	$user->password=bcrypt(request('password'));
   	if(request('url'))
        {
             $user->url=$img_name;
        }
     $user->save();   
    if(request('url'))
        {
           \request('url')->move('image',$img_name);
        }
        $notify=new Notify();
        $notify->content=\request('name').' registe in your users';
        $notify->reading='0';
        $notify->save();

       //add role

       $user->roles()->attach(Role::where('name','user')->first());

        auth()->login($user);


        return redirect('/');    
   	
   }
   public  function StorePost()
   {
       \request()->validate([
           'instruction' => 'string|nullable',

           'url' => 'image',

       ]);


       if (request('url')) {
           $img_name = time() . '.' . request('url')->getClientOriginalExtension();

       }


       if (request('file')) {
           $file_name = time() . 's' . '.' . request('file')->getClientOriginalExtension();
       }

       $post = new Post();
       if (request('instruction'))
       {
           $post->instruction = \request('instruction');
        }

       if(request('url'))
       {
           $post->url=$img_name;
       }
       if(request('file'))
       {
           $post->file=$file_name;
       }
       if (request('file_name')) {
           $fi = explode("\\", request('file_name'));
           $c = count($fi);
           $post->real_name = $fi[$c - 1];
       }
       if (request('url')||\request('instruction')||\request('url')||\request('file')) {
           $post->save();
       }

       if(request('url'))
       {
           \request('url')->move('image',$img_name);
       }
       if(request('file'))
       {
           \request('file')->move('image',$file_name);
       }

       return redirect()->back();

   }

   public function getPost()
   {
       $posts=Post::orderBy('created_at','desc')->take(30)->get();
       return view('home',compact('posts'));
   }
    public function getInst()
   {
       $instructions=Instruction::where('user_id',Auth::user()->id)->orderBy('created_at','desc')->take(30)->get();
       $cvs=Cv::where('user_id',Auth::user()->id)->orderBy('created_at','desc')->get();
       return view('profile',compact('instructions','cvs'));
   }

 public function storeCv(Request $request)
 {
     if ($request->ajax()) {



         $validation = Validator::make( Input::all(), [
             'job_title'=>'nullable|string',
             'pr_email'=>'nullable|email',
             'pr_adress'=>'nullable|string',
             'pr_contact'=>'nullable|string',
             'pr_date_birth'=>'nullable|date',
             'pr_marital_status'=>'nullable|string',
             'pr_file_number'=>'nullable|string',
             'sk_name'=>'nullable|string',
             'summary'=>'nullable|string|min:100',
             'ex_name'=>'nullable|string',
             'ex_date'=>'nullable|date',
             'ex_end'=>'nullable|date',
             'ex_place'=>'nullable|string',
             'respons'=>'nullable|string',
             'ed_name'=>'nullable|string',
             'ed_date'=>'nullable|date',
             'ed_end'=>'nullable|date',
             'ed_place'=>'nullable|string',
         ]);

         if( $validation->fails() )
         {
             return  response()->json ([
                 'success'=>false,
                 'errors' => $validation->errors()->toArray(),

             ]);
         }

     $cv=new Cv();
     $cv->job_title=$request->input('job_title');
     $cv->pr_email=$request->input('pr_email');
     $cv->pr_adress=$request->input('pr_adress');
     $cv->pr_contact=$request->input('pr_contact');
     $cv->pr_date_birth=$request->input('pr_date_birth');
     $cv->pr_marital_status=$request->input('pr_marital_status');
     $cv->pr_file_number=$request->input('pr_file_number');
     $cv->sk_name=$request->input('sk_name');
     $cv->summary=$request->input('summary');
     $cv->ex_name=$request->input('ex_name');
     $cv->ex_date=$request->input('ex_date');
     $cv->ex_end=$request->input('ex_end');
     $cv->ex_place=$request->input('ex_place');
     $cv->respons=$request->input('respons');
     $cv->ed_name=$request->input('ed_name');
     $cv->ed_date=$request->input('ed_date');
     $cv->ed_end=$request->input('ed_end');
     $cv->ed_place=$request->input('ed_place');

     $cv->user_id=Auth::user()->id;
     $cv->save();
         $notify=new Notify();
         $notify->content=Auth::user()->name.' Update his CV';
         $notify->reading='0';
         $notify->save();





         return response()->json(['success' => true], 200);

     }
 }

 public function ShowCV($id)
 {
     $cvs=Cv::where('user_id',$id)->orderBy('created_at','desc')->get();
     $user=User::where('id',$id)->get();
     return view('showCV',compact('cvs','user'));
 }





}
