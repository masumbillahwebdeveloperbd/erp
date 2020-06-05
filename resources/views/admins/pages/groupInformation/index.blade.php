
@extends('admins.master')
@section('title',"groupinfo")
@section('pagecontent')
<?php

?>
<script>
    function reloadPage(){
        location.reload(true);
    }
</script>
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Contact Details</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="">Home</a></li>
              <li class="breadcrumb-item active">Contact Details</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
   

<div class="container">

  <div class="card">
    <br>
    <h5 class="text-center">Group Information</h5>
    <div class="card-body">
      
      <p>Contact Info</p>
      <hr>
      @if (Session::has('success'))
 
    <div class="alert alert-info" role="alert">
      {{ session::get('success') }}

    </div>
    @endif
    
    <form action="http://localhost/erp/save-group-information" method="post">
      @csrf
        <div class="row">
          <div class="col-md-6">
            <div><input type="hidden" name="id" value="<?php
                          if($item){
                            echo $item->id;
                          }
                  ?>
                  " ></div>

            <div class="form-group row">
                <label class="col-sm-3 col-form-label col-form-label-custom">Group Name</label>
                <div class="col-sm-9">
                  <input type="text" id="gorupName" name="gorupName" class="form-control custom-form-control" placeholder="group Name" value="<?php
                          if($item){
                            echo $item->gorup_name;
                          }
                  ?>
                  " >
                </div>
            </div>
            
            <div class="form-group row">
                <label class="col-sm-3 col-form-label col-form-label-custom">Contact Number</label>
                <div class="col-sm-9">
                  <input type="text" id="contactNumber" name="contactNumber" class="form-control custom-form-control" placeholder="Contact Number" value="<?php
                          if($item){
                            echo $item->contact_number;
                          }
                  ?>
                  " >
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label col-form-label-custom">Website </label>
                <div class="col-sm-9">
                  <input type="text" id="website" name="website" class="form-control custom-form-control" placeholder="website" value="<?php
                          if($item){
                            echo $item->website;
                          }
                  ?>
                  " >
                </div>
            </div>
             <div class="form-group row">
                <label class="col-sm-3 col-form-label col-form-label-custom">Address</label>
                <div class="col-sm-9">
                  <input type="text" name="address" class="form-control custom-form-control" placeholder="address" value="<?php
                          if($item){
                            echo $item->address;
                          }
                  ?>
                  ">
                </div>
            </div>
             
            <div class="form-group row">
                <label class="col-sm-3 col-form-label col-form-label-custom">Status</label>
                <div class="col-sm-9">
                  <select class="custom-form-control custom-select-control" name="status">
                    <option value="">--Select--</option>
                    <?php
                    if($item) {
                      if($item->status==1){
                    
                    ?>      
                     <option value="1" selected>Active</option>
                    <?php } else{?>
                    <option value="2" selected>inActive</option>
                    <?php }}else{?>
                    <option value="1">Active</option> 
                    <option value="2">inActive</option>
                    <?php }?>
                  </select>
             
                </div>
             </div>
          </div>
          <div class="col-md-6">
             <div class="form-group row">
                <label class="col-sm-3 col-form-label col-form-label-custom">Contact Person</label>
                <div class="col-sm-9">
                  <input type="text" name="contactPerson" class="form-control custom-form-control" placeholder="contact person" value="<?php
                          if($item){
                            echo $item->contact_person;
                          }
                  ?>
                  ">
                </div>
             </div>
              <div class="form-group row">
                <label class="col-sm-3 col-form-label col-form-label-custom">Country</label>
                <div class="col-sm-9">
                  <select class="
                  
                  custom-form-control custom-select-control" name="country_id">
                    <option>--Select--</option>

                    @foreach($allCountryInfo as $countryInfo)
                    @if($item)
                   @if($countryInfo->id==$item->country_id)
    <option value="{{$countryInfo->id}}" selected>{{$countryInfo->country_name}}</option>
                   @endif
                  @endif
                    <option value="{{$countryInfo->id}}">{{$countryInfo->country_name}}</option>
                    
                    @endforeach
                  </select>

                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 col-form-label col-form-label-custom">Email</label>
                <div class="col-sm-9">
                  <input type="email" name="email" class="form-control custom-form-control" placeholder="Email" value="<?php
                          if($item){
                            echo $item->email;
                          }
                  ?>
                  ">
                </div>
            </div>

             <div class="form-group row">
                <label class="col-sm-3 col-form-label col-form-label-custom">Remark</label>
                <div class="col-sm-9">
                  <input type="text"  name="remak" class="form-control custom-form-control" placeholder="Remark" value="<?php
                          if($item){
                            echo $item->remark;
                          }
                  ?>
                  ">
                </div>
             </div>      
          </div>
        </div>
        <br><br>
        <hr class="hr-margin-top">
        <div class="text-center">
         
          <button type="submit" name="btnSave" value="save" class="btn btn-danger">Save</button>
           <button type="submit" name="btnUpdate" value="update" class="btn btn-danger">Update</button>
          <button type="button" onclick="reload1Page();" id="btnRefresh"  name="btnRefresh" value="refresh" class="btn btn-danger">Refresh</button>

    
        </div>
      </form>
    </div>
  </div>



  <div class="card">
    <h5 class="card-header">Buyer Table</h5>
    <div class="card-body">
      <table class="table table-striped table-sm table-bordered table-font-size ">
        <thead>
          <tr>
            <th scope="col">Group Name</th>
            <th scope="col">Contact Person</th>
            <th scope="col">Contact no</th>
            <th scope="col">Website</th>
            <th scope="col">Address</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>

          </tr>
        </thead>
        <tbody>
          @foreach($allGroupInfo  as $groupInfo)
          <tr>
            <td>{{$groupInfo->gorup_name}}</td>
            <td>{{$groupInfo->contact_person}}</td>
            <td>{{$groupInfo->contact_number}}</td>
            <td>{{$groupInfo->website}}</td>
            <td>{{$groupInfo->address}}</td>
            
             <td>
        <span class="badge badge-info">{{$groupInfo->status==1?'Active':'In Active'}}</span>
        </td>

            <td>
              
              {{Form::open(['route'=>['edit.delete',$groupInfo->id],'method'=>'POST'])}}
               <?php 
                $status= $groupInfo->status;
                if($status==1){
                ?>
         <button class="btn btn-warning" name="btnInActive" value="inActive" title="In Active"><i class="fas fa-thumbs-down"></i></button>
              <?php } else {?>
              <button class="btn btn-warning" name="btnActive" value="inActive" title="Active"><i class="fas fa-thumbs-up"></i></button>
          
              <?php } ?>
              <button class="btn btn-primary" name="btnEdit" value="edit" title="Edit"><i class="far fa-edit"></i></button>
              <button class="btn btn-danger" name="btnDelete" value="delete" title="Delete"><i class="fas fa-trash-alt"></i></button>
              {{Form::close()}}
            </td>

          </tr>
         @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>

<script>
    function reload1Page(){

        document.getElementById('gorupName').value = '';
        document.getElementById('contactNumber').value = '';
        document.getElementById('website').value = '';

    }
</script>


 @endsection