<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{config('constant.web_name') ?? 'Claim Bridge'}}</title>
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
                <a href="{{ url('/') }}" class="is-active">HOME</a>
                @foreach($categories as $category)
                    <a href="{{ url('category/show', [$category->id]) }}">{{ strtoupper($category->name) }}</a>
                @endforeach
                <a href="{{ url('contact-us') }}">CONTACT</a>
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
        <section class="hero-section">
            <div class="hero-banner hero-banner--full hero-banner-image" style="background-image: url('{{ asset('images/updated_bg.png') }}');">
                <div class="hero-copy">
                    <h1>{{ config('constant.web_name') ?? 'Claim Bridge' }}</h1>
                    @if(config('constant.web_cin'))
                        <p class="banner-cin">{{ config('constant.web_cin') }}</p>
                    @endif
                </div>
            </div>
        </section>

        <section id="library" class="section-shell">
            <div class="container">
                <div class="section-heading">
                    <div>
                        <span class="section-tag">Document library</span>
                    </div>
                </div>

                <div class="category-grid">
                    @foreach($categories as $category)
                        @php
                            $allFiles = collect($category->files ?? []);
                            $visibleFiles = $allFiles->take(1);
                            $hiddenFiles = $allFiles->skip(1);
                        @endphp
                        <div class="category-card">
                            <div class="category-card-header">
                                <div class="category-title-frame">
                                    <h3>{{ $category->name }}</h3>
                                </div>
                            </div>

                            <ul class="file-list">
                                @forelse($visibleFiles as $file)
                                    @php $file_name = strlen($file->name) > 72 ? substr($file->name, 0, 72).'...' : $file->name; @endphp
                                    <li>
                                        <a href="{{ route('file.view', ['media' => $file->id]) }}" title="View file" class="file-item-link">
                                            <i class="fa-solid fa-file-pdf file-icon" aria-hidden="true"></i>
                                            <span>{{ $file_name }}</span>
                                        </a>
                                    </li>
                                @empty
                                    <li class="empty-row">
                                        <span>No files uploaded yet</span>
                                    </li>
                                @endforelse

                                @if($hiddenFiles->isNotEmpty())
                                    @foreach($hiddenFiles as $file)
                                        @php $file_name = strlen($file->name) > 72 ? substr($file->name, 0, 72).'...' : $file->name; @endphp
                                        <li class="hidden-file-row hidden-files-{{ $category->id }}" hidden>
                                            <a href="{{ route('file.view', ['media' => $file->id]) }}" title="View file" class="file-item-link">
                                                <i class="fa-solid fa-file-pdf file-icon" aria-hidden="true"></i>
                                                <span>{{ $file_name }}</span>
                                            </a>
                                        </li>
                                    @endforeach
                                @endif
                            </ul>

                            @if($hiddenFiles->isNotEmpty())
                                <div class="category-footer">
                                    <button
                                        type="button"
                                        class="show-more-btn"
                                        data-target="hidden-files-{{ $category->id }}"
                                        aria-expanded="false"
                                    >
                                        Show more
                                    </button>
                                </div>
                            @endif
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
            <div class="footer-services">
                <span class="section-tag" style="color: rgba(255,255,255,0.8);">Services</span>
                <div class="service-links">
                    @foreach($categories as $category)
                        <a href="{{ url('category/show', [$category->id]) }}">{{ $category->name }}</a>
                    @endforeach
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

            document.querySelectorAll('.show-more-btn').forEach(function (button) {
                button.addEventListener('click', function () {
                    var className = this.getAttribute('data-target');
                    var rows = document.querySelectorAll('.' + className);
                    if (!rows.length) return;

                    var shouldShow = rows[0].hasAttribute('hidden');
                    rows.forEach(function (row) {
                        row.hidden = !shouldShow;
                    });

                    this.textContent = shouldShow ? 'Show less' : 'Show more';
                    this.setAttribute('aria-expanded', shouldShow ? 'true' : 'false');
                });
            });
        });
    </script>
</body>
</html>
