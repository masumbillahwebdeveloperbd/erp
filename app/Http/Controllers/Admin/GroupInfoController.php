<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\GroupInfo;
use App\Model\CountryInfo;
use App\Repository\GroupInfoRepository;
use App\Repository\CountryInfoRepository;
use Illuminate\Http\Request;
use App\Http\Requests\GroupInfoRequest;
use Session;
use DB;

class GroupInfoController extends Controller
{
    public function index(GroupInfoRepository $obj,CountryInfoRepository $obj1)
    { 
     
        return view('admins.pages.groupInformation.index',['allGroupInfo'
            =>$obj->index(),'allCountryInfo'=>$obj1->index(),'item'=>$obj->find(0)]);

    }

    public function storeOrUpdate(Request $request,GroupInfoRepository $obj)
    {
        $obj->storeOrUpdate($request,$request->id);
        return redirect()->route('group.info');
 
    }


    public function editOrDelete(Request $request,$id,GroupInfoRepository $obj,CountryInfoRepository $obj1)
    {
            
            if($request->btnEdit =="edit"){
              return view('admins.pages.groupInformation.index',['allGroupInfo'
            =>$obj->index(),'allCountryInfo'=>$obj1->index(),'item'=>$obj->find($id)]);
            }
            else if($request->btnDelete =="delete"){
                $obj->destroy($id);
                return redirect()->route('group.info');
            }
          else if($request->btnInActive =="inActive"){
            $obj3=GroupInfo::find($id);
            $obj3->status=1;
            $obj3->save();
            
                // $obj->inActive($id);
                
        return redirect()->route('group.info');
            }
        else if($request->btnActive =="active"){
            
      $obj3=GroupInfo::find($id);
      echo "<pre>";
      print_r($obj3);
      exit();
      $obj3->status=0;
      $obj3->save();
                
        return redirect()->route('group.info');
            }

    }  
   
}
