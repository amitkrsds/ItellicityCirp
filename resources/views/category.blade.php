<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Manage categories | {{ config('constant.web_name') ?? 'Claim Bridge' }}</title>
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
                @foreach($categories as $categoryItem)
                    <a href="{{ url('category/show', [$categoryItem->id]) }}">{{ strtoupper($categoryItem->name) }}</a>
                @endforeach
                <a href="{{ url('contact-us') }}">CONTACT</a>
            </nav>

            <button class="nav-toggle" type="button" aria-label="Toggle navigation" aria-expanded="false">
                <i class="fa-solid fa-bars" aria-hidden="true"></i>
            </button>

            <a href="{{ url('/home') }}" class="nav-cta">Dashboard</a>
        </div>
    </header>

    <main>
        <section class="page-hero">
            <div class="container">
                <div class="page-banner">
                    <div class="breadcrumb">
                        <a href="{{ url('/home') }}">Dashboard</a>
                        <span>/</span>
                        <span>Categories</span>
                    </div>
                    <h1>Categories</h1>
                </div>
            </div>
        </section>

        <section class="section-shell">
            <div class="container">
                <div class="list-card">
                    <div class="form-actions">
                        <a href="{{ url('category-create') }}" class="primary-btn">Add category</a>
                        <a href="{{ url('/home') }}" class="ghost-btn">Back to dashboard</a>
                    </div>
                    @include('layouts.flash')

                    @foreach($categories as $categoryItem)
                        <div class="list-row">
                            <div>
                                <strong>{{ $categoryItem->name }}</strong>
                            </div>
                            <div class="form-actions">
                                <a href="{{ url('category/show', [$categoryItem->id]) }}" class="inline-btn">Open</a>
                                <a href="{{ url('category-edit', [$categoryItem->id]) }}" class="secondary-btn">Edit</a>
                                <form method="post" onsubmit="return confirm('Do you really want to delete this category?');" action="{{ url('delete-category', [$categoryItem->id]) }}" style="display: inline;">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="danger-btn">Delete</button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                </div>
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
