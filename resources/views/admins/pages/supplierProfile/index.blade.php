
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
    <h5 class="text-center">Supplier Profile</h5>
    <div class="card-body">
      
      <p>Contact Info</p>
      <hr>

			

			<form>
				<div class="row">
					<div class="col-md-4">
						

						<div class="form-group row">
						    <label class="col-sm-4 col-form-label col-form-label-custom">Supplier Name</label>
						    <div class="col-sm-8">
						      <input type="text" class="form-control custom-form-control" placeholder="Supplier Name">
						    </div>
						</div>
						<div class="form-group row">
						    <label class="col-sm-4 col-form-label col-form-label-custom">Designation</label>
						    <div class="col-sm-8">
						      <input type="text" class="form-control custom-form-control" placeholder="Enter Designation">
						    </div>
						</div>
						<div class="form-group row">
						    <label class="col-sm-4 col-form-label col-form-label-custom">http://</label>
						    <div class="col-sm-8">
						      <input type="text" class="form-control custom-form-control" placeholder="Enter http://">
						    </div>
						</div>
						<div class="form-group row">
						    <label class="col-sm-4 col-form-label col-form-label-custom">Address3</label>
						    <div class="col-sm-8">
						      <input type="text" class="form-control custom-form-control" placeholder="Address3">
						    </div>
						</div>
						<div class="form-group row">
						    <label class="col-sm-4 col-form-label col-form-label-custom">Party Type</label>
						    <div class="col-sm-8">
						      <select class="custom-form-control custom-select-control">
						      	<option>Select Multiple Item</option>
						      </select>
						    </div>
						</div>
						<div class="form-group row table-posstion-top">
						    <label class="col-sm-4 col-form-label col-form-label-custom">Credit Limit (Days)</label>
						    <div class="col-sm-8">
						      <input type="text" class="form-control custom-form-control" placeholder="Credit Limit (Days)">
						    </div>
						</div>

						<div class="form-group row table-posstion-top">
						    <label class="col-sm-4 col-form-label col-form-label-custom">Security Deducted</label>
						    <div class="col-sm-8">
						      <select class="custom-form-control custom-select-control">
						      	<option>Yes</option>
						      	<option>No</option>
						      </select>
						    </div>
						</div>
						<br>
						<div class="form-group row">
						    <label class="col-sm-4 col-form-label col-form-label-custom">Supplier Nature</label>
						    <div class="col-sm-8">
						      <select class="custom-form-control custom-select-control">
						      	<option>Goods</option>
						      	<option>No</option>
						      </select>
						    </div>
						</div>
						<div class="form-group row">
						    <label class="col-sm-4 col-form-label col-form-label-custom">Tag Buyer</label>
						    <div class="col-sm-8">
						    	<input type="text" class="form-control custom-form-control" placeholder="Tag Buyer">
						    </div>
						</div>

					</div>
					<div class="col-md-4">
						
						<div class="form-group row">
						    <label class="col-sm-4 col-form-label col-form-label-custom">Short Name</label>
						    <div class="col-sm-8">
						      <input type="text" class="form-control custom-form-control" placeholder="Short Name">
						    </div>
						 </div>

						 <div class="form-group row">
						    <label class="col-sm-4 col-form-label col-form-label-custom">Contact No</label>
						    <div class="col-sm-8">
						      <input type="text" class="form-control custom-form-control" placeholder="Contact No">
						    </div>
						 </div>

						 <div class="form-group row">
						    <label class="col-sm-4 col-form-label col-form-label-custom">Address1</label>
						    <div class="col-sm-8">
						      <input type="text" class="form-control custom-form-control" placeholder="Address1">
						    </div>
						 </div>


						 <div class="form-group row">
						    <label class="col-sm-4 col-form-label col-form-label-custom">Address4</label>
						    <div class="col-sm-8">
						      <input type="text" class="form-control custom-form-control" placeholder="Address4">
						    </div>
						 </div>

						 <div class="form-group row">
						    <label class="col-sm-4 col-form-label col-form-label-custom">Tag Company</label>
						    <div class="col-sm-8">
						      <input type="text" class="form-control custom-form-control" placeholder="Tag Company">
						    </div>
						 </div>


						 <div class="form-group row table-posstion-top">
						    <label class="col-sm-4 col-form-label col-form-label-custom">Credit Limit (Amount)</label>
						    <div class="col-sm-4">
						      <input type="text" class="form-control custom-form-control" placeholder="Credit Limit (Amount)">
						    </div>
						    <div class="col-sm-4">
						      <select class="custom-form-control custom-select-control">
						      	<option>Taka</option>
						      </select>
						    </div>
						 </div>


						<div class="form-group row each-table-position table-posstion-top">
						    <label class="col-sm-4 col-form-label col-form-label-custom">VAT to be Deducted</label>
						    <div class="col-sm-8">
						      <select class="custom-form-control custom-select-control">
						      	<option>Yes</option>
						      	<option>No</option>
						      </select>
						    </div>
						</div>

						<br>

						<div class="form-group row each-table-position">
						    <label class="col-sm-4 col-form-label col-form-label-custom">Status</label>
						    <div class="col-sm-8">
						      <select class="custom-form-control custom-select-control">
						      	<option>Active</option>
						      	<option>No</option>
						      </select>
						    </div>
						 </div>

						<div class="form-group row each-table-position">
						    <label class="col-sm-4 col-form-label col-form-label-custom">Supplier Ref.</label>
						    <div class="col-sm-8">
						      <input type="text" class="form-control custom-form-control" placeholder="Supplier Ref.">
						    </div>
						 </div>
					</div>


					<div class="col-md-4">

						<div class="form-group row">
						    <label class="col-sm-4 col-form-label col-form-label-custom">Contact Person</label>
						    <div class="col-sm-8">
						      <input type="text" class="form-control custom-form-control" placeholder="Contact Person">
						    </div>
						 </div>

						 <div class="form-group row">
						    <label class="col-sm-4 col-form-label col-form-label-custom">Email</label>
						    <div class="col-sm-8">
						      <input type="text" class="form-control custom-form-control" placeholder="Email">
						    </div>
						 </div>

						 <div class="form-group row">
						    <label class="col-sm-4 col-form-label col-form-label-custom">Address2</label>
						    <div class="col-sm-8">
						      <input type="text" class="form-control custom-form-control" placeholder="Address2">
						    </div>
						 </div>

						 <div class="form-group row">
						    <label class="col-sm-4 col-form-label col-form-label-custom">Country</label>
						    <div class="col-sm-8">
						      <select class="custom-form-control custom-select-control">
						      	<option>--Select Country--</option>
						      </select>
						    </div>
						</div>

						 <div class="form-group row">
						    <label class="col-sm-4 col-form-label col-form-label-custom">Link to Buyer</label>
						    <div class="col-sm-8">
						      <select class="custom-form-control custom-select-control">
						      	<option>--Select Buyer--</option>
						      </select>
						    </div>
						</div>

						 <div class="form-group row">
						    <label class="col-sm-4 col-form-label col-form-label-custom">Discount Method</label>
						    <div class="col-sm-8">
						      <select class="custom-form-control custom-select-control">
						      	<option>--Select Method--</option>
						      </select>
						    </div>
						</div>

						 <div class="form-group row">
						    <label class="col-sm-4 col-form-label col-form-label-custom">AIT to be Deducted</label>
						    <div class="col-sm-8">
						      <select class="custom-form-control custom-select-control">
						      	<option>Yes</option>
						      	<option>No</option>
						      </select>
						    </div>
						</div>

						 <div class="form-group row">
						    <label class="col-sm-4 col-form-label col-form-label-custom">Individual</label>
						    <div class="col-sm-8">
						      <select class="custom-form-control custom-select-control">
						      	<option>Yes</option>
						      	<option>No</option>
						      </select>
						    </div>
						</div>

						 <div class="form-group row">
						    <label class="col-sm-4 col-form-label col-form-label-custom">Image</label>
						    <div class="col-sm-8">
						      <select class="custom-form-control custom-select-control">
						      	<option>CLICK TO ADD/VIEW IMAGE</option>
						      </select>
						    </div>
						</div>

					</div>
				</div>
				<div class="row table-position-bottom">
					<div class="col-md-8">
						<div class="form-group row">
						    <label class="col-sm-2 col-form-label col-form-label-custom">Remark</label>
						    <div class="col-sm-10">
						      <input type="text" class="form-control custom-form-control" placeholder="Remark">
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
		<h5 class="card-header">Supplier Table</h5>
		<div class="card-body">
			<table class="table table-striped table-sm table-bordered table-font-size ">
			  <thead>
			    <tr>
			      <th scope="col">SL No</th>
			      <th scope="col">Supplier Name</th>
			      <th scope="col">Short Name</th>
			      <th scope="col">Link To Buyer</th>
			      <th scope="col">Contact Person</th>
			      <th scope="col">Designation</th>
			      <th scope="col">Credit Limit(Days)</th>
			      <th scope="col">Credit Limit(Amount)</th>
			      <th scope="col">Currency</th>
			    </tr>
			  </thead>
			  <tbody>
			    <tr>
			      <th>28</th>
			      <td>New Look</td>
			      <td>New Look</td>
			      <td>50</td>
			      <td></td>
			      <td></td>
			      <td>0</td>
			      <td>0</td>
			      <td>USD</td>
			    </tr>
			    <tr>
			      <th>29</th>
			      <td>Group Zannier</td>
			      <td>Group Zann</td>
			      <td>50</td>
			      <td></td>
			      <td></td>
			      <td>0</td>
			      <td>0</td>
			      <td>USD</td>
			    </tr>
			    <tr>
			      <th>29</th>
			      <td>US POLO</td>
			      <td>US POLO</td>
			      <td>50</td>
			      <td></td>
			      <td></td>
			      <td>0</td>
			      <td>0</td>
			      <td>USD</td>
			    </tr>
			  </tbody>
			</table>
		</div>
	</div>
</div>
@endsection
