@extends("frontend.layout_shop")
@section("do-du-lieu-vao-layout")
@php
	function getCategoryName($category_id){
		//->select("name") chỉ select cột có tên là name
		$record = DB::table("categories")->where("id","=",$category_id)->select("name")->first();
		return isset($record->name) ? $record->name : "";
	}
@endphp
<div class="special-collection">
        <div class="header_content">
                <div class="title" >
                    <h1 >{{ getCategoryName($category_id) }}</h1>
                </div>
                <div class="arrange">
                <select  onchange="location.href = '{{ url('products/category/'.$category_id.'?order=') }}'+this.value;">
                  <option value="0">Sắp xếp</option>
                  <option @if($order=='priceAsc') selected @endif value="priceAsc">Giá tăng dần</option>
                  <option @if($order=='priceDesc') selected @endif value="priceDesc">Giá giảm dần</option>
                  <option @if($order=='nameAsc') selected @endif value="nameAsc">Sắp xếp A-Z</option>
                  <option @if($order=='nameDesc') selected @endif value="nameDesc">Sắp xếp Z-A</option>
                </select>
              </div>
        </div>     
        <div class="product">
            @foreach($data as $row)
                <div style="width:calc(100%/3)"class="item">
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
        <div style="clear: both;"></div>
                  <div style="margin-top: -50px;"  class="&#x70;&#x61;&#x67;&#x69;&#x6E;&#x61;&#x74;&#x69;&#x6F;&#x6E;&#x2D;&#x63;&#x6F;&#x6E;&#x74;&#x61;&#x69;&#x6E;&#x65;&#x72;">                  
                  {{ $data->render() }}
        </div>
               
    </div>
</div>
@endsection