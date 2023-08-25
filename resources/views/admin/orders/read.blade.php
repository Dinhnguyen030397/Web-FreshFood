@extends("admin.layout")
@section("do-du-lieu-tu-view")
@php
    function getCustomerName($customer_id){
        $record = DB::table("customers")->where("id","=",$customer_id)->first();
        return isset($record->name) ? $record->name : "";
    }
@endphp
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div >
              <h6 style="color:black;font-weight:bold;font-size:30px;text-align:center;margin-top:10px" >Chi tiết đơn hàng</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                  <tr style="color:rgb(203,12,159);font-weight:bold" >
                      <th style="text-align:center;">Customer name</th>
                      <th style="text-align:center;">Date</th>
                      <th style="text-align:center;">Price</th>
                      <th style="text-align:center;">Status</th>
                      <th style="text-align:center;"></th>
                    </tr>
                </thead>
                  @foreach($data as $row) 
                 
                  <tbody>
                  <tr class="order">
                    <td >{{ getCustomerName($row->customer_id) }}</td>
                    <td >{{ date("d/m/Y", strtotime($row->date)) }}</td>
                    <td >{{ number_format($row->price) }}</td>
                    <td >
                        @if($row->status == 1)
                            <span style="color:red;">Đã giao hàng</span>
                        @else
                            <span>Chưa giao hàng</span>
                        @endif
                    </td>
                    <td style="text-align:center;">
                            <a href="{{ url('backend/orders/detail/'.$row->id) }}" class="label label-warning">Chi tiết</a>
                    </td>
                </tr>
                @endforeach
                </table>
               
                {{ $data->render() }}
                 
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <style>
      .hidden{  display:none;  }
      .flex{ margin:10px;  }
      table tbody tr td{
                text-align:center;
                border-right:1px dotted grey !important;
                border-bottom:1px dotted grey !important;
                }
    </style>
@endsection