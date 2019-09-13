<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hieu Nguyen">
    <meta name="keywords" content="au theme template">
    <meta name="csrf-token" content="{!! csrf_token() !!}">

    <!-- Title Page-->
    <title>news sai gon</title>
    <!-- Main CSS-->
    <link href="/css/app.css" rel="stylesheet" media="all">
    <link href="/css/application/index.css" rel="stylesheet" media="all">
    <link href="/fonts/font-awesome.css" rel="stylesheet" media="all">

</head>

<body>
    <div class="container">
        <div id="section-search" class="row section-search"></div>
        <div class="section-content">
            @yield('content')
        </div>
    </div>

</body>
<!-- Main JS-->
{{--<script src="/js/jquery-3.2.1.min.js"></script>--}}
<script src="/js/app.js"></script>
</html>