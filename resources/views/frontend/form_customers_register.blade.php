@extends("frontend.layout_shop")
@section("do-du-lieu-vao-layout")

<div class="login">
            <div class="title">
                <h2>Đăng ký tài khoản</h2>
            </div>
            <form method='post' action="{{ url('customers/register-post') }}">
                	@csrf
                <div class="row">
                      <label>Họ và tên</label> <br>
                      <input type="text" name="name"  required placeholder="Nguyễn Văn A...">
                </div>
                <div class="row">
                    <label>Email</label> <br>
                    <input type="email" name="email"  required placeholder="Nva@gmail.com...">
                </div>
                <div class="row">
                    <label>Địa chỉ</label> <br>
                    <input type="text" name="address" placeholder="Số nhà, tên đường, phố, xã, huyện, tỉnh..">
                </div>
                <div class="row">
                    <label>Số điện thoại</label> <br>
                    <input type="number" name="phone" required placeholder="0123456789...">
                </div>
                <div class="row">
                    <label>Mật khẩu</label> <br>
                    <input type="password" name="password" required class="password" placeholder="Nhập mật khẩu">
                </div>
                <div class="row btn">
                <input style=" display: block;width: 40%;background-color: rgb(180, 0, 0);color: white;font-weight: bold;font-size: 16px;line-height: 20px;"type="submit" class="button" value="Đăng ký">
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
                <p> Bạn đã có tài khoản hãy <a href="{{ url('customers/login') }}">Đăng nhập</a></p>
            </div>
        </div>

@endsection