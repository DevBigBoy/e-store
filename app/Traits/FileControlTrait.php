<?php

namespace App\Traits;

use Exception;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

trait FileControlTrait
{

    public function uploadFile(UploadedFile $file, string $directory): ?string
    {
        if ($file) {
            try {
                // Generate a unique file name with hash
                $fileName = $file->hashName();

                // Store the file in the specified directory and return the path
                $path = $file->storeAs($directory, $fileName, ['disk' => 'public']);

                return $path;
            } catch (Exception $e) {
                // Log the error for debugging
                Log::error('File upload failed: ' . $e->getMessage());

                return null;
            }
        }

        return null;
    }

    public function deleteFile(?string $filePath): void
    {
        if ($filePath) {
            try {
                $fullPath = 'public/' . $filePath;
                // check if the file exists before attempting deletion
                if (Storage::exists($fullPath)) {
                    // Delete The file from storage
                    Storage::delete($fullPath);
                } else {
                    // Log if the file does not exist
                    Log::warning('File deletion attempted, but file not found: ' . $fullPath);
                }
            } catch (Exception $e) {
                // Log the exception details if the deletion fails
                Log::error('File deletion failed: ' . $e->getMessage());
            }
        }
    }
}