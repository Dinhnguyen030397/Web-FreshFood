
@extends("admin.layout")
@section("do-du-lieu-tu-view")
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div >
              <h6 style="color:black;font-weight:bold;font-size:30px;text-align:center;margin-top:10px" >Users</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0" >
                  <thead>
                  <tr style="color:rgb(203,12,159);font-weight:bold" >
                      <th class="align-middle">Id</th>
                      <th class="align-middle ps-2">Infomation</th>
                      <th class="text-center align-middle">Status</th>
                      <th class="align-middle">Edit</th>
                    </tr>
                </thead>
                  @foreach($data as $row) 
                 
                  <tbody>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                            <h6 class="mb-0 text-sm">{{ $row->id }}</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="{{asset('upload/users/'.$row->img) }}"  style="width: 50px !important;height: 50px !important;" class="avatar avatar-sm me-3" alt="user6">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <p style="font-size:17px;font-weight:bold;margin:0px;color:black">{{ $row->name }}</p>
                            <p class="text-xl text-secondary mb-0">{{ $row->email }}</p>
                          </div>
                        </div>                    
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span style="background-color:grey" class="badge badge-sm">Offline</span>
                      </td>
                      <td class="align-middle">
                        <a href="{{ url('backend/users/update/'.$row->id) }}" class="text-xl text-secondary mb-0" data-toggle="tooltip" data-original-title="Edit user">
                          Edit
                        </a>&nbsp; &nbsp;
                        <a href="{{ url('backend/users/delete/'.$row->id) }}"  onclick="return window.confirm('Are you sure?')"; class="text-xl text-secondary mb-0" data-toggle="tooltip" data-original-title="Edit user">
                          Delete
                        </a>
                      </td>
                    </tr>
                  </tbody>
                  @endforeach
                </table>
               
                {{ $data->render() }}
                  <div style="margin-bottom:5px;padding-left:10px;text-align:center;">
                        <a href="{{ url('backend/users/create') }}" class="btn btn-primary">Create</a>
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
