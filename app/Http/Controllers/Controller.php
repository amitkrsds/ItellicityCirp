<?php

namespace App\Http\Controllers;

use App\Models\Media;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Response;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function downloadFile(Media $media)
    {
        $location = storage_path('app/files/'.$media->full_path);
        return response()->download($location, $media->name, []);
    }

    public function showFile(Media $media)
    {
        $location = storage_path('app/files/'.$media->full_path);

        if (!file_exists($location)) {
            abort(404);
        }

        $mimeType = mime_content_type($location) ?: 'application/octet-stream';

        return response()->file($location, [
            'Content-Type' => $mimeType,
            'Content-Disposition' => 'inline; filename="' . $media->name . '"',
        ]);
    }

    public function viewFile(Media $media)
    {
        $location = storage_path('app/files/'.$media->full_path);

        if (!file_exists($location)) {
            abort(404);
        }

        $extension = strtolower(pathinfo($media->name, PATHINFO_EXTENSION));
        $previewableTypes = ['pdf', 'png', 'jpg', 'jpeg', 'gif', 'webp', 'svg', 'txt', 'csv', 'html'];

        return view('file-viewer', [
            'media' => $media,
            'fileUrl' => route('file.show', ['media' => $media->id]),
            'isPreviewable' => in_array($extension, $previewableTypes, true),
        ]);
    }
}
