@extends("admin.layout")
@section("do-du-lieu-tu-view")
		<div class="col-md-12">  
		    <div class="panel panel-primary">
		        <div class="panel-body">
                
          <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
            <div class="card z-index-0" style = "margin-top:60px">
              <div class=" text-center pt-4">
                <h5 style="padding-bottom:-30px;color:rgb(203,12,159)">Add Products</h5>
              </div>
              <div class="card-body">
                <form role="form text-left" method="post" action="{{ $action }}" >
                    @csrf
                  <div class="mb-3">
                    <label  style="font-size:15px;color:rgb(203,12,159)"for="parent_id">Parent</label>
                    @php
	                    	if(isset($record->id))
	                    		$categories = DB::table("categories")->where("parent_id","=","0")->where("id","<>",$record->id)->orderBy("id","desc")->get();
	                    	else
	                    		$categories = DB::table("categories")->where("parent_id","=","0")->orderBy("id","desc")->get();
	                @endphp
                    <select name="parent_id" class="form-control" style="width:250px;">
	                    	<option value="0"></option>
	                    	@foreach($categories as $row)
	                    	<option @if(isset($record->parent_id) && $record->parent_id == $row->id) selected @endif value="{{ $row->id }}">{{ $row->name }}</option>
	                    	@endforeach
	                </select>
                  </div>
                  <div class="mb-3">
                    <label style="font-size:15px;color:rgb(203,12,159)" for="name">Name</label>
                    <input type="text" value="{{ isset($record->name)?$record->name:'' }}" name="name" 
                    class="form-control" placeholder="Name" aria-label="name" aria-describedby="email-addon"required>
                  </div>
                  <div class="mb-3">
                    <input type="checkbox" @if(isset($record->display_at_home_page) && $record->display_at_home_page == 1) checked @endif name="display_at_home_page" id="display_at_home_page"> 
                    <label  style="font-size:15px;color:rgb(203,12,159)" for="display_at_home_page">Display at home page</label>
                  </div>
                  <div class="text-center">
                  <input type="submit" value="Process" class="btn btn-primary btn bg-gradient-dark w-100 my-4 mb-2">
                  </div>
                  </form>
                </div>
                </div>
            </div>
            </div>
        </div>
</div>
	@endsection