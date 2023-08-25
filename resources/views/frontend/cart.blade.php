@extends("frontend.layout_home")
@section("do-du-lieu-vao-layout")
@php
	//để sử dụng các hàm bên trong trait Cart thì phải khai báo ở đây
	use \App\Http\ShoppingCart\Cart;
@endphp
@if(isset($cart))
<form action="{{ url('cart/update') }}" method="post">
    @csrf
<div class="cart_content">
            <table>
                <tr>
                    <th>Sản phẩm</th>
                    <th>Thông tin sản phẩm</th>
                    <th>Đơn giá</th>
                    <th>Số lượng</th>
                    <th>Thành tiền</th>
                    <th>Xóa</th>
                </tr>
                @foreach($cart as $product)
                <tr>
                    <td> <img src="{{ asset('upload/products/'.$product['photo']) }}" alt=""></td>
                    <td><a href="{{ url('products/detail/'.$product['id']) }}">{{ $product['name'] }}</a></td>
                    <td>{{ number_format($product['price'] - ($product['price'] * $product['discount'])/100) }}₫ </td>
                    <td><input type="number" id="qty" min="1" class="input-control" value="{{ $product['quantity'] }}" 
                    name="product_{{ $product['id'] }}" required="Không thể để trống"></td>
                    <td style="color:#fe9705">{{ number_format($product['quantity'] * ($product['price'] - ($product['price'] * $product['discount'])/100)) }}₫</td>
                    <td><a href="{{ url('cart/remove/'.$product['id']) }}" data-id="2479395"><i class="fa-solid fa-trash-can"></i></a></td>
                </tr>
                @endforeach
            </table>
        </div>
       
        @if(Cart::cartNumber() > 0)
        <div class="pay_content">
            <div >
                <div style=" display: flex;justify-content: space-between">  
                <div><a href="{{ url('cart/destroy') }}" class="">Xóa toàn bộ</a></div> 
                <div><input type="submit" value="Cập nhật"></div> 
            </div>
            </form>
        @endif
                <div>
                    @if(Cart::cartNumber() > 0)
                    <p>Tổng tiền: <b>{{ number_format(Cart::cartTotal()) }}₫</b></p>
                    <a href="{{ url('home') }}" class="continued">Tiếp tục mua hàng</a>
                    <a href="{{ url('cart/order') }}" class="stop">Tiến hành thanh toán</a>
                </div>
            </div>
        </div>
        @endif
    @endif
@endsection
