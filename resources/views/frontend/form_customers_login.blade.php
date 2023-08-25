@extends("frontend.layout_shop")
@section("do-du-lieu-vao-layout") 

  <div class="login">
            <div class="title">
           
                <h2>Đăng nhập</h2>   
            </div>
            <form action="{{ url('customers/login-post') }}" method="post">
                @csrf
                <div style="margin-top:20px"class="row">
                    <label>Email</label> <br>
                    <input type="text"  name="email" required placeholder="Nva@gmail.com...">
                </div>
                <div class="row">
                    <label>Mật khẩu</label> <br>
                    <input type="password" name="password" required class="password" placeholder="Nhập mật khẩu">
                </div>
                @if(!empty($_GET)) 
                @if ($_GET['notify']== 'invalid') 
                    <p style="margin-top:-10px;margin-bottom:10px;color:white;font-size:16px; font-style: italic;text-align:center">Bạn đã nhập sai email hoặc mật khẩu, vui lòng kiểm tra lại</p>
                @endif
                @endif
                <a href="" style="font-size:17px">Quên mật khẩu? </a>
                <div class="row btn">
                    <input style=" display: block;width: 40%;background-color: rgb(180, 0, 0);color: white;font-weight: bold;font-size: 16px;line-height: 20px;"type="submit" class="button" value="Đăng nhập">
                </div>
                <div class="container_line">
                        <div class="line"></div>
                        <div class="title">
                            <p>OR</p>
                        </div>
                        <div class="line"></div>
                </div>

                <div class="connect">
                       <div class="facebook">
                            <a href="">
                                <img src="{{ asset('frontend/images/fb_tron.png') }}" alt="" width="20%">
                                <p>Facebook</p>
                            </a>  
                       </div> 
                       <div class="facebook">
                        <a href="">
                            <img src="{{ asset('frontend/images/Google__G__Logo.svg.png') }}" alt="" width="20%">
                            <p>Google</p>
                        </a>  
                   </div> 
                </div>
            </form>
            <div class="row">
                <p> Bạn chưa có tài khoản hãy <a href="/layout/signup.html">Đăng ký</a></p>
            </div>
        </div>

@endsection