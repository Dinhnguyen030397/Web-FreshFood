<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Dưa leo</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css'  href="{{ asset('frontend/css/main.css') }}">
    <!-- <link rel='stylesheet'  href='{{ asset('frontend/js/jquery-3.2.1.slim.min.js') }}css/bootstrap.min.css'> -->
    <link rel="stylesheet" type='text/css'href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"> 
    <script src='main.js'></script>
    <script src="{{ asset('frontend/js/jquery-3.2.1.slim.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery-3.6.2.min.js') }}"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/slick.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/slick-theme.css') }}"/>
</head>
<body>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/648c476094cf5d49dc5e1751/1h31vdkpo';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
    @include("frontend.header")

  
    @yield("do-du-lieu-vao-layout")
     <div class="container_feedback">
        <div class="title">
            <h1>PHẢN HỒI CỦA KHÁCH HÀNG</h1>
        </div>
        <p>Phản hồi của những khách hàng đã và đang sử dụng sản
            <br> phẩm trong suốt những năm qua</p> 
        <div class="list_feedback">

            <div class="item_feedback">
                <div class="box_feedback">
                    <img src="{{ asset('upload/testimonial_1.png') }}" alt="">
                    <h2>Người mẫu - Ngọc Trinh</h2>
                    <p >Là một người khá kỹ tính, tôi luôn luôn lựa chọn <br> những 
                        thực phẩm sạch nhất. Và đây là nơi tôi đặt <br> trọng niềm tin 
                    </p>
                </div>
                
            </div>

            <div class="item_feedback">
                <div class="box_feedback">
                    <img src="{{ asset('upload/testimonial_2.png') }}" alt="">
                    <h2>Diễn viên - Phương Trinh</h2>
                    <p >Là một người khá kỹ tính, tôi luôn luôn lựa chọn <br> những 
                        thực phẩm sạch nhất. Và đây là nơi tôi đặt <br> trọng niềm tin 
                    </p>
                </div>
                
            </div>

            <div class="item_feedback">
                <div class="box_feedback">
                    <img src="{{ asset('upload/testimonial_3.png') }}" alt="">
                    <h2>Ca sĩ - Hoàng Yến</h2>
                    <p >Là một người khá kỹ tính, tôi luôn luôn lựa chọn <br> những 
                        thực phẩm sạch nhất. Và đây là nơi tôi đặt <br> trọng niềm tin 
                    </p>
                </div>
                
            </div>
            
        </div>
     </div>  
     <div class="brand">
        <a href=""><img src="{{ asset('frontend/img/brand2.png') }}" alt=""></a>
        <a href=""><img src="{{ asset('frontend/img/brand1.png') }}" alt=""></a>
        <a href=""><img src="{{ asset('frontend/img/brand2.png') }}" alt=""></a>
        <a href=""><img src="{{ asset('frontend/img/brand1.png') }}" alt=""></a>
        <a href=""><img src="{{ asset('frontend/img/brand2.png') }}" alt=""></a>
        <a href=""><img src="{{ asset('frontend/img/brand1.png') }}" alt=""></a>
     </div>
     <footer>
        <div class="container_footer">
            <div class="company">
            <ul>
                <li>
                    <h3>liên hệ</h3>
                </li>

                <li>
                    <a href=""> 
                        CÔNG TY DƯA LEO
                    </a>
                </li>

                <li>
                    <a href=""> 
                        Hệ thống cửa hàng trên toàn quốc
                    </a>
                </li>

                <li>Email: Dinh nguyen0303@gmail.com</li>
                <li>Giờ làm việc: 09.am ~ 08.pm</li>
                <li>Hotline: <span> 0965429363</span></li>
                <li>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d59592.882658025206!2d105.78090413033165!3d21.010461217935134!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135abaa079a6053%3A0xd2649b7e580e7b4c!2zV0hFWVNIT1AuVk4gLSAzMzYgTEEgVEjDgE5ILCDEkOG7kE5HIMSQQSwgSMOAIE7hu5hJ!5e0!3m2!1svi!2s!4v1675063409705!5m2!1svi!2s" width="200" height="100" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" ></iframe>
                </li>
            </ul>
            </div>

            <div class="sevice">
                <ul>

                    <li>
                        <h3>danh mục</h3>
                    </li>
                    <li>
                        <a href="">  Trang chủ</a>
                    </li>
        
                    <li>
                        <a href="">  Sản phẩm </a>
                    </li>
                    
                    <li>
                        <a href="">  Giới thiệu</a>
                    </li>

                    <li>
                        <a href="">  Tin tức </a>
                    </li>
                    
                    <li>
                        <a href="">  Liên hệ </a>
                    </li>
                    <li>
                        <a href="">Chỉ đường</a>
                    </li>
                </ul>
            </div>

            <div class="info">
                <ul>

                    <li>
                        <h3>Hỗ trợ khách hàng</h3>
                    </li>
                    <li>
                        <a href="">  Trang chủ</a>
                    </li>
        
                    <li>
                        <a href="">  Sản phẩm </a>
                    </li>
                    
                    <li>
                        <a href="">  Giới thiệu</a>
                    </li>

                    <li>
                        <a href="">  Tin tức </a>
                    </li>
                    
                    <li>
                        <a href="">  Liên hệ </a>
                    </li>
                    <li>
                        <a href="">Chỉ đường</a>
                    </li>

                </ul>
            </div>
        </div>
        <div class="contact">
            <ul>
                <li>
                    <h3>Kết nối với dưa leo</h3>
                </li>
                
                <li>
                    <a href="">  Trang chủ</a>
                </li>
    
                <li>
                    <a href="">  Sản phẩm </a>
                </li>
                
                <li>
                    <a href="">  Giới thiệu</a>
                </li>

                <li>
                    <a href="">  Tin tức </a>
                </li>
                
                <li>
                    <a href="">  Liên hệ </a>
                </li>
                <li>
                    <a href="">Chỉ đường</a>
                </li>
              
              </ul>
        </div>

    </footer>

    <!-- <script src="/js/bootstrap.min.js"></script> -->
    <script src="{{ asset('frontend/js/jquery-3.2.1.slim.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery-3.6.2.min.js') }}"></script>
    <script src=""></script>
    <script type="text/javascript" src="{{ asset('frontend/js/slick.min.js') }}"></script>
    <script>
        $('.container_slider').slick({
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            slidesToShow:1,
            cssEase: 'linear',
        });

        $('.product').slick({
                    slidesToScroll: 1,
                    autoplay: true,
                    autoplaySpeed: 2000,
                    slidesToShow:4,
                    cssEase: 'linear',
        });
        $('.list_item').slick({
                    slidesToScroll: 1,
                    autoplay: true,
                    autoplaySpeed: 3000,
                    slidesToShow:4,
                    cssEase: 'linear',
        });
        
    </script>
</body>
</html>