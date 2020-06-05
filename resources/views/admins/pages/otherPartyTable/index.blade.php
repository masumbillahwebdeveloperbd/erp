
@extends('admins.master')
@section('title',"Department")

@section('pagecontent')
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Contact Details</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Contact Details</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
   
<div class="container">




  <div class="card">
    <br>
    <h5 class="text-center">Other Party Table</h5>
    <div class="card-body">
      
      <p>Contact Info</p>
      <hr>

			
			<form>
				<div class="row">
					<div class="col-md-6">
						

						<div class="form-group row">
						    <label class="col-sm-3 col-form-label col-form-label-custom">Other Party Name</label>
						    <div class="col-sm-9">
						      <input type="text" class="form-control custom-form-control" placeholder="Other Party Name">
						    </div>
						</div>
						<div class="form-group row">
						    <label class="col-sm-3 col-form-label col-form-label-custom">Short Name</label>
						    <div class="col-sm-9">
						      <input type="text" class="form-control custom-form-control" placeholder="Enter Short Name">
						    </div>
						</div>
						<div class="form-group row">
						    <label class="col-sm-3 col-form-label col-form-label-custom">Contact Person</label>
						    <div class="col-sm-9">
						      <input type="text" class="form-control custom-form-control" placeholder="Contact Person">
						    </div>
						</div>
						<div class="form-group row">
						    <label class="col-sm-3 col-form-label col-form-label-custom">Designation</label>
						    <div class="col-sm-9">
						      <input type="text" class="form-control custom-form-control" placeholder="Designation">
						    </div>
						</div>
						<div class="form-group row">
						    <label class="col-sm-3 col-form-label col-form-label-custom">Contact No</label>
						    <div class="col-sm-9">
						    	<input type="text" class="form-control custom-form-control" placeholder="Contact No">
						    </div>
						</div>
						<div class="form-group row">
						    <label class="col-sm-3 col-form-label col-form-label-custom">Email</label>
						    <div class="col-sm-9">
						      <input type="email" class="form-control custom-form-control" placeholder="Email">
						    </div>
						</div>

						<div class="form-group row">
						    <label class="col-sm-3 col-form-label col-form-label-custom">http://www.</label>
						    <div class="col-sm-9">
						      <input type="text" class="form-control custom-form-control" placeholder="http://www.">
						    </div>
						</div>

					</div>
					<div class="col-md-6">
						
						<div class="form-group row">
						    <label class="col-sm-3 col-form-label col-form-label-custom">Address</label>
						    <div class="col-sm-9">
						      <input type="text" class="form-control custom-form-control" placeholder="Address">
						    </div>
						 </div>

						 <div class="form-group row">
						    <label class="col-sm-3 col-form-label col-form-label-custom">Country Name</label>
						    <div class="col-sm-9">
						      <select class="custom-form-control custom-select-control">
						      	<option>--Select Country--</option>
						      </select>
						    </div>
						 </div>

						 <div class="form-group row">
						    <label class="col-sm-3 col-form-label col-form-label-custom">Remarks</label>
						    <div class="col-sm-9">
						      <input type="text" class="form-control custom-form-control" placeholder="Remarks">
						    </div>
						 </div>


						 <div class="form-group row">
						    <label class="col-sm-3 col-form-label col-form-label-custom">Status</label>
						    <div class="col-sm-9">
						      <select class="custom-form-control custom-select-control">
						      	<option>Active</option>
						      </select>
						    </div>
						 </div>

						 <div class="form-group row">
						    <label class="col-sm-3 col-form-label col-form-label-custom">Image</label>
						    <div class="col-sm-9">
						      <input type="text" class="form-control custom-form-control" placeholder="CLICK TO ADD/VIEW IMAGE">
						    </div>
						 </div>
					</div>
				</div>
				<hr class="hr-margin-top">
				<div class="text-center">
					<button type="button" class="btn btn-danger">Update</button>
					<button type="button" class="btn btn-danger">Save</button>
					<button type="button" class="btn btn-danger">Refresh</button>
				</div>
			</form>


		</div>
	</div>



	<div class="card">
		<h5 class="card-header">List View</h5>
		<div class="card-body">
			<table class="table table-striped table-sm table-bordered table-font-size ">
			  <thead>
			    <tr>
			      <th scope="col">SL No</th>
			      <th scope="col">Party Name</th>
			      <th scope="col">Contact Person</th>
			      <th scope="col">Designation</th>
			      <th scope="col">Contact NO</th>
			      <th scope="col">Designation</th>
			      <th scope="col">Status</th>
			    </tr>
			  </thead>
			  <tbody>
			    <tr>
			      <th>Search</th>
			      <td>Search</td>
			      <td>Search</td>
			      <td>Search</td>
			      <td>Search</td>
			      <td>Search</td>
			      <td>Search</td>
			    </tr>
			  </tbody>
			</table>
		</div>
	</div>
</div>

@endsection