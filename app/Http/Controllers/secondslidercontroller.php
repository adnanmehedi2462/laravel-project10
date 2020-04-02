<?php

namespace App\Http\Controllers;
use DB; 
use Illuminate\Validation\Validator;
use App\second_slider;
use Redirect;
use Illuminate\Http\Request;

class secondslidercontroller extends Controller
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
    // /////////////////////
    public function add_second_slider(){

          return view("add_second_slider");
         }
         public function insert_second_slider(Request $request){

  $validatedData = $request->validate([
           'about' => 'required|max:100',

            'photo' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
       
    ]);


        $data=array();
        $data['about']=$request->about;
         $image=$request->file('photo');

        if ($image) {
            $image_name= str_random(5);
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='public/sliderimgsecond/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            if ($success) {
                $data['photo']=$image_url;
                $slid=DB::table('second_sliders')
                         ->insert($data);
              if ($slid) {
                 $notification=array(
                 'messege'=>'Successfully Image Slider Inserted ',
                 'alert-type'=>'success'
                  );
                return Redirect()->route('add_second_slider')->with($notification);                      
             }else{
              $notification=array(
                'messege'=>'error to add',
                'alert-type'=>'error'
                  );
             return Redirect()->route('add_second_slider')->with($notification);
             }      
                
            }else{

              return Redirect()->back();
                
            }
        }else{
              return Redirect()->back();
      }

  }

public function all_second_slider(){
	$all_second=second_slider::all();
	return view("all_second_slider",compact('all_second'));

}
public function edit_second_slider($id){
  $id=\Crypt::decrypt($id);
   $edit_second_slid=second_slider::findorfail($id);
   return view("edit_second_slider",compact('edit_second_slid'));
}
public function update_second_slider(Request $request,$id){

	 $data=array();
        $data['about']=$request->about;
        $image=$request->file('photo');
      if ($image) {
       $image_name=str_random(20);
       $ext=strtolower($image->getClientOriginalExtension());
       $image_full_name=$image_name.'.'.$ext;
       $upload_path='public/sliderimgsecond/';
       $image_url=$upload_path.$image_full_name;
       $success=$image->move($upload_path,$image_full_name);
       if ($success) {
          $data['photo']=$image_url;
             $img=DB::table('second_sliders')->where('id',$id)->first();
             $image_path = $img->photo;
             $done=unlink($image_path);
          $slidup=DB::table('second_sliders')->where('id',$id)->update($data); 
         if ($slidup) {
                $notification=array(
                'messege'=>'slider Update Successfully',
                'alert-type'=>'success'
                 );
               return Redirect("all_second_slider")->with($notification);                      
            }else{
              return Redirect()->back();
             } 
          }
      }else{
        $oldphoto=$request->old_photo;
         if ($oldphoto) {
          $data['photo']=$oldphoto;  
          $user=DB::table('second_sliders')->where('id',$id)->update($data); 
         if ($user) {
                $notification=array(
                'messege'=>'slidup Update Successfully',
                'alert-type'=>'success'
                 );
               return Redirect("all_second_slider")->with($notification);                      
            }else{
              return Redirect()->back();
             } 
          }
       }
    }

public function delete_second_slider($id){
    $id=\Crypt::decrypt($id);
   $delete_second_slider=second_slider::findorfail($id);
   $delete=$delete_second_slider->photo;
   unlink($delete);
   $alls=second_slider::findorfail($id)->delete();
    if ($delete) {
                 $notification=array(
                 'messege'=>'Successfully Slider Image Delete ',
                 'alert-type'=>'success'
                  );
                return Redirect()->route('all_second_slider')->with($notification);                      
             }else{
              $notification=array(
                 'messege'=>'error ',
                 'alert-type'=>'success'
                  );
                 return Redirect()->back()->with($notification);
             } 

       }
}
