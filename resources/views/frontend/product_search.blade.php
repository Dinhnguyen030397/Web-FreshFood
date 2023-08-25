@extends("frontend.layout_shop")
@section("do-du-lieu-vao-layout")
<div class="container_product">
    <div class="header_product">
        <div class="title">
           <a href="#"><h1 style="margin-left: 20px;">Tìm kiếm từ khóa: {{ $key }}</h1></a> 
        </div>
    </div> 
    
    <div class="product">
    
	    @foreach($data as $row)
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
                    <a href="{{ url('products/detail/'.$row->id) }}">{{ $row->name }}</a>
                    @if($row->discount >0)
                    <p style="font-weight:bold; color:gray;font-size:16px;text-decoration:line-through;">{{ number_format($row->price) }}.đ</p>
                    
                    @else
                    <p style="font-weight:bold; color:white;font-size:16px;text-decoration:line-through;">Sản phẩm chưa giảm giá </p>
                    @endif
                    <p style="font-weight:bold; color:red;font-size:17px">{{ number_format($row->price - ($row->price * $row->discount)/100) }}.đ</p>
                    <div class="price-box">
                        <a href="{{ url('products/rating/'.$row->id.'?star=1') }}"><img src="{{asset ('frontend/images/star.jpg')}}"></a> 
                      	<a href="{{ url('products/rating/'.$row->id.'?star=2') }}"><img src="{{asset ('frontend/images/star.jpg')}}"></a> 
                      	<a href="{{ url('products/rating/'.$row->id.'?star=3') }}"><img src="{{asset ('frontend/images/star.jpg')}}"></a> 
                      	<a href="{{ url('products/rating/'.$row->id.'?star=4') }}"><img src="{{asset ('frontend/images/star.jpg')}}"></a> 
                      	<a href="{{ url('products/rating/'.$row->id.'?star=5') }}"><img src="{{asset ('frontend/images/star.jpg')}}"></a>
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
</div>                <!-- paging -->
                <div style="clear: both;"></div>
                <div style="margin-top: -50px;"  class="&#x70;&#x61;&#x67;&#x69;&#x6E;&#x61;&#x74;&#x69;&#x6F;&#x6E;&#x2D;&#x63;&#x6F;&#x6E;&#x74;&#x61;&#x69;&#x6E;&#x65;&#x72;">                  
                  {{ $data->render() }}
                </div>
                <!-- end paging --> 
              </div>
            </div>
          </div>
        </div>
        <style>
            .container_product{
                width:100%;
            }
            ..container_product{
                width:100%;
            }
            .item{
                width: calc(100%/3);
            }
        </style>
@endsection