<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="{{$description}}">
    <meta name="author" content="Hieu Nguyen">
    <meta name="keywords" content="{{$keyword}}">
    <meta name="csrf-token" content="{!! csrf_token() !!}">
    <link rel="shortcut icon" href="/images/application/icon.png">
    <!-- Title Page-->
    <title>{{$title}}</title>
    <!-- Main CSS-->
    <link href="/css/app.css" rel="stylesheet" media="all">
    <link href="/fonts/font-awesome.css" rel="stylesheet" media="all">

</head>

<body>
    <div class="container">
        <div id="section-menu" class="row section-menu header"></div>
        <div class="section-content row">
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