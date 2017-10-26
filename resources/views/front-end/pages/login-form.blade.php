<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
     <!-- Fonts -->
     <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
     <link href="{{ asset('/css/front-end/libs/font-awesome-4.7.0/css/font-awesome.css') }}" rel="stylesheet">
     <!-- Styles libs-->
     <link href="{{ asset('/css/front-end/libs/bootstrap.min.css') }}" rel="stylesheet">
     <!-- Styles customs -->
     <link href="{{ asset('/css/front-end/pages/login-form.css') }}" rel="stylesheet">
</head>
<body>
    <div class="login-form">
        <div class="header-form">           
            <h3><i class="fa fa-lock"></i> Meete:</h3>
        </div>
        <form class="content-form" action="" method="post">
            <div class="email">
                <input type="text" placeholder="Email hoặc username"/>
            </div>
            <div class="password">
                <input type="password" placeholder="Password">
            </div>
            <div class="submit-btn">
                <input type="submit" value="Đăng nhập">
            </div>
            <div class="sign-up-or-forgot text-right">
                <div class="sign-in">
                    <p>Không là thành viên?<a href=""> đăng kí</a></p>
                </div>
                <div class="forgot">
                    <p>Quên <a href="">mật khẩu</a></p>
                </div>
            </div>
        </form>
    </div>
    <!-- Scripts libs--> 
    <script src="{{asset('/js/front-end/libs/jquery-3.1.1.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="{{asset('/js/front-end/libs/bootstrap.min.js')}}"></script>   
    <!-- Scripts custom-->
</body>
</html>
