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
                            <a id="account-btn" href="">Đăng nhập</a>
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
        <div class="dropdown-content">
            <form action="" method="" id="form-content" style="display:none">
                <div class="search-input-container container">
                    <div class="row">
                        <div class="col-md-10 col-xs-10 col-sm-10">
                           <input type="text" class="search-input" placeholder="Tìm kiếm theo tên nhà hàng">
                        </div>
                        <div class="col-md-2 col-xs-2 col-sm-2">
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
        <section>
            
        </section>
        <footer></footer>       
        <!-- Scripts libs--> 
        <script src="{{ asset('/js/front-end/libs/jquery-3.1.1.min.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="{{ asset('/js/front-end/libs/bootstrap.min.js') }}"></script>   
        <!-- Scripts custom-->
        <script src="{{ asset('/js/front-end/pages/home.js') }}"></script> 
    </body>
</html>
