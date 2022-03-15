<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Claim bridge</title>

    <!-- CSS References -->

    <link rel=" stylesheet " href="{{asset('css/bootstrap.min.css')}} " />


    <link rel="stylesheet " href="{{asset('css/header.css')}} " />

    <link rel="stylesheet " href="{{asset('css/footer.css')}} " />

    <link rel="stylesheet " href="{{asset('css/blog.css')}} " />
    <link rel="stylesheet " href="{{asset('css/common.css')}} " />

    <!-- JS References -->
    <link rel="preconnect " href="https://fonts.googleapis.com ">

    <link rel="preconnect " href="https://fonts.gstatic.com " crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700;800;900&display=swap "

          rel="stylesheet ">

    <!-- Icons References -->

    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet' />

    <link rel="stylesheet" href="../css/style.css">

    <!-- Global site tag (gtag.js) - Google Analytics -->

    <script async src="https://www.googletagmanager.com/gtag/js?id=G-4CKWRFHG3M"></script>

    <script>

        window.dataLayer = window.dataLayer || [];

        function gtag(){dataLayer.push(arguments);}

        gtag('js', new Date());



        gtag('config', 'G-4CKWRFHG3M');

    </script>

</head>

<body>

<!-- Hero Section Starts -->

<section id="hero">

    <header data-aos="fade-down" data-aos-delay="100">

        <div class="container" style="margin-top: -30px;">

            <div class="row d-flex align-items-center">

                <div class="col-sm-2 col-5"> <a href="{{url('/')}}" id="logo" data-tilt> <img src="{{url('../images/logo.png')}}" /> </a> </div>

                <div class="col-sm-6 col-1">

                    <div class="mobileMneu-wrapper">



                    </div>

                </div>

                <div class="col-sm-4 col-6">

                    <ul class="list-inline d-flex  align-items-center justify-content-end" id="headerRight">
                        @if (Route::has('login'))
                            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                @auth
                                    <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                                @else
                                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                                @endauth
                            </div>
                        @endif


                    </ul>

                </div>

            </div>

        </div>

    </header>

    <div class="banner-section">

        <div class="gyde-analytics-holder d-flex align-items-center"> </div>

    </div>

    <div class="girl-overlap">

        <div class="banner-content">

            <div class="container">

                <div class="row d-flex align-items-center">

                    <div class="col-md-12">

                        <div class="banner-content-holder" data-aos="fade-right" data-aos-delay="100">

                            <h1 class="Blogs-heading">Pantel Technologies Private Limited(Under Liquidation)</h1>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<section id="blogs">

    <div class="page-section pb-0 blogs-block">

        <div class="container">

            <div class="col-md-12">
                <div data-ix="fade-in-on-load-2" class="white-contact-form w-form" style="padding-top: 0px; opacity: 1; display: block; transition: opacity 500ms ease 0s;">
                    <h2 class="form-title subtitle">Login here...</h2>
                    <div class="cpage-form">
                        <form name="htmlform" method="post" action="{{ route('login') }}">
                            @csrf
                            <div class="formfield">
                                <input id="email" type="email" placeholder="Enter your email.." class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="formfield">
                                <input id="password" type="password" placeholder="Enter your password.." class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="">
                                <input type="submit" class="btn-send" value="submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Hero Section Ends -->

<!-- Page blogs Section Starts -->



<!-- Page blogs Section end -->

<!-- Start Virtual Data Room Section Starts -->



<!-- Start Virtual Data Room Section end -->

<!-- Footer Starts -->

<footer>

    <div class="container">

        <div class="footer-top" data-aos="fade-up" data-aos-delay="300">

            <div class="row">

                <div class="col-md-3 col-sm-4">

                    <div class="footer-links-block">



                    </div>

                </div>

                <div class="col-md-2 col-sm-4 feature-footer">



                </div>
                <div style="color:white;">powered by @claim-bridge</div>





            </div>

        </div>

    </div>

</footer>
<style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }
</style>

<!-- Footer Ends -->

<!-- JS References -->

</body>

</html>

