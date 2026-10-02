<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register | {{ config('constant.web_name') ?? 'Claim Bridge' }}</title>
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
                <a href="{{ url('contact-us') }}">CONTACT</a>
            </nav>

            <button class="nav-toggle" type="button" aria-label="Toggle navigation" aria-expanded="false">
                <i class="fa-solid fa-bars" aria-hidden="true"></i>
            </button>

            <a href="{{ route('login') }}" class="nav-cta">Login</a>
        </div>
    </header>

    <main>
        <section class="section-shell">
            <div class="container auth-shell">
                <div class="form-card auth-card">
                    <span class="section-tag">Create account</span>
                    <h1 class="section-title">Register</h1>
                    @include('layouts.flash')
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="auth-grid">
                            <div class="field-group">
                                <label for="name">Full name</label>
                                <input id="name" type="text" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Your full name" class="@error('name') is-invalid @enderror">
                                @error('name')
                                    <span class="invalid-feedback" role="alert" style="display:block; margin-top: 8px; color: #b91c1c; font-size: 0.88rem;">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="field-group">
                                <label for="email">Email address</label>
                                <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="name@example.com" class="@error('email') is-invalid @enderror">
                                @error('email')
                                    <span class="invalid-feedback" role="alert" style="display:block; margin-top: 8px; color: #b91c1c; font-size: 0.88rem;">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="auth-grid">
                            <div class="field-group">
                                <label for="password">Password</label>
                                <input id="password" type="password" name="password" required autocomplete="new-password" placeholder="Enter password" class="@error('password') is-invalid @enderror">
                                @error('password')
                                    <span class="invalid-feedback" role="alert" style="display:block; margin-top: 8px; color: #b91c1c; font-size: 0.88rem;">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="field-group">
                                <label for="password-confirm">Confirm password</label>
                                <input id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm password">
                            </div>
                        </div>

                        <div class="form-actions" style="justify-content: flex-end;">
                            <button type="submit" class="primary-btn">Register</button>
                        </div>
                    </form>

                    <div class="text-muted" style="margin-top: 22px; text-align: center; font-size: 0.96rem;">
                        Already have an account?
                        <a href="{{ route('login') }}" class="muted-link">Sign in</a>
                    </div>
                </div>
            </div>
        </section>
    </main>

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

