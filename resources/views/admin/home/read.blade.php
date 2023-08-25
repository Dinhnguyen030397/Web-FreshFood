@extends("admin.layout")
@section("do-du-lieu-tu-view")

    <div style="display:flex;margin-left: 30px;list-style: none;margin:0px 30px 30px;padding-bottom:30px;background: none;border-radius: 20px;box-shadow: 10px 10px 20px rgb(218, 218, 218)">
        
        <img src="{{asset('admin/img/page.png')}}" alt="" width="40%" style="margin-top: -50px">
        <div style="margin:40px 0px;">
            <p style="color:black;margin: 0px;font-weight: bolder;font-size: 20px">Welcome back!</p> 
            <h3 style="color:blue;margin: 0px">{{Auth::user()->name}}</h3>
            <p style="color:black;font-size: 16px;margin:5px 0px;font-style: italic">Let's start your work!</p>
        </div>
    </div>

@endsection