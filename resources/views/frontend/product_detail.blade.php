@extends("frontend.layout_shop")
@section("do-du-lieu-vao-layout")
@php
	function getCategoryName($category_id){
		$record = DB::table("categories")->where("id","=",$category_id)->select("name")->first();
		return isset($record->name) ? $record->name : "";
	}
@endphp
<div class="detail_content">
            <div class="title_link">
                <a href="{{ url('home')}}">Trang chủ</a> 
                <i class="fa-solid fa-angle-right"></i>
                <a href="{{ url('products/category/'.$record->category_id) }}">{{ getCategoryName($record->category_id) }}</a> 
                <i class="fa-solid fa-angle-right"></i>  
                <a style="color:#fe9705">{{ $record->name }}</a>
            </div>
            <div class="content_product">
                <div class="box_img">
                    <img src="{{ asset('upload/products/'.$record->photo) }}" alt=""id="show_image" style="width: 380px;margin: auto;">
                    <ul>
                        <li> <img src="{{ asset('upload/products/'.$record->photo) }}" alt="" id="img1" onclick="change_img('img1');"></li>
                        <li> <img src="{{ asset('admin/img/img1.jpg') }}" alt="" id="img2" onclick="change_img('img2');"></li>
                        <li> <img src="{{ asset('admin/img/img2.jpg') }}" alt="" id="img3" onclick="change_img('img3');"></li>
                        <li> <img src="{{ asset('admin/img/img3.jpg') }}" alt="" id="img4" onclick="change_img('img4');"></li>
                        <li> <img src="{{ asset('admin/img/img4.jpg') }}" alt="" id="img5" onclick="change_img('img5');"></li>
                    </ul>
                </div>
              
                 <div class="infomation">
                    <h2>{{ $record->name }}</h2>
                    <p>Trạng thái: <span> <i class="fa-solid fa-check"></i> Còn hàng</span></p>
                    <p style="font-size:20px;text-decoration:line-through;padding:0px;font-weight: bold;color:black;">{{ number_format($record->price) }}.đ</p>
                    <p style="font-size: 30px;padding:0px 0px 10px 0px;font-weight: bold;color: #fe9705;">{{ number_format($record->price - ($record->price * $record->discount)/100) }}.đ</p>
                    <div style="font-size: 14px;padding:5px 0px;line-height:25px;color: #7d7d7c;border-top: 1px solid rgb(191, 191, 191);border-bottom: 1px solid rgb(191, 191, 191);">
                        <p>{!!$record->description!!}</p>
                    </div>
                    <div class="buttons_added">
                        <label for="">Số lượng:</label>
                       <button class="plus-btn is-form" onclick="handleMinus()"><i class="fa-solid fa-minus"></i></button>
                        <input type="text" class="number" onkeyup="nhapsoluong()" data-field="quantity" value="1" id="qty" name="quantity">
                        <button class="minus-btn is-form"onclick="handlePlus()" ><i class="fa-solid fa-plus"></i></button>
                        <div> <a href="{{ asset('cart/buy/'.$record->id) }}">Mua hàng</a></div>
                    </div>
                    <p> <b>Tag:</b>  <a href="">100k-200k</a>, <a href="">Phú Hải</a>,<a href="">Vinamilk</a> <a href="">100k-200k</a>, <a href="">Phú Hải</a>,<a href="">Vinamilk</a><a href="">100k-200k</a>, <a href="">Phú Hải</a>,<a href="">Vinamilk</a>
                    </p>
                    <p><b>Chia sẻ:</b> <a href=""><i class="fa-brands fa-facebook"></i></a>
                                <a href=""><i class="fa-brands fa-pinterest"></i></a>
                                <a href=""><i class="fa-brands fa-twitter"></i></a>
                                <a href=""><i class="fa-brands fa-google-plus"></i></a>
                    </p>
                    </div>
                    
            </div>
            <div style="color:#7d7d7c; border:0.5px solid rgb(214, 214, 214); margin: 20px 10px 50px 20px;border-radius: 10px;padding:5px 10px;line-height: 25px;font-size: 15px;">
                <p>{!!$record->content!!}</p>
            </div>
            <div class="container_product related_product">
                <div class="title">
                    <h1 >SẢN PHẨM HOT</h1>
                </div>
            </div>
            <div class="product">
                @php
                    //gọi hàm trong HomeController để lấy kết quả. Do hàm hotProducts là hàm static nên có thể truy cập từ tên class mà không cần khởi tạo đối tượng
                    $hotProducts = \App\Http\Controllers\Frontend\HomeController::hotProducts();
                @endphp
                @foreach($hotProducts as $row)
                <div class="item" style="width:calc(100%/3)">
                    <div class="box">
                        <div class="image">
                            <a href="{{ url('products/detail/'.$row->id) }}"><img src="{{ asset('upload/products/'.$row->photo) }}" title="{{ $row->name }}" alt="{{ $row->name }}"></a>
                        </div>
                        <div class="infor">
                        <a href="{{ url('products/detail/'.$row->id) }}">{{ $row->name }}</a>
                        <p style="font-weight:bold; color:gray;font-size:16px;text-decoration:line-through;">{{ number_format($row->price) }}.đ</p>
                        <p style="font-weight:bold; color:red;font-size:17px">{{ number_format($row->price - ($row->price * $row->discount)/100) }}.đ</p>
                        <div class="price-box">
                        <a href="{{ url('products/rating/'.$row->id.'?star=1') }}"><img src="{{ asset('frontend/images/star.jpg') }}"></a> 
                      	<a href="{{ url('products/rating/'.$row->id.'?star=2') }}"><img src="{{ asset('frontend/images/star.jpg') }}"></a> 
                      	<a href="{{ url('products/rating/'.$row->id.'?star=3') }}"><img src="{{ asset('frontend/images/star.jpg') }}"></a> 
                      	<a href="{{ url('products/rating/'.$row->id.'?star=4') }}"><img src="{{ asset('frontend/images/star.jpg') }}"></a> 
                      	<a href="{{ url('products/rating/'.$row->id.'?star=5') }}"><img src="{{ asset('frontend/images/star.jpg') }}"></a>
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
        </div>
    <script src="{{ asset('frontend/js/jquery-3.2.1.slim.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery-3.6.2.min.js') }}"></script>
    <script src=""></script>
    <script type="text/javascript" src="{{ asset('frontend/js/slick.min.js') }}"></script>
    <script>
        function change_img(id){
         var src_img = document.getElementById(id).getAttribute("src")
        document.getElementById("show_image").setAttribute("src",src_img)
        }

        $('.container_slider').slick({
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            slidesToShow:1,
            cssEase: 'linear',
        });

        $('.list_item').slick({
                    slidesToScroll: 1,
                    autoplay: true,
                    autoplaySpeed: 3000,
                    slidesToShow:4,
                    cssEase: 'linear',
        });
        var soluong = document.getElementById("qty").value
        function handleMinus(){
            soluong--
            document.getElementById("qty").setAttribute("value",soluong)
        }
        function handlePlus(){
            soluong++
            document.getElementById("qty").setAttribute("value", soluong)
        }
    </script>

@endsection