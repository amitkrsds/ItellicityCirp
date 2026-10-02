<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Us | {{ config('constant.web_name') ?? 'Claim Bridge' }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link href="{{ asset('css/modern-ui.css') }}" rel="stylesheet">
</head>
<body>
    <header class="site-header">
        <div class="container navbar-shell">
            <a class="brand" href="{{ url('/') }}" aria-label="Home">
                <img src="{{ asset('images/logo.png') }}" alt="Intelicity logo" class="brand-logo">
            </a>

            <nav class="nav-links" aria-label="Main navigation">
                <a href="{{ url('/') }}">HOME</a>
                @foreach($categories as $category)
                    <a href="{{ url('category/show', [$category->id]) }}">{{ strtoupper($category->name) }}</a>
                @endforeach
                <a href="{{ url('contact-us') }}" class="is-active">CONTACT</a>
            </nav>

            <button class="nav-toggle" type="button" aria-label="Toggle navigation" aria-expanded="false">
                <i class="fa-solid fa-bars" aria-hidden="true"></i>
            </button>

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
                    <span class="section-tag">Communications</span>
                    <h2 class="section-title">Contact information for the CIRP process</h2>

                    <p>For all communications relating to the Corporate Insolvency Resolution Process (CIRP) of Intellicity Business Park Private Limited, please use the contact details provided below.</p>

                    <div style="margin-top: 24px;">
                        <h3 style="margin: 0 0 12px; color: var(--secondary);">Resolution Professional</h3>
                        <p>
                            <strong>Mr. Manoj Kulshrestha</strong><br>
                            Resolution Professional<br>
                            Intellicity Business Park Private Limited
                        </p>
                        <p>
                            <strong>IBBI Registration No.</strong><br>
                            IBBI/IPA-003/IP-N00005/2016-17/10024
                        </p>
                        <p>
                            <strong>Office Address</strong><br>
                            4F-CS-14, Ansal Plaza Mall, Vaishali,<br>
                            Opp. Dabur, Ghaziabad,<br>
                            Uttar Pradesh – 201010
                        </p>
                        <p>
                            <strong>Process Email</strong><br>
                            <a href="mailto:intellicitycirp@gmail.com">intellicitycirp@gmail.com</a>
                        </p>
                        <p>
                            <strong>Landline Number</strong><br>
                            <a href="tel:+9101204226157">+91 0120 4226157</a>
                        </p>
                        <p>
                            <strong>Office WhatsApp number</strong><br>
                            <a href="https://wa.me/919354853592" target="_blank" rel="noopener noreferrer">+91 93548 53592</a>
                        </p>
                    </div>

                    <div style="margin-top: 32px;">
                        <h3 style="margin: 0 0 12px; color: var(--secondary);">Authorised Representative – Class of Homebuyers</h3>
                        <p>
                            <strong>Mr. Vivek Raheja</strong><br>
                            Authorised Representative<br>
                            Class of Homebuyers
                        </p>
                        <p>
                            <strong>IBBI Registration No.</strong><br>
                            IBBI/IPA-001/IP-P00055/2017-18/10133
                        </p>
                        <p>
                            <strong>Registered Address</strong><br>
                            JD 2C, 2nd Floor, Pitampura,<br>
                            New Delhi, Delhi – 110034
                        </p>
                        <p>
                            <strong>Email</strong><br>
                            <a href="mailto:intellicityar@gmail.com">intellicityar@gmail.com</a>
                        </p>
                    </div>
                </div>

                <aside class="info-panel">
                    <span class="section-tag" style="color: rgba(255,255,255,0.7);">Important communication</span>
                    <h3 class="panel-title">Stakeholder guidance</h3>
                    <p>For matters concerning the CIRP of Intellicity Business Park Private Limited, stakeholders are requested to communicate through the appropriate email address mentioned above.</p>
                    <ul>
                        <li>Use the official process email for CIRP communications.</li>
                        <li>Contact the authorised representative for homebuyer-related coordination.</li>
                        <li>Provide complete details to ensure proper processing of your query.</li>
                    </ul>
                </aside>
            </div>
        </section>
    </main>

    <footer class="site-footer">
        <div class="container">
            <div class="footer-inner">
                <div class="footer-brand">
                    <img src="{{ asset('images/logo.png') }}" alt="Intelicity logo" class="brand-logo brand-logo-footer">
                </div>
                <div class="footer-links">
                    <a href="{{ url('/') }}">HOME</a>
                    <a href="{{ url('contact-us') }}">CONTACT</a>
                    <a href="{{ route('login') }}">LOGIN</a>
                </div>
            </div>
            <div class="copyright">© {{ date('Y') }} {{ config('constant.web_name') ?? 'Claim Bridge' }}. All rights reserved.</div>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var header = document.querySelector('.site-header');
            var navToggle = document.querySelector('.nav-toggle');

            if (header && navToggle) {
                navToggle.addEventListener('click', function () {
                    var isOpen = header.classList.toggle('nav-open');
                    navToggle.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
                });
            }
        });
    </script>
</body>
</html>
