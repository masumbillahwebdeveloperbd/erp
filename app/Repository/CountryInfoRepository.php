<?php

namespace App\Repository;

use App\Model\CountryInfo;
use App\Repository\RepositoryInterface;
use Illuminate\Http\Request;
use Session;
use DB;

class CountryInfoRepository implements RepositoryInterface{
    public function index()
    {
        return $obj=CountryInfo::all();
                   
    }

    public function storeOrUpdate(Request $request,$id)
    {
        
        
    }
    public function edit($id)
    {
        $item=GroupInfo::find($id);
       
        
        $allGroupInfo=GroupInfo::all();
        $allCountryInfo=CountryInfo::all();
        
        return view('admins.pages.groupInformation.index',['item'=>$item,'allGroupInfo'=>$allGroupInfo,'allCountryInfo'=>$allCountryInfo]);
    }   
    public function destroy($id)
    {
        GroupInfo::find($id)->delete();
    }

    public function active($id){

    }
    public function inActive($id)
    {

    }
    public function show($id)
    {
        //
    }
    public function find($id)
    {
        return $obj=CountryInfo::find($id);

    }
    public function search(Request $request)
    {

    }
   
}
