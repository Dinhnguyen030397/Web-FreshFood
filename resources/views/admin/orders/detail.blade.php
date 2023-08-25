@extends("admin.layout")
@section("do-du-lieu-tu-view")

@php
    //lấy thông tin đơn hàng
    function getOrder($order_id){
        $order = DB::table("orders")->where("id","=",$order_id)->first();
        return $order;
    }
    //lấy thông tin customer
    function getCustomer($customer_id){
        $customer = DB::table("customers")->where("id","=",$customer_id)->first();
        return $customer;
    }
    //lấy thông tin sản phẩm thuộc đơn hàng
    function getProducts($order_id){
        $products = DB::table("order_details")->join("products","products.id","=","order_details.product_id")->select("products.name","products.photo","products.discount","order_details.quantity","order_details.price")->get();
        return $products;
    }
@endphp

@php
    $order = getOrder($order_id);
    $customer = getCustomer($order->customer_id)
@endphp
<div class="container-fluid py-4">
    <a href="#" onclick="history.go(-1);" class="btn btn-primary">Quay lại</a>
    @if($order->status == 0)
        <a href="{{ url('backend/orders/update/'.$order->id) }}" class="btn btn-danger">Thực hiện giao hàng</a>     
    @endif   
    <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div >
              <h6 style="color:black;font-weight:bold;font-size:30px;text-align:center;margin-top:10px" >Thông tin đơn hàng</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                  <tr style="color:rgb(203,12,159);font-weight:bold" >
                      <th style="text-align:center;">Tên khách hàng</th>
                      <th style="text-align:center;">Email</th>
                      <th style="text-align:center;">Ngày mua</th>
                      <th style="text-align:center;">Tổng giá</th>
                      <th style="text-align:center;">Trạng thái giao hàng</th>
                    </tr>
                </thead>
                  <tbody>
                  <tr >
                    <td >{{ isset($customer->name) ? $customer->name : "" }}</td>
                    <td >{{ isset($customer->email) ? $customer->email : "" }}</td>
                    <td >{{ isset($order->date) ? date("d/m/Y", strtotime($order->date)) : "" }}</td>
                    <td >{{ isset($order->price) ? $order->price : "" }}.đ</td>
                    <td >{{ $order->status == 1 ? "Đã giao hàng" : "Chưa giao hàng" }}</td>
                </tr>
                </table>
                 
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

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
                      <th style="text-align:center;">Photo</th>
                      <th style="text-align:center;">Name</th>
                      <th style="text-align:center;">Price</th>
                      <th style="text-align:center;">Discount</th>
                      <th style="text-align:center;">Quantity</th>
                    </tr>
                </thead>
                  <tbody>
                  @php
                    $products = getProducts($order_id);
                @endphp
                @foreach($products as $row)
                  <tr >
                    <td >   @if($row->photo != "" && file_exists('upload/products/'.$row->photo))
                                <img src="{{ asset('upload/products/'.$row->photo) }}" style="width:100px;">
                            @endif
                    </td>
                    <td >{{ $row->name }}</td>
                    <td >{{ number_format($row->price) }}</td>
                    <td >{{ $row->discount }}%</td>
                    <td >{{ $row->quantity }}</td>
                </tr>
                @endforeach
                </table>
                 
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