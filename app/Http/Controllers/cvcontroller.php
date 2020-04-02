<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Validation\Validator;
use App\cv;
use Redirect;
use Illuminate\Http\Request;

class cvcontroller extends Controller
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

    // /////////////////////////////////////////////////////////
    public function add_cv(){


    	return view("add_cv");
    }
    public function insert_cv(Request $request){
    	 $validatedData = $request->validate([
           'title' => 'required|max:100',

            'cv' => 'required|mimes:doc,docx,pdf|max:2048',
       
    ]);


        $data=array();
        $data['title']=$request->title;
         $image=$request->file('cv');

        if ($image) {
            $image_name= str_random(5);
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='public/cv/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            if ($success) {
                $data['cv']=$image_url;
                $slid=DB::table('cvs')
                         ->insert($data);
              if ($slid) {
                 $notification=array(
                 'messege'=>'Successfully CV Inserted ',
                 'alert-type'=>'success'
                  );
                return Redirect()->route('add_cv')->with($notification);                      
             }else{
              $notification=array(
                'messege'=>'error to add',
                'alert-type'=>'error'
                  );
             return Redirect()->route('add_cv')->with($notification);
             }      
                
            }else{

              return Redirect()->back();
                
            }
        }else{
              return Redirect()->back();
      }

    }
    public function all_cv(){

    	$all_cvs=cv::all();
    	return view("all_cv",compact('all_cvs'));
    }
    public function delete_cv($id){
        $id=\Crypt::decrypt($id);
    	$cv_delete=cv::findorfail($id);
    	$delete=$cv_delete->cv;
    	unlink($delete);
    	$all=cv::findorfail($id)->delete();
    	if ($delete) {
                 $notification=array(
                 'messege'=>'Successfully CV Delete ',
                 'alert-type'=>'success'
                  );
                return Redirect()->route('all_cv')->with($notification);                      
             }else{
              $notification=array(
                 'messege'=>'error ',
                 'alert-type'=>'success'
                  );
                 return Redirect()->back()->with($notification);
             } 
        }  



         
}
