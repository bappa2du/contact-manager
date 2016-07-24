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

        @if(Auth::check())
        <!-- Header -->
            <div id="header">

                <div class="top">

                    <!-- Logo -->
                        <div id="logo">
                            <span class="image avatar48"><img src="assets/user/images/avatar.jpg" alt="" /></span>
                            <h1 id="title">Jane Doe</h1>
                            <p>Hyperspace Engineer</p>
                        </div>

                    <!-- Nav -->
                        <nav id="nav">
                            <!--

                                Prologue's nav expects links in one of two formats:

                                1. Hash link (scrolls to a different section within the page)

                                   <li><a href="#foobar" id="foobar-link" class="icon fa-whatever-icon-you-want skel-layers-ignoreHref"><span class="label">Foobar</span></a></li>

                                2. Standard link (sends the user to another page/site)

                                   <li><a href="http://foobar.tld" id="foobar-link" class="icon fa-whatever-icon-you-want"><span class="label">Foobar</span></a></li>

                            -->
                            <ul>
                                <li><a href="#top" id="top-link" class="skel-layers-ignoreHref"><span class="icon fa-home">Intro</span></a></li>
                                <li><a href="#portfolio" id="portfolio-link" class="skel-layers-ignoreHref"><span class="icon fa-th">Portfolio</span></a></li>
                                <li><a href="#about" id="about-link" class="skel-layers-ignoreHref"><span class="icon fa-user">About Me</span></a></li>
                                <li><a href="#contact" id="contact-link" class="skel-layers-ignoreHref"><span class="icon fa-envelope">Contact</span></a></li>
                            </ul>
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
            @endif

        <!-- Main -->
            <div id="main" @if(!Auth::check()) style="margin-left:0" @endif>

                <!-- Intro -->
                    <section id="top" class="one dark cover">
                        <div class="container">

                            <header>
                                <h2 class="alt">Hi! I'm a <strong>Contact Manager</strong> for you<br />
                                with addtional features.</h2>
                                <p>Manage/Organize your contacts efficiently.</p>
                            </header>

                            <footer>
                                <a href="auth/login" class="button scrolly">Sign-in</a>
                            </footer>

                        </div>
                    </section>

                

                <!-- About contact Manager -->
                    <section id="about" class="three">
                        <div class="container">

                            <header>
                                <h2>About Contact Manager</h2>
                            </header>

                            <a href="#" class="image featured"><img src="assets/user/images/pic08.jpg" alt="" /></a>

                            <p>Tincidunt eu elit diam magnis pretium accumsan etiam id urna. Ridiculus
                            ultricies curae quis et rhoncus velit. Lobortis elementum aliquet nec vitae
                            laoreet eget cubilia quam non etiam odio tincidunt montes. Elementum sem
                            parturient nulla quam placerat viverra mauris non cum elit tempus ullamcorper
                            dolor. Libero rutrum ut lacinia donec curae mus vel quisque sociis nec
                            ornare iaculis.</p>

                        </div>
                    </section>

                <!-- Contact -->
                    

            </div>

        <!-- Footer -->
            

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