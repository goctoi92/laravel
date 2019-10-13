<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Bóng đá 365 - Trang chuyên tin bóng đá 365">
    <meta name="author" content="Hieu Nguyen">
    <meta name="keywords" content="Bóng đá 365,tin bóng đá 365,thể thao việt nam, bóng đá trong nước, ">
    <meta name="csrf-token" content="{!! csrf_token() !!}">

    <!-- Title Page-->
    <title>Bóng đá 365 - Trang chuyên tin bóng đá 365</title>
    <!-- Main CSS-->
    <link href="/css/app.css" rel="stylesheet" media="all">
    <link href="/fonts/font-awesome.css" rel="stylesheet" media="all">

</head>

<body>
    <div class="container">
        <div id="section-menu" class="row section-menu header"></div>
        <div class="section-content">
            @yield('content')
        </div>
    </div>

</body>
<!-- Main JS-->
{{--<script src="/js/jquery-3.2.1.min.js"></script>--}}
<script src="/js/app.js"></script>
<script src="/js/application/menu.js"></script>
<script src="/js/application/index.page.js"></script>
</html>