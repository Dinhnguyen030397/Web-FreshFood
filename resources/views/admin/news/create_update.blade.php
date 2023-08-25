@extends("admin.layout")
@section("do-du-lieu-tu-view")
	<div class="col-md-12">  
	    <div class="panel panel-primary">
		<div >
              <h6 style="color:#cb0c9f;font-weight:bold;font-size:30px;text-align:center;margin-top:10px" >Edit News</h6>
            </div>
	        <div class="panel-body" >
	        	<!-- muốn upload được file thì phải có thuộc tính enctype="multipart/form-data" -->
	        <form method="post" enctype="multipart/form-data" action="{{ $action }}">
	        	@csrf
	            <!-- rows -->
	            <div class="row" style="margin-top:5px;">
	                
	                <div class="col-md-11" style="margin:auto">
						<label  for="name">Title</label>
	                    <input type="text" required value="{{ isset($record->name)?$record->name:'' }}" name="name" class="form-control" required>
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
	                    <input type="checkbox" @if(isset($record->hot) && $record->hot == 1) checked @endif name="hot" id="hot"> <label for="hot">Hot</label>
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