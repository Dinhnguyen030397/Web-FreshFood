@extends("frontend.layout_home")

@section("do-du-lieu-vao-layout")
@include("frontend.slider")    
<div class="container_product">
    <div class="header_product">
        <div class="title">
            <h1 style="margin-left: 20px;">SẢN PHẨM HOT MỖI NGÀY</h1>
        </div>
                
        <div class="select">
            <a href="{{url('products/category/12')}}">Rau củ</a>
            <a href="{{url('products/category/13')}}">Hoa quả</a>
            <a href="{{url('products/category/14')}}">Thịt</a>
            <a href="{{url('products/category/15')}}">Hải sản</a>
        </div>
    </div> 
    
<div class="product">
        @php
            $hotProducts = \App\Http\Controllers\Frontend\HomeController::hotProducts();
        @endphp
    @foreach($hotProducts as $row)
        <div class="item">
            <div class="box">
            <div class="discount">
                @if($row->discount >0)
                    <p>{{ $row->discount }}%</p>
                @endif
            </div>
                <div class="image">
                    <a href="{{ url('products/detail/'.$row->id) }}"><img src="{{ asset('upload/products/'.$row->photo) }}" title="{{ $row->name }}" alt="{{ $row->name }}"></a>
                </div>
                <div class="infor">
                    <a style="font-size: 16px; font-weight:bold;font-style: italic;color:orangered" href="{{ url('products/detail/'.$row->id) }}">{{ $row->name }}</a>
                    @if($row->discount >0)
                    <p style="font-weight:bold; color:gray;font-size:16px;text-decoration:line-through;">{{ number_format($row->price) }}.đ</p>
                    
                    @else
                    <p style="font-weight:bold; color:white;font-size:16px;text-decoration:line-through;">Sản phẩm chưa giảm giá </p>
                    @endif
                    <p style="font-weight:bold; color:red;font-size:17px">{{ number_format($row->price - ($row->price * $row->discount)/100) }}.đ</p>
                    <div class="price-box">
                        <a href="{{ url('products/rating/'.$row->id.'?star=1') }}"><img src="frontend/images/star.jpg"></a> 
                      	<a href="{{ url('products/rating/'.$row->id.'?star=2') }}"><img src="frontend/images/star.jpg"></a> 
                      	<a href="{{ url('products/rating/'.$row->id.'?star=3') }}"><img src="frontend/images/star.jpg"></a> 
                      	<a href="{{ url('products/rating/'.$row->id.'?star=4') }}"><img src="frontend/images/star.jpg"></a> 
                      	<a href="{{ url('products/rating/'.$row->id.'?star=5') }}"><img src="frontend/images/star.jpg"></a>
                    </div>
                </div>
                <div class="add_cart">
                    <form action="">
                    <a href="{{ asset('cart/buy/'.$row->id) }}">Add to Cart</a>
                    </form>
                </div>
            </div>      
        </div>
    @endforeach
    </div>
        
            
</div>
<div class="banner_coltab2" style="text-align:center" >
            <img src="{{ asset('upload/banner_coltab2_1.png') }}" alt="">
        </div>
        @php
          $categories = \App\Http\Controllers\Frontend\HomeController::getCategories();
        @endphp
        @foreach($categories as $rowCategory)
<div class="container_product">
    <div class="header_product">
        <div class="title">
           <a href="{{ url('products/category/'.$rowCategory->id) }}"><h1 style="margin-left: 20px;">{{ $rowCategory->name }}</h1></a> 
        </div>
                
        <div class="select">
            <a href="{{url('products/category/12')}}">Rau củ</a>
            <a href="{{url('products/category/13')}}">Hoa quả</a>
            <a href="{{url('products/category/14')}}">Thịt</a>
            <a href="{{url('products/category/15')}}">Hải sản</a>
        </div>
    </div> 
    
<div class="product">
    @php
	    $products = \App\Http\Controllers\Frontend\HomeController::getProductsInCategory($rowCategory->id);
	@endphp
	@foreach($products as $row)
        <div class="item">
            <div class="box">
                <div class="discount">
                    @if($row->discount >0)
                    <p>{{ $row->discount }}%</p>
                    @endif
                </div>
                <div class="image">
                    <a href="{{ url('products/detail/'.$row->id) }}"><img src="{{ asset('upload/products/'.$row->photo) }}" title="{{ $row->name }}" alt="{{ $row->name }}"></a>
                </div>
                <div class="infor">
                    <a style="font-size: 16px; font-weight:bold;font-style: italic;color:orangered" href="{{ url('products/detail/'.$row->id) }}">{{ $row->name }}</a>
                    @if($row->discount >0)
                    <p style="font-weight:bold; color:gray;font-size:16px;text-decoration:line-through;">{{ number_format($row->price) }}.đ</p>
                    
                    @else
                    <p style="font-weight:bold; color:white;font-size:16px;text-decoration:line-through;">Sản phẩm chưa giảm giá </p>
                    @endif
                    <p style="font-weight:bold; color:red;font-size:17px">{{ number_format($row->price - ($row->price * $row->discount)/100) }}.đ</p>
                    <div class="price-box">
                        <a href="{{ url('products/rating/'.$row->id.'?star=1') }}"><img src="frontend/images/star.jpg"></a> 
                      	<a href="{{ url('products/rating/'.$row->id.'?star=2') }}"><img src="frontend/images/star.jpg"></a> 
                      	<a href="{{ url('products/rating/'.$row->id.'?star=3') }}"><img src="frontend/images/star.jpg"></a> 
                      	<a href="{{ url('products/rating/'.$row->id.'?star=4') }}"><img src="frontend/images/star.jpg"></a> 
                      	<a href="{{ url('products/rating/'.$row->id.'?star=5') }}"><img src="frontend/images/star.jpg"></a>
                    </div>
                </div>
                <div class="add_cart">
                    <form action="">
                    <a href="{{ asset('cart/buy/'.$row->id) }}">Add to Cart</a>
                    </form>
                </div>
            </div>      
        </div>
    @endforeach
    </div>          
</div>
<div class="banner_coltab3" style="margin-left:30px">
            <img src="{{ asset('upload/banner_coltab3_1.png') }}" alt="">
            <img src="{{ asset('upload/banner_coltab3_2.png') }}" alt="">
        </div>
@endforeach

<div class="container_news">
        <div class="title">
            <h1>TIN CẬP NHẬP</h1>
        </div>
        <p>Tin tức vệ sinh an toàn thực phẩm cập nhật mới nhất 
            <br> mỗi ngày cho bạn</p> 
        <div class="list_news">

            <div class="item_new">
                <div class="box_news">
                    <a class="image"href=""><img src="{{ asset('upload/news/blog_1.png') }}"  alt=""></a>
                    <a href="">Kỹ thuật trông rau sạch trong chậu xốp tại nhà đơn giản</a>
                    <p >Tự trồng rau trong thùng xốp tại nhà là sự lựa chọn của rất nhiều gia đình trong thành phố bởi phương pháp trồng rau đơn giản, dễ trồng, dễ quản lý, an toàn và tiện lợi.&nbsp;Nhưng người trồng cũng...</p>
                    <a class="show_more">Chi tiết</a>
                </div>
                
            </div>

            <div class="item_new">
                <div class="box_news">
                    <a class="image"href=""><img src="{{ asset('upload/news/blog_2.png') }}"  alt=""></a>
                    <a href="">Kỹ thuật trông rau sạch trong chậu xốp tại nhà đơn giản</a>
                    <p >Tự trồng rau trong thùng xốp tại nhà là sự lựa chọn của rất nhiều gia đình trong thành phố bởi phương pháp trồng rau đơn giản, dễ trồng, dễ quản lý, an toàn và tiện lợi.&nbsp;Nhưng người trồng cũng...</p>
                    <a class="show_more">Chi tiết</a>
                </div>
                
            </div>

            <div class="item_new">
                <div class="box_news">
                    <a class="image"href=""><img src="{{ asset('upload/news/blog_3.png') }}"  alt=""></a>
                    <a href="">Kỹ thuật trông rau sạch trong chậu xốp tại nhà đơn giản</a>
                    <p >Tự trồng rau trong thùng xốp tại nhà là sự lựa chọn của rất nhiều gia đình trong thành phố bởi phương pháp trồng rau đơn giản, dễ trồng, dễ quản lý, an toàn và tiện lợi.&nbsp;Nhưng người trồng cũng...</p>
                    <a class="show_more">Chi tiết</a>
                </div>
                
            </div>

            
        </div>
     </div>   


@endsection