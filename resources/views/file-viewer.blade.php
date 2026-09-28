<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $media->name }} | {{ config('constant.web_name') ?? 'Claim Bridge' }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link href="{{ asset('css/modern-ui.css') }}" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(180deg, #f8fbff 0%, #edf4ff 100%);
        }

        .viewer-shell {
            width: min(1200px, calc(100% - 32px));
            margin: 42px auto 60px;
        }

        .viewer-card {
            background: rgba(255,255,255,0.9);
            border: 1px solid rgba(148,163,184,0.25);
            box-shadow: 0 20px 40px rgba(15,23,42,0.12);
            border-radius: 28px;
            overflow: hidden;
        }

        .viewer-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 16px;
            padding: 22px 26px;
            border-bottom: 1px solid rgba(148,163,184,0.18);
            background: rgba(239,246,255,0.7);
        }

        .viewer-header h1 {
            margin: 0;
            font-size: clamp(1.6rem, 2vw, 2.4rem);
            letter-spacing: -0.05em;
            color: var(--secondary);
            word-break: break-word;
        }

        .viewer-content {
            padding: 26px;
        }

        .viewer-frame {
            width: 100%;
            min-height: 620px;
            border: 1px solid rgba(148,163,184,0.2);
            border-radius: 20px;
            background: white;
        }

        .viewer-frame iframe {
            border: 0;
            width: 100%;
            min-height: 620px;
            display: block;
            background: white;
        }

        .viewer-frame img {
            max-width: 100%;
            max-height: 720px;
            display: block;
            margin: 0 auto;
            background: white;
        }

        .viewer-actions {
            display: flex;
            flex-wrap: wrap;
            gap: 14px;
            padding: 0 26px 26px;
        }

        .viewer-actions .primary-btn,
        .viewer-actions .secondary-btn {
            text-decoration: none;
        }

        @media (max-width: 768px) {
            .viewer-header {
                flex-direction: column;
                align-items: flex-start;
            }
        }
    </style>
</head>
<body>
    <div class="viewer-shell">
        <div class="viewer-card">
            <div class="viewer-header">
                <h1>{{ $media->name }}</h1>
                <a href="{{ url('/') }}" class="secondary-btn">Back to home</a>
            </div>

            <div class="viewer-content">
                @if($isPreviewable)
                    @php
                        $extension = strtolower(pathinfo($media->name, PATHINFO_EXTENSION));
                    @endphp

                    @if(in_array($extension, ['png', 'jpg', 'jpeg', 'gif', 'webp', 'svg'], true))
                        <div class="viewer-frame">
                            <img src="{{ $fileUrl }}" alt="{{ $media->name }}">
                        </div>
                    @elseif($extension === 'pdf')
                        <div class="viewer-frame">
                            <iframe src="{{ $fileUrl }}#view=FitH" title="PDF viewer"></iframe>
                        </div>
                    @else
                        <div class="viewer-frame">
                            <iframe src="{{ $fileUrl }}" title="File preview"></iframe>
                        </div>
                    @endif
                @else
                    <div class="viewer-frame" style="display:grid; place-items:center; padding:30px; text-align:center; color: var(--text-soft);">
                        <div>
                            <i class="fa-solid fa-file-lines" style="font-size: 3rem; color: var(--primary);"></i>
                            <p style="margin-top: 16px; font-size: 1.1rem;">This file type cannot be previewed in the browser.</p>
                        </div>
                    </div>
                @endif
            </div>

            <div class="viewer-actions">
                <a href="{{ route('file.download', ['media' => $media->id]) }}" class="primary-btn"><i class="fa-solid fa-download"></i> Download file</a>
                <a href="{{ url('/') }}" class="secondary-btn">Back to library</a>
            </div>
        </div>
    </div>
</body>
</html>
