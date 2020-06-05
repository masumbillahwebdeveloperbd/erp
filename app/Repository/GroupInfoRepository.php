<?php

namespace App\Repository;
use App\Model\GroupInfo;
use App\Model\CountryInfo;
use App\Repository\RepositoryInterface;

use Illuminate\Http\Request;
use Session;
use DB;

class GroupInfoRepository implements RepositoryInterface{
    public function index()
    {
        return $obj=GroupInfo::all();
                   
    }

    public function storeOrUpdate(Request $request,$id)
    {
        if($request->btnUpdate =="update"){
         $obj=GroupInfo::find($request->id);
         $obj->gorup_name=$request->gorupName;
         $obj->contact_number=$request->contactNumber;
         $obj->website=$request->website;
         $obj->address=$request->address;
         $obj->contact_person=$request->contactPerson;
         $obj->country_id=$request->country_id;
         $obj->email=$request->email;
         $obj->remark=$request->remak;
         $obj->status=$request->status;
         $obj->update();
         Session::flash('success','Data update successfully');
         
    }
        else if($request->btnSave=="save"){

         $obj=new GroupInfo();
         $obj->gorup_name=$request->gorupName;
         $obj->contact_number=$request->contactNumber;
         $obj->website=$request->website;
         $obj->address=$request->address;
         $obj->contact_person=$request->contactPerson;
         $obj->country_id=$request->country_id;
         $obj->email=$request->email;
         $obj->remark=$request->remak;
         $obj->status=$request->status;
         $obj->save();
         Session::flash('success','Data save successfully');
          
        }    
    }
    public function edit($id)
    {
       
    }  
    public function destroy($id)
    {
        GroupInfo::find($id)->delete();
        Session::flash('success','Data Delete Permanently');
    }
    public function active($id){
        return 'masum';
      $obj=GroupInfo::find($id);
      $obj->status=1;
      $obj->update();
      /* App\Flight::where('active', 1)
          ->where('destination', 'San Diego')
          ->update(['delayed' => 1]);*/
    }
    
    public function inActive($id)
    {
        return 'masum';
      $obj=GroupInfo::find($id);
      $obj->status=0;
      $obj->update();
        
    }
    public function show($id)
    {
        //
    }
    public function find($id)
    {
        return $obj=GroupInfo::find($id);
    }
 
    public function search(Request $request)
    {

    }
   
}
