@extends("admin.layout")
@section("do-du-lieu-tu-view")
		<div class="col-md-12">  
		    <div class="panel panel-primary">
		        <div class="panel-body">
                
          <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
            <div class="card z-index-0" style = "margin-top:60px">
              <div class="card-header text-center pt-4">
                <h5>Add Edit</h5>
              </div>
              <div class="card-body">
                <form role="form text-left" method="post" action="{{ $action }}" enctype="multipart/form-data" >
                    @csrf
                  <div class="mb-3">
                    <input type="text" value="{{ isset($record->name)?$record->name:'' }}" name="name" required
                    class="form-control" placeholder="Name" aria-label="Name" aria-describedby="email-addon">
                  </div>
                 
                  <div class="mb-3">
                    <input type="email" value="{{ isset($record->email)?$record->email:'' }}" name="email" 
                    class="form-control" placeholder="Email" aria-label="Email" aria-describedby="email-addon"
                    @if(isset($record->email)) disabled @else required @endif  
                     >
                  </div>
                  <div class="mb-3">
                    <input type="password" name="password" class="form-control" placeholder="Password" 
                    class="form-control" aria-label="Password" aria-describedby="password-addon" 
                    @if(isset($record->email)) placeholder="Password" @else required @endif  >
                  </div>

                  <div class="mb-3">
                    <label for="img" style="font-size:15px">Chọn ảnh đại diện</label>
                    <input type="file" value="{{isset($record->img)?$record->img:''}}" name="img" required
                    class="form-control" placeholder="Ảnh đại diện" aria-label="img" aria-describedby="email-addon">
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