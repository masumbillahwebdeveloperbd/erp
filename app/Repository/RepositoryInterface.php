<?php

namespace App\Repository;
use Illuminate\Http\Request;

interface RepositoryInterface{
	public function index();
	public function storeOrUpdate(Request $request,$id);
	public function edit($id);
	public function destroy($id);
	public function active($id);
	public function inActive($id);
	public function show($id);
	public function find($id);
	public function search(Request $request);

}
