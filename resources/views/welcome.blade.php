<!DOCTYPE html>
<html lang="en">
<head>

    <title>Claim bridge</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css1/bootstrap.min.css" rel="stylesheet">
    <link href="css1/font-awesome.min.css" rel="stylesheet">
    <link href="css1/style.css" rel="stylesheet">
    <link href="css1/animate.css" rel="stylesheet" type="text/css" media="screen">


</head>
<body>


<div class="main-header">
    <nav class="navbar navbar-inverse ">
        <div class="container">
            <div class="navbar-header">
                <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">

                    <img src="img/bt-logo.png" class="img-responsive">
                </a>
            </div>

            <div class="collapse navbar-collapse js-navbar-collapse">




                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{url('/')}}">HOME</a></li>
                    <li><a href="{{url('about-us')}}">ABOUT US</a></li>
                    @foreach($categories as $category)
                    <li><a href="{{url('category/show',[$category->id])}}">{{strtoupper($category->name)}}</a></li>
                    @endforeach
                    <li><a href="{{url('login')}}">LOGIN</a></li>
                </ul>



            </div><!-- /.nav-collapse -->
        </div>
    </nav>
</div>


<section class="banner-set">

    <div class="container-fluid">
        <div class="row">
            <!-- Carousel -->
            <div id="carousel-example-generic" class="carousel slide easy-up" data-ride="carousel">
                <!-- Indicators -->

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="img/Banner0.png" class="banner-image-height">

                        <!-- Static Header -->
                        <div class="header-text ">
                            <div class="col-md-12 text-center">

                                <h2 class="banner-h2 animated-item-2">{{config('constant.web_name')}}</h2>

                            </div>
                        </div><!-- /header-text -->
                    </div>



                </div>

            </div><!-- /carousel -->
        </div>
    </div>
</section>


<section id="blogs" class="wow  fadeInUp    animated">

    <div class="page-section pb-0 blogs-block">

        <div class="container">
            <div class="row">
                @foreach($categories as $category)
                    <div class="col-md-6">
                        <h3>{{$category->name}}</h3>
                        <table>
                            <tr>
                                <th>#</th>
                                <th>Files</th>
                                <th><i class="fa fa-download"></i></th>
                            </tr>
                            @foreach($category->files as $file)
                                @php $file_name=substr($file->name, 0, 40); @endphp
                                <tr style="overflow: scroll;">
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$file_name.'...'}}
                                    <td>  <a href="{{url('download',[$file->id])}}"><i class="fa fa-download"></i></a></td>

                                </tr>
                            @endforeach



                        </table>
                    </div>
                @endforeach


            </div>
        </div>

    </div>
</section>


<footer id="footer" style="margin-top: 15px;">
    <div class="container">
        <div class="row">


            <!--footer col-->

            <!--footer col-->

        </div>

        <div class="row">


            <div class="col-md-12 text-center">
                <div class="footer-btm" style="color: white;"> <span>©All Rights Reserved © claim-bridge</span> </div>
            </div>
        </div>
    </div>
</footer>


<!--scripts and plugins -->
<!--must need plugin jquery-->
<script src="js/jquery.min.js"></script>
<!--bootstrap js plugin-->
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<!--easing plugin for smooth scroll-->
<script src="js/jquery.easing.1.3.min.js" type="text/javascript"></script>
<!--flex slider plugin-->
<script src="js/jquery.flexslider-min.js" type="text/javascript"></script>

<script src="js/jquery.stellar.min.js" type="text/javascript"></script>
<script src="js/owl.carousel.min.js" type="text/javascript"></script>
<script src="js/jquery.magnific-popup.min.js" type="text/javascript"></script>
<script src="js/custom.js" type="text/javascript"></script>
<!--digit countdown plugin-->
<script src="js/waypoints.min.js"></script>
<script src="js/jquery.counterup.min.js" type="text/javascript"></script>
<script src="js/wow.min.js" type="text/javascript"></script>
<script src="js/header-banner.js"></script>



<script type="text/javascript">
    $(function () {
        $('.easy-up a').bind('click', function (event) {
            var $anchor = $(this);

            $('html, body').stop().animate({
                scrollTop: $($anchor.attr('href')).offset().top
            }, 1500, 'easeInOutExpo');
            /*
            if you don't want to use the easing effects:
            $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
            }, 1000);
            */
            event.preventDefault();
        });
    });
</script>

<!--easy click slider end-->


<script>
    $(document).ready(function(){
        $(".dropdown").hover(
            function() {
                $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideDown("400");
                $(this).toggleClass('open');
            },
            function() {
                $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideUp("400");
                $(this).toggleClass('open');
            }
        );
    });
</script><!--mega dropdown menu--------->





<script>
    $(document).ready(function(){
        $('body').append('<div id="toTop" class="backtotop"><i class="fa fa-angle-up"></i></div>');
        $(window).scroll(function () {
            if ($(this).scrollTop() != 0) {
                $('#toTop').fadeIn();
            } else {
                $('#toTop').fadeOut();
            }
        });
        $('#toTop').click(function(){
            $("html, body").animate({ scrollTop: 0 }, 600);
            return false;
        });
    });

</script><!--back to top button-->

<style>
</style>


<div class="modal fade benosoft" id="login-pop" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                <h3 class="modal-title text-center" id="lineModalLabel">Login to site.com</h3>
                <p class="text-center">We are keen to know about your technology needs.</p>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6 padding-zero">
                        <div class="well">
                            <form id="loginForm" method="POST" action="/login/" novalidate>
                                <div class="form-group">
                                    <label for="username" class="control-label" style="color: #000;">Username</label>
                                    <input type="text" class="form-control" id="username" name="username" value="" required="" title="Please enter you username" placeholder="example@gmail.com">
                                    <span class="help-block"></span>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="control-label" style="color: #000;">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" value="" required="" title="Please enter your password">
                                    <span class="help-block"></span>
                                </div>
                                <div id="loginErrorMsg" class="alert alert-error hide">Wrong username og password</div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" id="remember"> Remember login
                                    </label>
                                    <p class="help-block">(if this is a private computer)</p>
                                </div>
                                <button type="submit" class="btn btn-success btn-block">Login</button>
                                <a href="/forgot/" class="btn btn-default btn-block">Help to login</a>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <p class="lead">Register now for <span class="text-success">FREE</span></p>
                        <ul class="list-unstyled" style="line-height: 2">
                            <li><span class="fa fa-check text-success"></span> See all your orders</li>
                            <li><span class="fa fa-check text-success"></span> Fast re-order</li>
                            <li><span class="fa fa-check text-success"></span> Save your favorites</li>
                            <li><span class="fa fa-check text-success"></span> Fast checkout</li>
                            <li><span class="fa fa-check text-success"></span> Get a gift <small>(only new customers)</small></li>
                            <li><a href="/read-more/"><u>Read more</u></a></li>
                        </ul>
                        <p><a data-toggle="modal" data-target="#register-pop" class="btn btn-info btn-block">Yes please, register now!</a></p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="modal fade benosoft" id="register-pop" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                <h3 class="modal-title text-center" id="lineModalLabel">Register to site.com</h3>
                <p class="text-center">We are keen to know about your technology needs.</p>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-xs-12 padding-zero">
                        <div class="well">
                            <form id="loginForm" method="POST" action="/login/" novalidate>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="" name="" value="" required="" title="Please enter you Full Name" placeholder="Please enter you Full Name">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="" name="" value="" required="" title="Please enter your Email ID" placeholder="Please enter you Email ID">
                                </div>

                                <div class="form-group">
                                    <input type="password" class="form-control" id="" name="" value="" required="" title="Please enter your password" placeholder="password">
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" id="" name="" value="" required="" title="Please enter your Email ID" placeholder="Phone Noumber">
                                        </div>

                                        <div class="col-md-6">
                                            <select class="form-control" id="status" name="status" required>
                                                <option>Country</option>
                                                <option>xxx</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>


                                <div id="loginErrorMsg" class="alert alert-error hide">Wrong username og password</div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" id="remember"> Remember login
                                    </label>
                                    <p class="help-block">(if this is a private computer)</p>
                                </div>
                                <button type="submit" class="btn btn-success btn-block">Register</button>
                            </form>

                        </div>

                        <p class="divider-text">
                            <span class="bg-light">OR</span>
                        </p>
                        <p>
                            <a href="" class="btn btn-block btn-twitter"> <i class="fa fa-twitter"></i> &nbsp; Login via Twitter</a>
                            <a href="" class="btn btn-block btn-facebook"> <i class="fa fa-facebook-f"></i> &nbsp; Login via facebook</a>
                        </p>

                    </div>

                </div>
            </div>

        </div>
    </div>
</div>
</body>
</html>
