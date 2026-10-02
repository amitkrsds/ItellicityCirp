<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $category->name }} | {{ config('constant.web_name') ?? 'Claim Bridge' }}</title>
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
                @foreach($categories as $navCategory)
                    <a href="{{ url('category/show', [$navCategory->id]) }}" class="{{ $navCategory->id == $category->id ? 'is-active' : '' }}">{{ strtoupper($navCategory->name) }}</a>
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
        <section class="page-hero">
            <div class="container">
                <div class="page-banner">
                    <div class="breadcrumb">
                        <a href="{{ url('/') }}">Home</a>
                        <span>/</span>
                        <span>{{ $category->name }}</span>
                    </div>
                    <h1>{{ $category->name }}</h1>
                </div>
            </div>
        </section>

        <section class="section-shell">
            <div class="container content-layout">
                <div class="content-card">
                    <span class="section-tag">Category files</span>
                    @php
                        $visibleFiles = $files->take(1);
                        $hiddenFiles = $files->skip(1);
                    @endphp
                    <div class="table-wrap">
                        <table class="data-table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Document name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($visibleFiles as $file)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td class="file-name"><a href="{{ route('file.view', ['media' => $file->id]) }}" style="color: var(--primary-dark); font-weight: 600;">{{ $file->name }}</a></td>
                                        <td><a href="{{ route('file.view', ['media' => $file->id]) }}" class="inline-btn"><i class="fa-solid fa-eye"></i> View</a></td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="3" style="text-align:center; color: var(--text-soft);">No files uploaded in this category yet.</td>
                                    </tr>
                                @endforelse

                                @if($hiddenFiles->isNotEmpty())
                                    @foreach($hiddenFiles as $file)
                                        <tr class="extra-file-row" hidden>
                                            <td>{{ $loop->iteration + $visibleFiles->count() }}</td>
                                            <td class="file-name"><a href="{{ route('file.view', ['media' => $file->id]) }}" style="color: var(--primary-dark); font-weight: 600;">{{ $file->name }}</a></td>
                                            <td><a href="{{ route('file.view', ['media' => $file->id]) }}" class="inline-btn"><i class="fa-solid fa-eye"></i> View</a></td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>

                    @if($hiddenFiles->isNotEmpty())
                        <div class="category-footer" style="margin-top: 18px;">
                            <button type="button" class="show-more-btn" data-target="extra-file-row">Show more</button>
                        </div>
                    @endif
                </div>

                <aside class="info-panel">
                    <span class="section-tag" style="color: rgba(255,255,255,0.7);">Overview</span>
                    <h3 class="panel-title">{{ $category->name }}</h3>
                    <p>Browse the available documents and downloads for this section.</p>
                    <ul>
                        <li>{{ count($files) }} file(s) available</li>
                        @php
                            $lastUploaded = $files->max('updated_at');
                        @endphp
                        @if($lastUploaded)
                            <li>Last uploaded: {{ \Carbon\Carbon::parse($lastUploaded)->format('d M Y, h:i A') }}</li>
                        @endif
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

            document.querySelectorAll('.show-more-btn').forEach(function (button) {
                button.addEventListener('click', function () {
                    var selector = this.getAttribute('data-target');
                    var rows = document.querySelectorAll('.' + selector);
                    rows.forEach(function (row) {
                        var isHidden = row.hasAttribute('hidden');
                        row.hidden = !isHidden;
                    });
                    this.textContent = this.textContent === 'Show more' ? 'Show less' : 'Show more';
                });
            });
        });
    </script>
</body>
</html>
