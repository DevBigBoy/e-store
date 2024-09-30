<?php

namespace App\Traits;

use Exception;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

trait FileControlTrait
{

    public function uploadFile(UploadedFile $file, string $directory, string $disk = 'public'): ?string
    {
        $this->validateFile($file);

        try {
            if ($file) {
                $filename = uniqid() . '_' . time() . '.' . $file->getClientOriginalExtension();
                $filePath = $file->storeAs($directory, $filename, $disk);
                return $filePath;
            }
            return null;
        } catch (\Exception $e) {
            Log::error('File upload failed: ' . $e->getMessage());
            throw new \Exception('File upload failed');
        }
    }

    public function deleteFile(?string $filePath, string $disk = 'public'): bool
    {
        try {
            if ($filePath && Storage::disk($disk)->exists($filePath)) {
                return Storage::disk($disk)->delete($filePath);
            }
        } catch (\Exception $e) {
            Log::error('File deletion failed: ' . $e->getMessage());
            throw new \Exception('File deletion failed');
        }

        return false;
    }

    protected function validateFile(UploadedFile $file): void
    {
        if (!in_array($file->getClientMimeType(), ['image/jpeg', 'image/png', 'image/gif'])) {
            throw new \Exception('Invalid file type. Only JPEG, PNG, and GIF are allowed.');
        }

        if ($file->getSize() > 5 * 1024 * 1024) {
            throw new \Exception('File size exceeds the maximum allowed size of 5MB.');
        }
    }
}
