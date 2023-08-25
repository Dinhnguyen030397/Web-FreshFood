@extends("admin.layout")
@section("do-du-lieu-tu-view")
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div >
              <h6 style="color:black;font-weight:bold;font-size:30px;text-align:center;margin-top:10px" >News</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="align-items-center mb-0" style="width:100%" cellpadding="10px">
                  <thead>
                  <tr style="color:rgb(203,12,159);font-weight:bold;text-align:center" >
                      <th class="align-middle">Photo</th>
                      <th class="align-middle ps-2">Title</th>
                      <th class="text-center align-middle">Hot</th>
                      <th class="align-middle">Edit</th>
                    </tr>
                </thead>
                  @foreach($data as $row) 
                 
                  <tbody>
                    <tr style="border-top: 1px dashed; margin:10px">
                      <td style="width:15%;border-right: 1px dashed">
                        <div class="d-flex px-2 py-1">
                          <img src="{{ asset('upload/news/'.$row->photo) }}" alt="">
                           
                          </div>
                        </div>
                      </td>
                      <td style="width:55%;border-right: 1px dashed">
                        <p style="font-size:15px;margin:0px;color:black">{{ $row->name }}</p>                  
                      </td>
                      <td class="align-middle text-center text-sm" style="width:15%;border-right: 1px dashed">
                              @if($row->hot == 1)
                                <i class="fa-regular fa-square-check"></i>
                              @endif
                      </td>
                      <td class="align-middle" style="width:15%;color:black;text-align:center">
                        <a href="{{ url('backend/news/update/'.$row->id) }}"  data-toggle="tooltip" data-original-title="Edit user">
                        <span style="background-color:green; padding:7px 18px; margin-left:15px " class="badge badge-sm">Edit</span>
                        </a>&nbsp; &nbsp;
                        <a href="{{ url('backend/news/delete/'.$row->id) }}"  onclick="return window.confirm('Are you sure?')"; class="text-xl text-secondary mb-0" data-toggle="tooltip" data-original-title="Edit user">
                        <span style="background-color:red" class="badge badge-sm">Delete</span>
                        </a>
                      </td>
                    </tr>
                  </tbody>
                  @endforeach
                </table>
               
                {{ $data->render() }}
                  <div style="margin-top:5px;text-align:center;">
                        <a href="{{ url('backend/news/create') }}" class="btn btn-primary">Create News</a>
                  </div>
                 
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <style>
      .hidden{  display:none;  }
      .flex{ margin:10px;  }
    </style>
@endsection