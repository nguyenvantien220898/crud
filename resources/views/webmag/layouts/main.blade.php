<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>@yield("title")</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:700%7CNunito:300,600" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="{{ secure_asset("webmag/css/bootstrap.min.css") }}"/>

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="{{ secure_asset("webmag/css/font-awesome.min.css") }}">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="{{ secure_secure_asset("webmag/css/style.css") }}"/>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

<!-- Header -->
@include("webmag.partials.header")
<!-- /Header -->

@yield("content")

<!-- Footer -->
@include("webmag.partials.footer")
<!-- /Footer -->

<!-- jQuery Plugins -->
<script src="{{ secure_asset("webmag/js/jquery.min.js") }}"></script>
<script src="{{ secure_asset("webmag/js/bootstrap.min.js") }}"></script>
<script src="{{ secure_asset("webmag/js/main.js") }}"></script>

</body>
</html>