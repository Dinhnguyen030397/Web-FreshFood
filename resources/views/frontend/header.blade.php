
<header>
<div class="header">
        <div class="top_header">
                <div class="left_top">
                    <ul>
                        <li>
                            Hotline: <b>1900 6750</b>
                        </li>

                        <li>
                           <b>Địa chỉ</b>: Ladeco Building, 266 Doi Can Street, Hà Nội,
                        </li>
                    </ul>
                </div>
                @php
                    $customer_email = session()->get('customer_email');
                    //có thể dùng cách khác: $customer_email = Sesion::get('customer_email');
                @endphp
                @if(isset($customer_email))      
                    <div class="right_top"> 
                        @php
                            $customers_name = DB::table("customers")->where("email","=",$customer_email)->orderBy("id","desc")->get();
                         @endphp
                            @foreach($customers_name as $row)
                            <i style="font-size:17px;margin-right:5px;color:black" class="fa-regular fa-user"></i><a style="color:black"href="#"> {{ $row->name }}</a> &nbsp; &nbsp;&nbsp;bạn có muốn &nbsp;
                            @endforeach
                        <a href="{{ url('customers/logout') }}">Đăng xuất</a> ?
                    </div>
                @else
                    <div class="right_top">
                        <a href="{{ url('customers/login') }}"> <i class="fa-solid fa-user"></i> Đăng nhập </a> &nbsp; hoặc &nbsp;
                        <a href="{{ url('customers/register') }}"> Đăng ký</a>
                    </div>
                @endif
        </div>
        <div class="mid_header">
            <ul>
                <li> 
                    <a href="{{ url('home')}}"> <img src="{{ asset('upload/logo.png') }}" alt=""> </a>
                </li>

                <li>
                    <div class="item_header"> 
                        <div class="icon">
                            <a href=""> <img src="{{ asset('upload/icon_xe.png') }}" alt=""> </a>
                        </div>
                        <div class="text">
                            <a href=""> <b>Miễn phí vận  chuyển</b></a>
                            <p>Bán kính 10km</p>
                        </div>

                    </div>
                </li>

                <li>
                    <div class="item_header"> 
                        <div class="icon">
                            <a href=""> <img src="{{ asset('upload/icon_mail.png') }}" alt=""> </a>
                        </div>
                        <div class="text">
                            <a href=""> <b>Hỗ trợ 24/7</b></a>
                            <p>Hotline: <b>19006750</b> </p>
                        </div>

                    </div>
                </li>

                <li>
                    <div class="item_header"> 
                        <div class="icon">
                            <a href=""> <img src="{{ asset('upload/icon_clock.png') }}" alt=""> </a>
                        </div>
                        <div class="text">
                            <a href=""> <b>Giờ làm việc</b></a>
                            <p>T2 - T7 Giờ hành chính</p>
                        </div>

                    </div>
                </li>

                <li> 
                <?php use App\Http\ShoppingCart\Cart; ?>
                    <div class="cart">
                        <a href="{{ asset('cart') }}"><i class="fa-solid fa-bag-shopping"></i> Giỏ hàng ( {{ Cart::cartNumber() }} ) </a>
                        @if(Cart::cartNumber() > 0)
                        <div class="mini_cart">
                            <ul>
                            @php
                                $cart = Cart::cartList();
                            @endphp            
                            @foreach($cart as $product)
                                <li>
                                    <div class="img_mini_cart">
                                        <a href="{{ url('products/detail/'.$product['id']) }}">
                                            <img src="{{ asset('upload/products/'.$product['photo']) }}" alt="{{ $product['name'] }}" width="100%">
                                        </a>
                                    </div>
                                    <div class="info_mini_cart">
                                        <h4><a href="{{ url('products/detail/'.$product['id']) }}">{{ $product['name'] }}</a> </h4>
                                        <p ><b style="font-size:12px">{{ $product['quantity'] }} x {{ number_format($product['price']) }}.₫</b></p>
                                    </div> 
                                    <div class="del_mini_cart" ><a href="{{ url('cart/remove/'.$product['id']) }}"> <i class="fa-solid fa-trash-can"></i></div>
                                </li>
                            @endforeach
                            </ul>
                            <div style="text-align:center">
                                <a href="{{ url('cart/order') }}" class="button_mini_cart">Thanh toán</a> 
                            </div>
                        @endif
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="menu_header">
            <div class="menu">
                <ul>
                    <li><a href="{{ url('home')}}">Trang chủ</a></li>
                    <li><a href="">Sản phẩm <i class="fa-solid fa-angle-right"></i></a>
                        <div class="menu_child">
                            @php
                                $categories = DB::table("categories")->where("parent_id","=",0)->orderBy("id","desc")->get();
                                
                            @endphp
                            @foreach($categories as $row)
                            <ul ><a href="{{ url('products/category/'.$row->id) }}"><b style="font-size:15px;">{{ $row->name }}</b></a>
                                     @php
                                     $subCategories = DB::table("products")->where("category_id","=",$row->id)->orderBy("id","desc")->get();
                                     $count = 0;
                                     @endphp
                                    @foreach($subCategories as $subRow)
                                    <li><a href="{{ url('products/detail/'.$subRow->id) }}">{{ $subRow->name }}</a></li>
                                    @php $count++;  if($count>=4) break; @endphp
                                    @endforeach
                                <li><a style="color:#80bb35" href="{{ url('products/category/'.$row->id) }}">Xem tiếp >></a></li>                                   
                            </ul>
                            @endforeach
                        </div>
                        
                    </li>
                    <li><a href="">Giới thiệu</a></li>
                    <li><a href="../layout/news.html">Tin tức <i class="fa-solid fa-angle-right"></i></a>
                        <div class="news">
                            <ul>
                                <li>
                                    <a href="../layout/news.html">Tin mới</a>
                                </li>

                                <li>
                                    <a href="../layout/news.html">Tin quốc tế <i style="margin-left: 80px;margin-right: -40px;"class="fa-solid fa-angle-right"></i></a>
                                    <ul>
                                        <li><a href="../layout/news_detail.html">Tin hot 1</a></li>
                                        <li><a href="../layout/news_detail.html">Tin hot 1</a></li>
                                        <li><a href="../layout/news_detail.html">Tin hot 2</a></li>
                                        <li><a href="../layout/news_detail.html">Tin hot 3s</a></li>
                                        <li><a href="../layout/news_detail.html">Tin hot 3s</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="../layout/news.html">Tin trong nước</a>
                                </li>
                                <li>
                                    <a href="../layout/news.html">Tin trong nước</a>
                                </li>
                            </ul>
                                
                        </div>
                    </li>
                    <li><a href="">Liên hệ</a></li>
                    <li><a href="{{ asset('contact') }}">Chỉ đường</a></li>
                </ul>
            </div>
            <div class="search header-search">
                <div>
                    <input type="text" onkeyup="ajaxSearch();" onkeypress="searchForm(event);" value="" placeholder="Nhập từ khóa tìm kiếm..." id="key" class="input-control">
                    <button type="submit"> <i class="fa-solid fa-magnifying-glass" onclick="location.href='{{ url('products/search') }}?key='+document.getElementById('key').value;"></i> </button>
                </div>

                <div class="search-result">
                    <ul>
         
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
    <style type="text/css">
      .header-search{position: relative;}
      .search-result{position: absolute; z-index: 10;right:-40px;top:50px;background: white}
      .search-result ul{padding:0px; margin:0px; list-style: none; width: max-content; background: white; max-height: 200px; overflow: scroll;}
      .search-result ul li{border-bottom: 1px solid #dddddd;display:flex}
      .search-result img{width: 40px;margin:0px 20px}
      .search-result a{color:black}
      .header-search button{border:none;background-color:white;position:absolute;top: 16px;left: 223px;}
    </style>
    <script type="text/javascript">
      function searchForm(event){
        //nếu là phím enter thì sẽ di chuyển đến trang tìm kiếm
        if(event.which == 13)
          location.href = '{{ url('products/search') }}?key='+document.getElementById('key').value;
      }
      //kiểm tra xem jquery đã được load vào trang hay chưa
      // $(document).ready(function(){
      //   alert('ok');
      // });
      function ajaxSearch(){
        let key = document.getElementById('key').value;
        if(key != ''){
          //hiển thị search result
          $(".search-result").attr('style','visibility:visible');
          //---
          $.ajax({
            url: "{{ url('products/ajax-search') }}?key="+key,
            success: function( result ) {
              //clear content trong thẻ ul
              $('.search-result ul').empty();
              $('.search-result ul').append(result);
            }
          });
          //---
        }else
          $(".search-result").attr('style','visibility:hidden');
      }
    </script>
</header>