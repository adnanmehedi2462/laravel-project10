<?php

namespace App\Http\Controllers;


use DB;
use Illuminate\Http\Request;
use Illuminate\Validation\Validator;
use App\infophoto;
use Redirect;

class infoimagecontroller extends Controller
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
    public function infoimage(){

       return view("add_infoimage");


    }
  public function insert_infoimage(Request $request){
   
     $validatedData = $request->validate([
           'name' => 'required|max:255',
        'photo' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
       
    ]);


        $data=array();
        $data['name']=$request->name;
      
         $image=$request->file('photo');

        if ($image) {
            $image_name= str_random(5);
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='public/photos/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            if ($success) {
                $data['photo']=$image_url;
                $employee=DB::table('infophotos')
                         ->insert($data);
              if ($employee) {
                 $notification=array(
                 'messege'=>'Successfully Image data Inserted ',
                 'alert-type'=>'success'
                  );
                return Redirect()->route('add_infoimage')->with($notification);                      
             }else{
              $notification=array(
                'messege'=>'error to add',
                'alert-type'=>'error'
                  );
             return Redirect()->route('add_infoimage')->with($notification);
             }      
                
            }else{

              return Redirect()->back();
                
            }
        }else{
              return Redirect()->back();
      }

}
public function all_infoimages(){

    $all_info=infophoto::all();
    return view("all_infoimage",compact('all_info'));

 }
 public function edit_photo($id){
  $id=\Crypt::decrypt($id);
  $edit_info=infophoto::findorfail($id);
  return view("edit_infoimage",compact('edit_info'));


 }
public function update_info(Request $request,$id){

     $validatedData = $request->validate([
           'name' => 'required|max:255',
        'photo' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
       
    ]);
     $data=array();
        $data['name']=$request->name;
        $image=$request->file('photo');

      if ($image) {
       $image_name=str_random(20);
       $ext=strtolower($image->getClientOriginalExtension());
       $image_full_name=$image_name.'.'.$ext;
       $upload_path='public/photos/';
       $image_url=$upload_path.$image_full_name;
       $success=$image->move($upload_path,$image_full_name);
       if ($success) {
          $data['photo']=$image_url;
             $img=DB::table('infophotos')->where('id',$id)->first();
             $image_path = $img->photo;
             $done=unlink($image_path);
          $product=DB::table('infophotos')->where('id',$id)->update($data); 
         if ($product) {
                $notification=array(
                'messege'=>'Product Update Successfully',
                'alert-type'=>'success'
                 );
               return Redirect("all_infoimages")->with($notification);                      
            }else{
              return Redirect()->back();
             } 
          }
      }else{
        $oldphoto=$request->old_photo;
         if ($oldphoto) {
          $data['photo']=$oldphoto;  
          $user=DB::table('infophotos')->where('id',$id)->update($data); 
         if ($user) {
                $notification=array(
                'messege'=>'Product Update Successfully',
                'alert-type'=>'success'
                 );
               return Redirect("all_infoimages")->with($notification);                      
            }else{
              return Redirect()->back();
             } 
          }
       }
}


public function delete_image($id){
$id=\Crypt::decrypt($id);
  $delete=infophoto::findorfail($id);
  $delete_image=$delete->photo;
  unlink($delete_image);
  $all=infophoto::findorfail($id)->delete();
   if ($delete_image) {
                 $notification=array(
                 'messege'=>'Successfully Info Image Delete ',
                 'alert-type'=>'success'
                  );
                return Redirect()->route('all_infoimages')->with($notification);                      
             }else{
              $notification=array(
                 'messege'=>'error ',
                 'alert-type'=>'success'
                  );
                 return Redirect()->back()->with($notification);
             } 



       }



} 
