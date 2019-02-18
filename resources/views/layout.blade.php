<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- favicon icon -->

    <title>АРТ Квартал</title>

    <!-- common css -->
    <link rel="stylesheet" href="/css/front.css">
     <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE9 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="assets/js/html5shiv.js"></script>
    <script src="assets/js/respond.js"></script>
    <![endif]-->

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="/images/logotip.png">

</head>

<body>
 <div class="menu">
 
<ul>  <li> <div class="logo"><img src="{{asset('images/logotip.png')}}"></div></li>
       <li><a href="/">ГЛАВНАЯ</a></li>
       <li><a href="/news">НОВОСТИ</a></li>
       <li><a href="/report">ОТЧЕТЫ</a></li>
       <li><a href="/portfolio">ПОРТФОЛИО</a></li>
       <li><a href="/contact">КОНТАКТЫ</a></li>
   </ul></div>

        @yield('content')
    </div>

<!-- js files -->
<script src="/js/front.js"></script>
<script type="text/javascript" src="/js/slider.js">



</script>
</body>
</html>