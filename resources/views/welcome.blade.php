<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{config('constant.web_name') ?? 'Claim Bridge'}}</title>
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
                <a href="{{ url('/') }}" class="is-active">HOME</a>
                @foreach($categories as $category)
                    <a href="{{ url('category/show', [$category->id]) }}">{{ strtoupper($category->name) }}</a>
                @endforeach
                <a href="{{ url('contact-us') }}">CONTACT</a>
            </nav>

            @auth
                <a href="{{ url('/home') }}" class="nav-cta">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="nav-cta">Login</a>
            @endauth
        </div>
    </header>

    <main>
        <section class="hero-section">
            <div class="container hero-grid hero-banner hero-banner-image" style="background-image: url('{{ asset('images/updated_bg.png') }}');">
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
                            $visibleFiles = $allFiles->slice(0, 1);
                            $hiddenFiles = $allFiles->slice(1);
                        @endphp
                        <div class="category-card">
                            <div class="category-card-header">
                                <div class="category-title-frame">
                                    <h3>{{ $category->name }}</h3>
                                </div>
                                <span class="file-chip">
                                    @php
                                        $totalFiles = count($category->files ?? []);
                                    @endphp
                                    {{ $totalFiles > 1 ? '1 of ' . $totalFiles . ' files' : $totalFiles . ' file' }}
                                </span>
                            </div>

                            <ul class="file-list">
                                @forelse($visibleFiles as $file)
                                    @php $file_name = strlen($file->name) > 38 ? substr($file->name, 0, 38).'...' : $file->name; @endphp
                                    <li>
                                        <a href="{{ route('file.view', ['media' => $file->id]) }}" title="View file" style="display: flex; align-items: center; justify-content: space-between; gap: 12px; width: 100%;">
                                            <span>{{ $file_name }}</span>
                                            <i class="fa-solid fa-eye" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                @empty
                                    <li class="empty-row">
                                        <span>No files uploaded yet</span>
                                    </li>
                                @endforelse
                            </ul>

                            @if($hiddenFiles->isNotEmpty())
                                <ul class="file-list file-list-extra" id="files-{{ $category->id }}" style="display: none;">
                                    @foreach($hiddenFiles as $file)
                                        @php $file_name = strlen($file->name) > 38 ? substr($file->name, 0, 38).'...' : $file->name; @endphp
                                        <li>
                                            <a href="{{ route('file.view', ['media' => $file->id]) }}" title="View file" style="display: flex; align-items: center; justify-content: space-between; gap: 12px; width: 100%;">
                                                <span>{{ $file_name }}</span>
                                                <i class="fa-solid fa-eye" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            @endif

                            @if($hiddenFiles->isNotEmpty())
                                <div class="category-footer">
                                    <button type="button" class="show-more-btn" data-target="files-{{ $category->id }}">Show more</button>
                                    <a href="{{ url('category/show', [$category->id]) }}" class="inline-btn">Open category</a>
                                </div>
                            @else
                                <div class="category-footer">
                                    <a href="{{ url('category/show', [$category->id]) }}" class="inline-btn">Open category</a>
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
            <div class="copyright">© {{ date('Y') }} {{ config('constant.web_name') ?? 'Claim Bridge' }}. All rights reserved.</div>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            document.querySelectorAll('.show-more-btn').forEach(function (button) {
                button.addEventListener('click', function () {
                    var targetId = this.getAttribute('data-target');
                    var target = document.getElementById(targetId);
                    if (!target) return;

                    var isCurrentlyHidden = target.style.display === 'none';
                    target.style.display = isCurrentlyHidden ? 'block' : 'none';
                    this.textContent = isCurrentlyHidden ? 'Show less' : 'Show more';
                });
            });
        });
    </script>
</body>
</html>
