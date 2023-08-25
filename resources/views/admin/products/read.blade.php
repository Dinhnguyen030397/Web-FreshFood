@extends("admin.layout")
@section("do-du-lieu-tu-view")
<div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div >
              <h6 style="color:#cb0c9f;font-weight:bold;font-size:30px;text-align:center;margin-top:10px" >Products</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class=" align-items-center mb-0" style="width:100%" cellpadding="10px">
                  <thead>
                  <tr style="color:rgb(203,12,159);font-weight:bold;text-align:center" >
                    <th class="text-center align-middle">Photo</th>
                    <th class="text-center align-middle">Name</th>
                    <th class="text-center align-middle">Categories</th>
                    <th class="text-center align-middle">Price</th>
                    <th class="text-center align-middle">Discount</th>
                    <th class="text-center align-middle">Hot</th>
                    <th class="text-center align-middle">Edit</th>
                    </tr>
                </thead>
                  @foreach($data as $row) 
                 
                  <tbody>
                    <tr style="border-top:1px dashed ">
                      <td style="width:10%;border-right:1px dashed">
                            @if($row->photo != "" && file_exists('upload/products/'.$row->photo))
                                <img src="{{ asset('upload/products/'.$row->photo) }}" style="width:100%;">
                            @endif
                        </div>
                      </td>
                      <td style="width:25%;border-right:1px dashed">
                            {{ $row->name }}                 
                      </td>
                      <td class="align-middle text-center text-sm" style="width:15%;border-right:1px dashed">
                            {{ App\MyCustomClass\Products::getCategoryName($row->category_id) }}
                      </td>
                      <td class="align-middle text-center text-sm" style="width:10%;border-right:1px dashed">
                            {{ number_format($row->price) }}.đ
                      </td>
                      <td class="align-middle text-center text-sm" style="width:10%;border-right:1px dashed">
                            {{ $row->discount }}%
                      </td>
                      <td class="align-middle text-center text-sm" style="width:10%;border-right:1px dashed">
                            @if($row->hot == 1)
                                <span class="glyphicon glyphicon-check"></span>
                            @endif
                      </td>
                      <td  style="width:20%">
                        <a class="edit" style="background-color:green"href="{{ url('backend/products/update/'.$row->id) }}"  data-toggle="tooltip" data-original-title="Edit user">
                        Edit
                        </a>&nbsp; &nbsp;
                        <a class="edit" style="background-color:red"href="{{ url('backend/products/delete/'.$row->id) }}"  onclick="return window.confirm('Are you sure?')"; class="text-xl text-secondary mb-0" data-toggle="tooltip" data-original-title="Edit user">
                        Delete
                        </a>
                      </td>
                    </tr>
                  </tbody>
                  @endforeach
                </table>
               
                {{ $data->render() }}
                  <div style="margin-top:5px;text-align:center;">
                        <a href="{{ url('backend/products/create') }}" class="btn btn-primary">Create Product</a>
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
      .edit{
        display: inline-block;
        border-radius: 5px;
        padding:0px 5px;
        color: white;
      }
      .edit:hover{
        background-color:white !important;
        color: black;
        border: 0.5px solid black;
      }
    </style>
@endsection