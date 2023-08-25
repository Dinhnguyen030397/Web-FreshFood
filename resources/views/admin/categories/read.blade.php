
@extends("admin.layout")
@section("do-du-lieu-tu-view")

    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
                <div >
              <h6 style="color:black;font-weight:bold;font-size:30px;text-align:center;margin-top:10px" >Products</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                  <tr style="color:rgb(203,12,159);font-weight:bold" >
                      <th style="text-align: center;width:10%"class="align-middle">Id</th>  
                      <th style="width:40%" class="align-middle">Products</th>
                      <th style="text-align: center;width:20%" class="align-middle">Home page</th>
                      <th style="text-align: center;width:30%" class="align-middle">Edit</th>
                    </tr>
                </thead>
                  @foreach($data as $row) 
                 
                  <tbody>
                    <tr>
                      <td style="text-align: center;width:10%">
                        <div class="d-flex px-2 py-1">
                            <h6 class="mb-0 text-sm"> &nbsp;&nbsp;{{ $row->id }}</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p style="font-size:15px;font-weight:bold;margin:0px;color:black;width:30%">{{ $row->name }}</p>
                      </td>
                      <td style="text-align: center;width:20%">
                        @if($row->display_at_home_page == 1)
                        <i class="fa-regular fa-square-check" style="align-middle"></i>
                        @endif
                      </td>
                      <td style="text-align: center;width:30%">
                        <a href="{{ url('backend/categories/update/'.$row->id) }}" class="text-xl text-secondary mb-0" data-toggle="tooltip" data-original-title="Edit user">
                          Edit
                        </a>&nbsp; &nbsp;
                        <a href="{{ url('backend/categories/delete/'.$row->id) }}"  onclick="return window.confirm('Are you sure?')"; class="text-xl text-secondary mb-0" data-toggle="tooltip" data-original-title="Edit user">
                          Delete
                        </a>
                      </td>
                    </tr>
                    @php
                        $subCategories = DB::table("categories")->where("parent_id","=",$row->id)->orderBy("id","desc")->get();
                    @endphp
                    @foreach($subCategories as $rowSub)
                        <tr>
                            <td style="text-align: center;width:20%"> <div class="d-flex px-2 py-1"><h6 class="mb-0 text-sm"> &nbsp;&nbsp;{{ $rowSub->id }}</h6></div> </td>     
                            <td style="font-size:15px;margin:0px;color:black;width:30%">  &nbsp;&nbsp;&nbsp; + {{ $rowSub->name }}</td>
                            <td style="text-align: center;width:20%">
                              @if($rowSub->display_at_home_page == 1)
                              <i class="fa-regular fa-square-check"></i>
                              @endif
                            </td>
                            <td style="text-align: center;width:30%">
                        <a href="{{ url('backend/categories/update/'.$rowSub->id) }}" class="text-xl text-secondary mb-0" data-toggle="tooltip" data-original-title="Edit user">
                          Edit
                        </a>&nbsp; &nbsp;
                        <a href="{{ url('backend/categories/delete/'.$rowSub->id) }}"  onclick="return window.confirm('Are you sure?')"; class="text-xl text-secondary mb-0" data-toggle="tooltip" data-original-title="Edit user">
                          Delete
                        </a>
                      </td>
                        </tr>
                    @endforeach
                @endforeach
                  </tbody>
                </table>
                <div style="margin-bottom:5px;padding-left:10px;text-align:center;">
                        <a href="{{ url('backend/categories/create') }}" class="btn btn-primary">Add Products</a>
                  </div>
                {{ $data->render() }}
               <style>
                    .hidden{  display:none;  }
                    .flex{ margin:10px;  }
                </style>
            </div>
              </div>
           
          </div>
        </div>
      </div>
    </div>
@endsection
