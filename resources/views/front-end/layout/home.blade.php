<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Home</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="{{ asset('/css/front-end/libs/font-awesome-4.7.0/css/font-awesome.css') }}" rel="stylesheet">
        <!-- Styles libs-->
        <link href="{{ asset('/css/front-end/libs/bootstrap.min.css') }}" rel="stylesheet">
        <!-- Styles customs -->
        <link href="{{ asset('/css/front-end/pages/home.css') }}" rel="stylesheet">
    
    </head>
    <body>
        <header id="header">
            <div class="container">
                <a href="" class="logo">
                    <image src="{{ asset('/imgs/front-end/logo.png')}}">
                </a>
                <div class="nav">
                    <ul>
                        <li class="search">
                            <a id="search-header" class="dropdownOpen">
                                <i class="fa fa-search"></i>
                            </a>
                        </li>
                        <li class="login">
                            <a id="account-btn" href="{{url('/login')}}">Đăng nhập</a>
                        </li>
                        <li>
                            <a href="">Dành cho nhà hàng</a>
                        </li>
                        <li>
                            <a href="">Đổi thành phố</a>
                        </li>
                    </ul>
                </div>
                <a id="hambugBtn" class="dropdownOpen hambuger">
                    <i class="fa fa-bars"></i>
                </a>
                <a class="dropdownOpen search-mobile">
                    <i class="fa fa-search"></i>
                </a>
            </div>
        </header>
        <div class="dropdown-content" style="z-index:4;">
            <form action="" method="" id="form-content" style="display:none">
                <div class="search-input-container container">
                    <div class="row">
                        <div class="col-md-10 col-xs-10 col-sm-10 custom-padding-col-bootstrap">
                           <input type="text" class="search-input" placeholder="Tìm kiếm theo tên nhà hàng">
                        </div>
                        <div class="col-md-2 col-xs-2 col-sm-2 custom-padding-col-bootstrap" style="
                        background-color: #fff;">
                           <input type="submit" class="search-button" value="TÌM KIẾM">
                        </div>
                    </div>
                </div>
            </form>
            <nav class="menu-mobile center" id="menu-mobile" style="display:none">
                <ul class="text-center">
                    <li>
                        <a href="">Đăng nhập</a>
                    </li>
                    <li>
                        <a href="">Dành cho nhà hàng</a>
                    </li>
                    <li>
                    <a href="">Đổi thành phố</a>
                    </li>
                </ul>    
            </nav>
        </div>
        <div>
           <div class="cover" style="background-image:linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
                                     url(https://static.pexels.com/photos/46239/salmon-dish-food-meal-46239.jpeg);
                                    background-size: cover;
                                    background-position: center;
                                    background-attachment: fixed;">
                <div class="content-cover">
                    <div class="content">
                        <h1>Lấy những ưu đãi ăn uống tốt nhất</h1>
                        <h1>và</h1>
                        <h3>Không cần thanh toàn trước</h3>
                    </div>
                    <div class="search-box">
                        <div class="search-box-inner">
                            <input type="text" placeholder="Tìm kiếm theo nhà hàng"></input>
                            <a href="" id="btnSearchHome" class="btn-search">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="footer-cover">
                </div>
           </div> 
        </div>

        <div>
            <div class="content-page">
                <div class="container">
                    <div class="slider-menu">
                        <div class="slider-inner">
                            <div class="row">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                    <div class="type-item" style="background-image: url(https://static.pexels.com/photos/46239/salmon-dish-food-meal-46239.jpeg)">
                                    </div>
                                    <div class="type-name text-center">
                                       <a href=""><h5>QUÁN ĂN</h5></a>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                    <div class="type-item" style="background-image: url(https://static.pexels.com/photos/46239/salmon-dish-food-meal-46239.jpeg)">
                                    </div>
                                    <div class="type-name text-center">
                                       <a href=""><h5>QUÁN ĂN</h5></a>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                    <div class="type-item" style="background-image: url(https://static.pexels.com/photos/46239/salmon-dish-food-meal-46239.jpeg)">
                                    </div>
                                    <div class="type-name text-center">
                                       <a href=""><h5>QUÁN ĂN</h5></a>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                    <div class="type-item" style="background-image: url(https://static.pexels.com/photos/46239/salmon-dish-food-meal-46239.jpeg)">
                                    </div>
                                    <div class="type-name text-center">
                                       <a href=""><h5>QUÁN ĂN</h5></a>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                    <div class="type-item" style="background-image: url(https://static.pexels.com/photos/46239/salmon-dish-food-meal-46239.jpeg)">
                                    </div>
                                    <div class="type-name text-center">
                                       <a href=""><h5>QUÁN ĂN</h5></a>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                    <div class="type-item" style="background-image: url(https://static.pexels.com/photos/46239/salmon-dish-food-meal-46239.jpeg)">
                                    </div>
                                    <div class="type-name text-center">
                                       <a href=""><h5>QUÁN ĂN</h5></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="list-item">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <div class="item">
                                    <a href=""><div class="image-item" style="background-image: url(https://static.pexels.com/photos/46239/salmon-dish-food-meal-46239.jpeg);
                                                                   background-size:cover;
                                                                   background-position:center;">
                                        
                                        <div class="address">
                                            <a href="">
                                                <p style="margin:0; padding:0;">Bún đậu mắm tôm</p>
                                                <small>Số 124 Đại La, Hà Nội</small>                                               
                                            </a>
                                        </div>
                                        <div class="view-more">
                                            <a href=""><button type="button">Xem thêm</button></a>
                                        </div>
                                    </div></a>
                                    <div class="sale">
                                            <button type="button">-30%</button>
                                    </div>
                                    <div class="decription-item">
                                        <a href="" ><div class = "title-description">
                                            <h4>Bún đậu đầy đủ</h4>
                                        </div></a>
                                        <a href="" ><div class ="content-description">
                                            <p>Bún, nem, chả cốm, đậu, mắm tôm , nau thơm, dưa leo</p>
                                        </div></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <div class="item">
                                    <a href=""><div class="image-item" style="background-image: url(https://static.pexels.com/photos/46239/salmon-dish-food-meal-46239.jpeg);
                                                                   background-size:cover;
                                                                   background-position:center;">
                                        
                                        <div class="address">
                                            <a href="">
                                                <p style="margin:0; padding:0;">Bún đậu mắm tôm</p>
                                                <small>Số 124 Đại La, Hà Nội</small>                                               
                                            </a>
                                        </div>
                                        <div class="view-more">
                                            <a href=""><button type="button">Xem thêm</button></a>
                                        </div>
                                    </div></a>
                                    <div class="sale">
                                            <button type="button">-30%</button>
                                    </div>
                                    <div class="decription-item">
                                        <a href="" ><div class = "title-description">
                                            <h4>Bún đậu đầy đủ</h4>
                                        </div></a>
                                        <a href="" ><div class ="content-description">
                                            <p>Bún, nem, chả cốm, đậu, mắm tôm , nau thơm, dưa leo</p>
                                        </div></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <div class="item">
                                    <a href=""><div class="image-item" style="background-image: url(https://static.pexels.com/photos/46239/salmon-dish-food-meal-46239.jpeg);
                                                                   background-size:cover;
                                                                   background-position:center;">
                                        
                                        <div class="address">
                                            <a href="">
                                                <p style="margin:0; padding:0;">Bún đậu mắm tôm</p>
                                                <small>Số 124 Đại La, Hà Nội</small>                                               
                                            </a>
                                        </div>
                                        <div class="view-more">
                                            <a href=""><button type="button">Xem thêm</button></a>
                                        </div>
                                    </div></a>
                                    <div class="sale">
                                            <button type="button">-30%</button>
                                    </div>
                                    <div class="decription-item">
                                        <a href="" ><div class = "title-description">
                                            <h4>Bún đậu đầy đủ</h4>
                                        </div></a>
                                        <a href="" ><div class ="content-description">
                                            <p>Bún, nem, chả cốm, đậu, mắm tôm , nau thơm, dưa leo</p>
                                        </div></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row"  style="margin-top:40px;">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <div class="item">
                                    <a href=""><div class="image-item" style="background-image: url(https://static.pexels.com/photos/46239/salmon-dish-food-meal-46239.jpeg);
                                                                   background-size:cover;
                                                                   background-position:center;">
                                        
                                        <div class="address">
                                            <a href="">
                                                <p style="margin:0; padding:0;">Bún đậu mắm tôm</p>
                                                <small>Số 124 Đại La, Hà Nội</small>                                               
                                            </a>
                                        </div>
                                        <div class="view-more">
                                            <a href=""><button type="button">Xem thêm</button></a>
                                        </div>
                                    </div></a>
                                    <div class="sale">
                                            <button type="button">-30%</button>
                                    </div>
                                    <div class="decription-item">
                                        <a href="" ><div class = "title-description">
                                            <h4>Bún đậu đầy đủ</h4>
                                        </div></a>
                                        <a href="" ><div class ="content-description">
                                            <p>Bún, nem, chả cốm, đậu, mắm tôm , nau thơm, dưa leo</p>
                                        </div></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <div class="item">
                                    <a href=""><div class="image-item" style="background-image: url(https://static.pexels.com/photos/46239/salmon-dish-food-meal-46239.jpeg);
                                                                   background-size:cover;
                                                                   background-position:center;">
                                        
                                        <div class="address">
                                            <a href="">
                                                <p style="margin:0; padding:0;">Bún đậu mắm tôm</p>
                                                <small>Số 124 Đại La, Hà Nội</small>                                               
                                            </a>
                                        </div>
                                        <div class="view-more">
                                            <a href=""><button type="button">Xem thêm</button></a>
                                        </div>
                                    </div></a>
                                    <div class="sale">
                                            <button type="button">-30%</button>
                                    </div>
                                    <div class="decription-item">
                                        <a href="" ><div class = "title-description">
                                            <h4>Bún đậu đầy đủ</h4>
                                        </div></a>
                                        <a href="" ><div class ="content-description">
                                            <p>Bún, nem, chả cốm, đậu, mắm tôm , nau thơm, dưa leo</p>
                                        </div></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <div class="item">
                                    <a href=""><div class="image-item" style="background-image: url(https://static.pexels.com/photos/46239/salmon-dish-food-meal-46239.jpeg);
                                                                   background-size:cover;
                                                                   background-position:center;">
                                        
                                        <div class="address">
                                            <a href="">
                                                <p style="margin:0; padding:0;">Bún đậu mắm tôm</p>
                                                <small>Số 124 Đại La, Hà Nội</small>                                               
                                            </a>
                                        </div>
                                        <div class="view-more">
                                            <a href=""><button type="button">Xem thêm</button></a>
                                        </div>
                                    </div></a>
                                    <div class="sale">
                                            <button type="button">-30%</button>
                                    </div>
                                    <div class="decription-item">
                                        <a href="" ><div class = "title-description">
                                            <h4>Bún đậu đầy đủ</h4>
                                        </div></a>
                                        <a href="" ><div class ="content-description">
                                            <p>Bún, nem, chả cốm, đậu, mắm tôm , nau thơm, dưa leo</p>
                                        </div></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin-top:40px;">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <div class="item">
                                    <a href=""><div class="image-item" style="background-image: url(https://static.pexels.com/photos/46239/salmon-dish-food-meal-46239.jpeg);
                                                                   background-size:cover;
                                                                   background-position:center;">
                                        
                                        <div class="address">
                                            <a href="">
                                                <p style="margin:0; padding:0;">Bún đậu mắm tôm</p>
                                                <small>Số 124 Đại La, Hà Nội</small>                                               
                                            </a>
                                        </div>
                                        <div class="view-more">
                                            <a href=""><button type="button">Xem thêm</button></a>
                                        </div>
                                    </div></a>
                                    <div class="sale">
                                            <button type="button">-30%</button>
                                    </div>
                                    <div class="decription-item">
                                        <a href="" ><div class = "title-description">
                                            <h4>Bún đậu đầy đủ</h4>
                                        </div></a>
                                        <a href="" ><div class ="content-description">
                                            <p>Bún, nem, chả cốm, đậu, mắm tôm , nau thơm, dưa leo</p>
                                        </div></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <div class="item">
                                    <a href=""><div class="image-item" style="background-image: url(https://static.pexels.com/photos/46239/salmon-dish-food-meal-46239.jpeg);
                                                                   background-size:cover;
                                                                   background-position:center;">
                                        
                                        <div class="address">
                                            <a href="">
                                                <p style="margin:0; padding:0;">Bún đậu mắm tôm</p>
                                                <small>Số 124 Đại La, Hà Nội</small>                                               
                                            </a>
                                        </div>
                                        <div class="view-more">
                                            <a href=""><button type="button">Xem thêm</button></a>
                                        </div>
                                    </div></a>
                                    <div class="sale">
                                            <button type="button">-30%</button>
                                    </div>
                                    <div class="decription-item">
                                        <a href="" ><div class = "title-description">
                                            <h4>Bún đậu đầy đủ</h4>
                                        </div></a>
                                        <a href="" ><div class ="content-description">
                                            <p>Bún, nem, chả cốm, đậu, mắm tôm , nau thơm, dưa leo</p>
                                        </div></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <div class="item">
                                    <a href=""><div class="image-item" style="background-image: url(https://static.pexels.com/photos/46239/salmon-dish-food-meal-46239.jpeg);
                                                                   background-size:cover;
                                                                   background-position:center;">
                                        
                                        <div class="address">
                                            <a href="">
                                                <p style="margin:0; padding:0;">Bún đậu mắm tôm</p>
                                                <small>Số 124 Đại La, Hà Nội</small>                                               
                                            </a>
                                        </div>
                                        <div class="view-more">
                                            <a href=""><button type="button">Xem thêm</button></a>
                                        </div>
                                    </div></a>
                                    <div class="sale">
                                            <button type="button">-30%</button>
                                    </div>
                                    <div class="decription-item">
                                        <a href="" ><div class = "title-description">
                                            <h4>Bún đậu đầy đủ</h4>
                                        </div></a>
                                        <a href="" ><div class ="content-description">
                                            <p>Bún, nem, chả cốm, đậu, mắm tôm , nau thơm, dưa leo</p>
                                        </div></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </div>    
        <footer>
            <div class ="container">
                <div class ="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <p class="title">Góp ý cho chúng tôi</p>
                        <p>Gửi email cho chúng tôi tại<a href="">nguyenvanthanh2287@gmail.com</a></p>
                        <p>Hoặc theo dõi chúng tôi tại:</p>
                        <div class="follow">
                            <a href="" class="follow-facebook"><img src="{{asset('/imgs/front-end/facebook.png')}}"></img></a>
                            <a href="" class="follow-instagram"><img src="{{asset('/imgs/front-end/instagram.png')}}"></img></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <p class="title">Liên hệ</p>
                        <p class="title" style="margin-bottom:0px;">Công ty công nghệ NVT</p>
                        <p>Thành lập 10/10/2017</p>
                        <p class="title" style="margin-bottom:0px;">Hotline</p>
                        <p><a href="">01665819451</a> Gặp anh Thanh</p>
                    </div>
                </div>
                <p class="text-center" style="margin-top:20px;">copyright @ 2016 <a href="">www.meete.co </a>all rights reserved</p>
            </div>
        </footer>       
        <!-- Scripts libs--> 
        <script src="{{ asset('/js/front-end/libs/jquery-3.1.1.min.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="{{ asset('/js/front-end/libs/bootstrap.min.js') }}"></script>   
        <!-- Scripts custom-->
        <script src="{{ asset('/js/front-end/pages/home.js') }}"></script> 
    </body>
</html>
