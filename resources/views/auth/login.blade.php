<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login | {{ config('constant.web_name') ?? 'Claim Bridge' }}</title>
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
                <a href="{{ url('about-us') }}">ABOUT</a>
                <a href="{{ url('contact-us') }}">CONTACT</a>
            </nav>
            <a href="{{ url('/') }}" class="nav-cta">Back</a>
        </div>
    </header>

    <main>
        <section class="section-shell">
            <div class="container" style="display: grid; place-items: center; min-height: calc(100vh - 120px);">
                <div class="form-card" style="width: min(520px, 100%);">
                    <span class="section-tag">Welcome back</span>
                    <h1 style="margin: 12px 0 20px; font-size: clamp(2rem, 4vw, 2.8rem); color: var(--secondary); letter-spacing: -0.05em;">Login</h1>
                    @include('layouts.flash')
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="field-group">
                            <label for="email">Email address</label>
                            <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="name@example.com" class="@error('email') is-invalid @enderror">
                            @error('email')
                                <span class="invalid-feedback" role="alert" style="display:block; margin-top: 8px; color: #b91c1c; font-size: 0.88rem;">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="field-group">
                            <label for="password">Password</label>
                            <input id="password" type="password" name="password" required autocomplete="current-password" placeholder="Enter your password" class="@error('password') is-invalid @enderror">
                            @error('password')
                                <span class="invalid-feedback" role="alert" style="display:block; margin-top: 8px; color: #b91c1c; font-size: 0.88rem;">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-actions" style="justify-content: space-between; align-items: center;">
                            <label style="display: inline-flex; align-items: center; gap: 8px; color: var(--text-soft); font-size: 0.95rem;">
                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                Remember me
                            </label>
                            <button type="submit" class="primary-btn">Login</button>
                        </div>
                    </form>

                </div>
            </div>
        </section>
    </main>
</body>
</html>

