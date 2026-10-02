
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard | {{ config('constant.web_name') ?? 'Claim Bridge' }}</title>
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

            <a href="{{ route('logout') }}" class="nav-cta" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
    </header>

    <main>
        <section class="page-hero">
            <div class="container">
                <div class="page-banner">
                    <div class="breadcrumb">
                        <span>Welcome back, {{ Auth::user()->name }}</span>
                    </div>
                    <h1>Dashboard</h1>
                </div>
            </div>
        </section>

        <section class="section-shell">
            <div class="container stats-row">
                <div class="stat-card">
                    <strong>{{ $files->count() }}</strong>
                    <span>Total files</span>
                </div>
                <div class="stat-card">
                    <strong>{{ $categories->count() }}</strong>
                    <span>Categories</span>
                </div>
                <div class="stat-card">
                    <strong>{{ $categories->count() > 0 ? $categories->sum(fn($category) => is_numeric($category->media_count ?? null) ? $category->media_count : 0) : 0 }}</strong>
                    <span>Indexed</span>
                </div>
            </div>
        </section>

        <section class="section-shell">
            <div class="container content-layout">
                <div class="content-card">
                    <span class="section-tag">Upload files</span>
                    <h2 class="section-title">Add documents</h2>
                    @include('layouts.flash')
                    <form action="{{ url('upload-files') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-grid">
                            <div class="field-group">
                                <label for="category_id">Choose a category</label>
                                <select name="category_id" id="category_id">
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="field-group">
                                <label for="fileToUpload">Select file(s)</label>
                                <input type="file" name="fileToUpload[]" id="fileToUpload" multiple>
                            </div>
                            <div class="form-actions">
                                <button type="submit" class="primary-btn">Upload files</button>
                                <a href="{{ url('category-create') }}" class="secondary-btn">Create category</a>
                            </div>
                        </div>
                    </form>
                </div>

                <aside class="info-panel">
                    <span class="section-tag" style="color: rgba(255,255,255,0.7);">Quick actions</span>
                    <h3 class="panel-title">Admin tools</h3>
                    <div class="form-actions" style="flex-direction: column; align-items: stretch;">
                        <a href="{{ url('category-create') }}" class="secondary-btn" style="background: rgba(255,255,255,0.08); color: white; border-color: rgba(255,255,255,0.16);">Add category</a>
                        <a href="{{ url('/category/show') }}" class="secondary-btn" style="background: rgba(255,255,255,0.08); color: white; border-color: rgba(255,255,255,0.16);">Manage categories</a>
                    </div>
                </aside>
            </div>
        </section>

        <section class="section-shell">
            <div class="container">
                <div class="content-card">
                    <span class="section-tag">Your uploads</span>
                    <h2 class="section-title">Recent files</h2>
                    <div class="table-wrap">
                        <table class="data-table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Category</th>
                                    <th>File name</th>
                                    <th>Download</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($files as $file)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $file->category }}</td>
                                        <td class="file-name">{{ $file->name }}</td>
                                        <td><a href="{{ url('download', [$file->id]) }}" class="inline-btn"><i class="fa-solid fa-download"></i> Download</a></td>
                                        <td>
                                            <form method="post" onsubmit="return confirm('Do you really want to delete this file?');" action="{{ url('delete-files', [$file->id]) }}">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="danger-btn"><i class="fa-solid fa-trash"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" style="text-align:center; color: var(--text-soft);">No files uploaded yet.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
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

