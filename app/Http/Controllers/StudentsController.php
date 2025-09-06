<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use Session;
use Redirect;
use App\Models\User;
use App\Models\Topic;
use App\Models\Reaction;
use App\Models\Thread;
use Hash;
use Qirolab\Laravel\Reactions\Traits\Reacts;
use Qirolab\Laravel\Reactions\Contracts\ReactsInterface;
use Qirolab\Laravel\Reactions\Traits\Reactable;
use Qirolab\Laravel\Reactions\Contracts\ReactableInterface;

class StudentsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $page_active = 'home';
        Session::forget('course_id');
        $Topics = Topic::all();
        $page_title = 'User Dashboard';
        return view('students.index',compact('page_title','Topics','page_active'));
    }

    public function allCourses(){
        $page_active = 'courses';
        Session::forget('course_id');
        $Topics = Topic::all();
        $page_title = 'All Courses';

        return view('students.allCourses',compact('page_title','Topics','page_active'));
    }

    

    public function settings(){
        $page_active = 'profile';
        Session::forget('course_id');
        $page_title = 'User Settings';

        return view('students.settings',compact('page_title','page_active'));
    }

    public function uploads(){
        $page_active = 'profile';
        Session::forget('course_id');
        $page_title = 'Image Upload';

        return view('students.upload',compact('page_title','page_active'));
    }

    public function update_image(Request $request){
        $id = Auth::user()->id;
        $path = 'uploads/users';
        if(isset($request->image)){
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $file->move($path, $filename);
            $image = $filename;
        }else{
            $image = $request->image_cheat;
        }

        $updateDetails = array (
            'image'=>$image,
        );

        DB::table('users')->where('id',$id)->update($updateDetails);
        Session::flash('message', "Changes have Been Saved");
        return Redirect::back();
    }


    public function security_settings(){
        $page_active = 'security';
        Session::forget('course_id');
        $page_title = 'Security Settings';

        return view('students.security_settings',compact('page_title','page_active'));
    }

    public function contact_admin(){
        $page_active = 'admin';
        Session::forget('course_id');
        $page_title = 'Contact Admin';

        return view('students.contact_admin',compact('page_title','page_active'));
    }

    public function bonus_videos(){
        $Topics = DB::table('topics')->where('is_bonus','1')->get();
        $page_active = 'bunus';
        Session::forget('course_id');
        $page_title = 'Bonus Videos';

        return view('students.bonus_videos',compact('page_title','page_active','Topics'));
    }

    public function player($encryption){
        $GetVideo = DB::table('topics')->where('video_encryption',$encryption)->get();
        foreach ($GetVideo as $key => $value) {
            # code...
            $VideoViewes = $value->video_views;
            // add views
            $NewViews = $VideoViewes+1;
            $updateDetails = array (
                  'video_views' => $NewViews
            );
            DB::table('topics')->where('id',$value->id)->update($updateDetails);
        }
        $page_active = 'player';
        Session::forget('course_id');
     
        if(Auth::user()->course_registered_id == 1 && Auth::user()->course_2_registered_id == 2){
            // Registered Both 
            $Topics = DB::table('topics')->limit(1)->where('video_encryption',$encryption)->get();
        }else if(Auth::user()->course_registered_id == 1 && Auth::user()->course_2_registered_id == null){
            // Registered one Course
            $Topics = DB::table('topics')->where('course_id',Auth::user()->course_registered_id)->limit(1)->where('video_encryption',$encryption)->get();
        }else if(Auth::user()->course_registered_id == null && Auth::user()->course_2_registered_id == 2){
            // $Courses = DB::table('courses')->where('id',Auth::user()->course_2_registered_id)->get();
            $Topics = DB::table('topics')->where('course_id',Auth::user()->course_2_registered_id)->limit(1)->where('video_encryption',$encryption)->get();
        }
        
        foreach($Topics as $values){
            $page_title = $values->title;
            return view('students.player',compact('page_title','Topics','page_active'));
        }
    }


    public function course_videos(){
        $page_active = 'courses';
        Session::forget('course_id');
        // Check What User Paid Forex

        // FIlter The Unpaid For
        $page_title = 'My Course Videos';
        // $Courses = DB::table('courses')->where('id','1')->get();
        if(Auth::user()->course_registered_id == 1 && Auth::user()->course_2_registered_id == 2){
            // Registered Both 
            $Courses = DB::table('courses')->get();
        }else if(Auth::user()->course_registered_id == 1 && Auth::user()->course_2_registered_id == null){
            // Registered one Course
            $Courses = DB::table('courses')->where('id',Auth::user()->course_registered_id)->get();
        }else if(Auth::user()->course_registered_id == null && Auth::user()->course_2_registered_id == 2){
            $Courses = DB::table('courses')->where('id',Auth::user()->course_2_registered_id)->get();
        }else{
            $Courses = DB::table('courses')->get();
        }
       

        return view('students.course_videos',compact('page_title','Courses','page_active'));
    }

    public function video_player(){
        $page_active = 'player';
        Session::forget('course_id');
        $page_title = 'Video Player';

        return view('students.video_player',compact('page_title','page_active'));
    }

    public function my_courses(){
        $page_active = 'courses';
    
        $page_title = 'My Courses';

        return view('students.my_courses',compact('page_title','page_active'));
    }
    public function get_vid_url(Request $request){
        return $request->url;
    }

    

    

    public function update_password(Request $request){
         $passwordPrevious = $request->previous;
         $newPassword = $request->newPassword;
         $newPasswordConfirm = $request->newPasswordConfirm;
         $Id = Auth::user()->id;
         $email = Auth::user()->email;
         $user = User::where('email', '=', $email)->first();

         if(Hash::check($passwordPrevious, $user->password)){
            //Update Password
            if($newPassword == $newPasswordConfirm){
                $password = Hash::make($newPassword);
                $updateDetails = array(
                    'password'=>$password,            
                );
                DB::table('users')->where('id',$Id)->update($updateDetails);
                Auth::guard('web')->logout();
                return Redirect::back();
            }
         }else{
            Session::flash('message', "The Passwors Provided Is Incorrect");
            return Redirect::back();
         }
    }

    public function updateSettings(Request $request){
        $id = Auth::user()->id;
        $updateDetails = array (
            'email' => $request->email,
            'name'=>$request->name,
            'mobile'=>$request->mobile,
            'address'=>$request->address,
            'country'=>$request->country,
        );
        DB::table('users')->where('id',$id)->update($updateDetails);

        Session::flash('message', "Changes have Been Saved");
        return response()->json(['success'=>'Changes Saved Successfully!']);
    }
    
    public function addReaction($article,$reaction){
        $user = Auth::user()->id;
        // CheckDuplicate
        $Reactions = DB::table('reactions')->where('user_id',$user)->where('threat_id',$article)->get();
        if($Reactions->isEmpty()){
            $Reaction = new Reaction;
            $Reaction->user_id = $user;
            $Reaction->threat_id = $article;
            $Reaction->type = $reaction;
            $Reaction->save();
            return "Success";
        }else{
            foreach($Reactions as $react){
                if($react->type == $reaction){
                    DB::table('reactions')->where('user_id',$user)->where('threat_id',$article)->delete();
                    return "Success";
                }else{
                    $updateDetails = array(
                       'type' => $reaction,
                    );
                    DB::table('reactions')->where('user_id',$user)->where('threat_id',$article)->update($updateDetails);
                    return "Success";
                }
            }
        }
       
        
    }

    public function ajaxRequestPost(Request $request)
    {
       $comment = $request->comment;
       $user = Auth::user()->id;
       $post = $request->topic_id;
       $Thread = new Thread;
       $Thread->content = $comment;
       $Thread->user_id = $user;
       $Thread->topic_id = $post;
       $Thread->save();

     
        return response()->json(['success'=>'Got Simple Ajax Request.']);
    }
    
}
