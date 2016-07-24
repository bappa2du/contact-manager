<!DOCTYPE HTML>
<html>
    <head>
        <base href="/">
        <title>Prologue by HTML5 UP</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
        <link rel="stylesheet" href="assets/user/assets/css/main.css" />
        <!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
        <!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
    </head>
    <body>

        <!-- Header -->
            <div id="header">

                <div class="top">

                    <!-- Logo -->
                        <div id="logo">
                            <span class="image avatar48"><img src="assets/user/images/avatar.jpg" alt="" /></span>
                            <h1 id="title">{{Auth::user()->name}}</h1>
                            <p>{{Auth::user()->email}}</p>
                        </div>

                    <!-- Nav -->
                        <nav id="nav">
                            @include('user.partials.sidebar')
                        </nav>

                </div>

                <div class="bottom">

                    <!-- Social Icons -->
                        <ul class="icons">
                            <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                            <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                            <li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
                            <li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
                            <li><a href="#" class="icon fa-envelope"><span class="label">Email</span></a></li>
                        </ul>

                </div>

            </div>

        <!-- Main -->
            @yield('content')

        

        <!-- Scripts -->
            <script src="assets/user/assets/js/jquery.min.js"></script>
            <script src="assets/user/assets/js/jquery.scrolly.min.js"></script>
            <script src="assets/user/assets/js/jquery.scrollzer.min.js"></script>
            <script src="assets/user/assets/js/skel.min.js"></script>
            <script src="assets/user/assets/js/util.js"></script>
            <!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
            <script src="assets/user/assets/js/main.js"></script>

    </body>
</html>