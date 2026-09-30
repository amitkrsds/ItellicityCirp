<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About Us | {{ config('constant.web_name') ?? 'Claim Bridge' }}</title>
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
                <a href="{{ url('/') }}">Home</a>
                @foreach($categories as $category)
                    <a href="{{ url('category/show', [$category->id]) }}">{{ strtoupper($category->name) }}</a>
                @endforeach
                <a href="{{ url('about-us') }}" class="is-active">About</a>
                <a href="{{ url('contact-us') }}">Contact</a>
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
                        <span>About us</span>
                    </div>
                    <h1>About us</h1>
                </div>
            </div>
        </section>

        <section class="section-shell">
            <div class="container content-layout">
                <div class="content-card">
                    <span class="section-tag">About Us</span>
                    
                    <p>Noida Marketing Private Limited is under Corporate Insolvency Resolution Process (CIRP) in Insolvency &amp; Bankruptcy Code, 2016 vide Hon'ble NCLT Court CP (IB) No. 465/ND/2024 dated 24.04.2026.</p>
                    <p>The Hon'ble NCLT Court has appointed Mr. Manoj Kumar Anand (Registration Number: IBBI/IPA-001/IP-P00084/2017-18/10180) as Resolution Professional to conduct Corporate Insolvency Resolution Process (CIRP) of Corporate Debtor - Noida Marketing Private Limited.</p>
                </div>

                <aside class="info-panel">
                    <span class="section-tag" style="color: rgba(255,255,255,0.7);">Our focus</span>
                    <h3 style="margin: 0 0 18px; font-size: 2rem; letter-spacing: -0.05em;">Built for clarity</h3>
                    <p>We provide a structured platform for stakeholders to access official notices and supporting documents with confidence and speed.</p>
                    <ul>
                        <li>Quick access to category-wise material</li>
                        <li>Secure and organized document workflow</li>
                        <li>Clear communication for creditors and teams</li>
                    </ul>
                </aside>
            </div>
        </section>
    </main>

    <footer class="site-footer">
        <div class="container">
            <div class="footer-inner">
                <div class="footer-links">
                    <a href="{{ url('/') }}">Home</a>
                    <a href="{{ url('about-us') }}">About</a>
                    <a href="{{ url('contact-us') }}">Contact</a>
                    <a href="{{ route('login') }}">Login</a>
                </div>
            </div>
            <div class="copyright">© {{ date('Y') }} {{ config('constant.web_name') ?? 'Claim Bridge' }}. All rights reserved.</div>
        </div>
    </footer>
</body>
</html>
