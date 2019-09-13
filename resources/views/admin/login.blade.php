<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Login</title>

    <!-- Main CSS-->
    <link href="/css/admin/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="/images/admin/logo.png" alt="CoolAdmin">
                            </a>
                        </div>
                        <div class="login-form">
                            <form action="{!! route('admin.login.loginPostAdd') !!}" method="post">
                                {!! csrf_field() !!}
                                <div class="form-group">
                                    <input class="au-input au-input--full" type="email" name="txt_email" placeholder="Email">
                                    <span style="color: red">{!! $errors->first('txt_email') !!}</span>
                                </div>
                                <div class="form-group">
                                    <input class="au-input au-input--full" type="password" name="txt_password" placeholder="Password">
                                    <span style="color: red">{!! $errors->first('txt_password') !!}</span>
                                </div>
                                <div class="login-checkbox">
                                    <label>
                                        <input type="checkbox" name="cbx_remember">Remember Me
                                    </label>
                                    <label>
                                        <a href="#">Forgotten Password?</a>
                                    </label>
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">sign in</button>
                            </form>
                            <div class="register-link">
                                <p>
                                    Don't you have account?
                                    <a href="#">Sign Up Here</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Main JS-->
    <script src="/js/admin/main.js"></script>

</body>

</html>
<!-- end document-->