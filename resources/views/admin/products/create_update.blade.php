@extends("admin.layout")
@section("do-du-lieu-tu-view")
<div class="col-md-12">  
	    <div class="panel panel-primary">
		<div >
              <h6 style="color:#cb0c9f;font-weight:bold;font-size:30px;text-align:center;margin-top:10px" >Edit Products</h6>
            </div>
	        <div class="panel-body" >
	        	<!-- muốn upload được file thì phải có thuộc tính enctype="multipart/form-data" -->
	        <form method="post" enctype="multipart/form-data" action="{{ $action }}">
	        	@csrf
	            <!-- rows -->
	            <div class="row" style="margin-top:5px;">
	                
	                <div class="col-md-11" style="margin:auto">
						<label  for="name">Name</label>
	                    <input type="text" required value="{{ isset($record->name)?$record->name:'' }}" name="name" class="form-control" required>
	                </div>
					<div class="col-md-11" style="margin:auto">
						<label  for="name">Price</label>
	                    <input type="text" required value="{{ isset($record->price)?$record->price:'' }}" name="price" class="form-control" required>
	                </div>
					<div class="col-md-11" style="margin:auto">
						<label  for="name">Discount</label>
	                    <input type="text" required value="{{ isset($record->discount)?$record->discount:'' }}" name="discount" class="form-control" required>
	                </div>
					<div class="col-md-11" style="margin:auto">
						<label  for="name">Categories</label>
						@php
		                    //có thể dùng trực tiếp câu lệnh full sql (không khuyến khích)
		                    $categories = DB::select("select * from categories where parent_id = 0 order by id desc");
	                    @endphp
	                    <select class="form-control" name="category_id" style="width:250px;">
	                    @foreach($categories as $row)	                    
	                    	<option @if(isset($record->category_id)&&$record->category_id==$row->id) selected @endif value="{{ $row->id }}">{{ $row->name }}</option>	
	                    	@php
	                    		$subCategories = DB::table("categories")->where("parent_id","=",$row->id)->orderBy("id","desc")->get();
	                    	@endphp                   
	                    	@foreach($subCategories as $subRow)
	                    		<option @if(isset($record->category_id)&&$record->category_id==$subRow->id) selected @endif value="{{ $subRow->id }}">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $subRow->name }}</option>
	                    	@endforeach
	                    @endforeach
	                    </select>
					</div>
	            </div>
	            <!-- end rows -->
	            <!-- để fix độ cao của ckeditor thì phải thêm đoạn css sau -->
	            <style>
	            	.ck-editor__editable{
	            		max-height: 350px;
	            		min-height: 350px;
	            		overflow: scroll;
	            	}
					label{
						font-size:15px;
						color: #cb0c9f;
						margin-top:10px;
					}
	            </style>
	            <!-- rows -->
	            <div class="row" style="margin-top:5px;">
	               
	                <div class="col-md-11"style="margin:auto">
						<label for="description">Description</label>
	                    <textarea name="description" id="description">{{ isset($record->description)?$record->description:'' }}</textarea>
	                    <script type="text/javascript">
	                    	ClassicEditor.create(document.querySelector("#description"));
	                    </script>
	                </div>
	            </div>
	            <!-- end rows -->
	            <!-- rows -->
	            <div class="row" style="margin-top:5px;">
	                
	                <div class="col-md-11"style="margin:auto">
						<label for="content">Content</label>
	                    <textarea name="content" id="content">{{ isset($record->content)?$record->content:'' }}</textarea>
	                    <script type="text/javascript">
	                    	ClassicEditor.create(document.querySelector("#content"));
	                    </script>
	                </div>
	            </div>
	            <!-- end rows -->
	          
	            <!-- rows -->
	            <div class="row" style="margin-top:5px;">
	                
	                <div class="col-md-11"style="margin:auto">
						<label for="photo">Photo</label>
	                    <input type="file" name="photo">
	                </div>
	            </div>
	            <!-- end rows -->
				<!-- rows -->
	            <div class="row" style="margin-top:5px;">
	                
	                <div class="col-md-11"style="margin:auto">
					<input type="checkbox" @if(isset($record->hot) && $record->hot == 1) checked @endif name="hot" id="hot"> <label for="hot">Hot</label>
	                </div>
	            </div>
	            <!-- end rows -->
	            <!-- rows -->
	            <div class="row" style="margin-top:10px;">
	                <div class="col-md-11"style="text-align:center">
	                    <input type="submit" value="Process" class="btn btn-primary">
	                </div>
	            </div>
	            <!-- end rows -->
	        </form>
	        </div>
	    </div>
	</div>
@endsection