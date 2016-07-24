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
        <style>
            .lg{
                padding: 10px 200px;
            }
        </style>
    </head>
    <body>

        

        <!-- Main -->
            <div id="main" style="margin-left:0">

                <!-- Contact -->
                    <section id="contact" class="four">
                        <div class="container lg">

                            <header>
                                <h2>Login</h2>
                            </header>

                        

                            <form method="post" action="{{action('AuthController@post_login')}}">
                                {{csrf_field()}}
                                <div class="row">
                                    <div class="12u 12u$(mobile)"><input type="email" name="email" placeholder="Email" /></div>
                                    <div class="12u$ 12u$(mobile)"><input type="password" name="password" placeholder="Password" /></div>
                                    <div class="12u$">
                                        <input type="submit" value="Login" />
                                    </div>
                                </div>
                            </form>

                        </div>
                    </section>

            </div>

        

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