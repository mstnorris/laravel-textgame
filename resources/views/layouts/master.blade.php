<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laravel Text Game</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/css/font-awesome.css">

    <style>
    html,
    body {
        height: 100%;
    }

    body {
        margin: 0;
        padding: 0;
        width: 100%;
        display: table;
        font-weight: 300;
        font-family: 'Open Sans' sans-serif;
        background-color: #eceff1;
        color: #607d8b;
    }
    </style>

    @yield('header')

</head>
<body>

    @yield('content')

    <script src="/js/jquery.js"></script>
    <script src="/js/bootstrap.js"></script>
    <script src="/js/vue.js"></script>
    <script src="/js/vue-resource.js"></script>

    @yield('footer')

</body>
</html>