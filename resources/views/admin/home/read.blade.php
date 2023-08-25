@extends("admin.layout")
@section("do-du-lieu-tu-view")

    <div style="display:list-item;margin-left: 30px;list-style: none;">
        <h4 style="color:rgb(249, 62, 140)">Welcom {{Auth::user()->name}}!</h4>
        <img src="{{asset('admin/img/page.jpg')}}" alt="" width="70%" style="margin-top: 20px">
        
    </div>

@endsection