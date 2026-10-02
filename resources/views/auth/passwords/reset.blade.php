<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Reset Password | {{ config('constant.web_name') ?? 'Claim Bridge' }}</title>
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
            <a href="{{ route('login') }}" class="nav-cta">Back to login</a>
        </div>
    </header>

    <main>
        <section class="section-shell">
            <div class="container auth-shell">
                <div class="form-card auth-card" style="width: min(620px, 100%);">
                    <span class="section-tag">Account security</span>
                    <h1 class="section-title">Create a new password</h1>
                    @include('layouts.flash')

                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf
                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="auth-grid">
                            <div class="field-group">
                                <label for="email">Email address</label>
                                <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="field-group">
                                <label for="password">Password</label>
                                <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="field-group">
                            <label for="password-confirm">Confirm password</label>
                            <input id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password">
                        </div>

                        <div class="form-actions">
                            <button type="submit" class="primary-btn">Reset password</button>
                        </div>
                    </form>
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
