<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ isset($editCategory) ? 'Edit Category' : 'Add Category' }} | {{ config('constant.web_name') ?? 'Claim Bridge' }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
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
                        <span>{{ isset($editCategory) ? 'Edit category' : 'Add category' }}</span>
                    </div>
                    <h1>{{ isset($editCategory) ? 'Edit category' : 'Add category' }}</h1>
                </div>
            </div>
        </section>

        <section class="section-shell">
            <div class="container">
                <div class="form-card">
                    <span class="section-tag">{{ isset($editCategory) ? 'Update an existing section' : 'Create a new section' }}</span>
                    <h2 style="margin: 0 0 18px; font-size: clamp(2rem, 3vw, 2.6rem); color: var(--secondary); letter-spacing: -0.05em;">{{ isset($editCategory) ? 'Edit category' : 'Add category' }}</h2>
                    @include('layouts.flash')
                    <form action="{{ isset($editCategory) ? url('category-update', [$editCategory->id]) : url('add-category') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @if(isset($editCategory))
                            @method('put')
                        @endif
                        <div class="form-grid">
                            <div class="field-group">
                                <label for="name">Category name</label>
                                <input type="text" id="name" name="name" value="{{ old('name', $editCategory->name ?? '') }}" placeholder="Enter category name..." required>
                            </div>
                            <div class="form-actions">
                                <button type="submit" class="primary-btn">{{ isset($editCategory) ? 'Update category' : 'Save category' }}</button>
                                <a href="{{ url('/home') }}" class="ghost-btn">Back to dashboard</a>
                            </div>
                        </div>
                    </form>
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
</body>
</html>

