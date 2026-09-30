<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Us | {{ config('constant.web_name') ?? 'Claim Bridge' }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link href="{{ asset('css/modern-ui.css') }}" rel="stylesheet">
</head>
<body>
    <header class="site-header">
        <div class="container navbar-shell">
            <nav class="nav-links" aria-label="Main navigation">
                <a href="{{ url('/') }}">HOME</a>
                @foreach($categories as $category)
                    <a href="{{ url('category/show', [$category->id]) }}">{{ strtoupper($category->name) }}</a>
                @endforeach
                <a href="{{ url('about-us') }}">ABOUT</a>
                <a href="{{ url('contact-us') }}" class="is-active">CONTACT</a>
            </nav>

            @auth
                <a href="{{ url('/home') }}" class="nav-cta">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="nav-cta">Login</a>
            @endauth
        </div>
    </header>

    <main>
        <section class="page-hero">
            <div class="container">
                <div class="page-banner">
                    <div class="breadcrumb">
                        <a href="{{ url('/') }}">Home</a>
                        <span>/</span>
                        <span>Contact us</span>
                    </div>
                    <h1>Contact us</h1>
                </div>
            </div>
        </section>

        <section class="section-shell">
            <div class="container content-layout">
                <div class="content-card">
                   
                    <div style="margin-top: 24px;">
                        <h3 style="margin: 0 0 12px; color: var(--secondary);">Resolution Professional</h3>
                        <p>
                            <strong>MANOJ KUMAR ANAND</strong><br>
                            Resolution Professional
                        </p>
                        <p>
                            <strong>Regd. Address</strong><br>
                            Parsvnath Tower Near Shahdara Metro Station,<br>
                            Shahdara, East Delhi, Delhi, India, 110032
                        </p>
                        <p>
                            <strong>Correspondence Address</strong><br>
                            Parsvnath Tower Near Shahdara Metro Station,<br>
                            Shahdara, East Delhi, Delhi, India, 110032
                        </p>
                        <p>
                            <strong>Email</strong><br>
                            <a href="mailto:noidamarketingcirp@gmail.com">noidamarketingcirp@gmail.com</a>
                        </p>
                        <p>
                            <strong>Tel.</strong><br>
                            <a href="tel:01145641903">011-45641903</a>, <a href="tel:01145051903">011-45051903</a>
                        </p>
                        <p>
                            <strong>Note</strong><br>
                            RP Team available at Delhi office: 2, Community Centre, 3rd Floor, (Near PVR/McDonald's), Naraina, New Delhi-110028<br>
                            Monday to Saturday - Times 11.00 AM to 5.00 PM
                        </p>
                    </div>
                </div>

                <aside class="info-panel">
                    <span class="section-tag" style="color: rgba(255,255,255,0.7);">Important communication</span>
                    <h3 style="margin: 0 0 18px; font-size: 2rem; letter-spacing: -0.05em;">Stakeholder guidance</h3>
                    <p>All stakeholders are requested to communicate with the Resolution Professional through the official email address and contact numbers provided above.</p>
                    <ul>
                        <li>Use the official email for all CIRP-related communication.</li>
                        <li>Contact the RP team during office hours: Monday to Saturday, 11:00 AM to 5:00 PM.</li>
                        <li>Share complete details to ensure prompt processing of your query.</li>
                    </ul>
                </aside>
            </div>
        </section>
    </main>

    <footer class="site-footer">
        <div class="container">
            <div class="footer-inner">
                <div class="footer-links">
                    <a href="{{ url('/') }}">HOME</a>
                    <a href="{{ url('about-us') }}">ABOUT</a>
                    <a href="{{ url('contact-us') }}">CONTACT</a>
                    <a href="{{ route('login') }}">LOGIN</a>
                </div>
            </div>
            <div class="copyright">© {{ date('Y') }} {{ config('constant.web_name') ?? 'Claim Bridge' }}. All rights reserved.</div>
        </div>
    </footer>
</body>
</html>
