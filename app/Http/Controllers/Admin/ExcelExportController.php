<?php

namespace App\Http\Controllers\Admin;

use App\Exports\ExportData;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;
use Symfony\Component\HttpFoundation\StreamedResponse;

class ExcelExportController extends Controller
{
    public function export()
    {
        try {
            // Generate the Excel file
            $export = new ExportData;
            
            $fileName = 'medicamentos-' . uniqid() . '.xlsx'; // Combine prefix and unique identifier

            // Generate the Excel file and store it on S3
            $s3FilePath = 'exports/' . $fileName;
            Excel::store($export, $s3FilePath, 's3');

            // Create a closure that reads and streams the file from S3
            $file = function () use ($s3FilePath) {
                $s3FileContents = Storage::disk('s3')->get($s3FilePath);
                echo $s3FileContents;
            };

            // Create the response with the streamed content
            $response = new StreamedResponse($file, 200, [
                'Content-Type' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
                'Content-Disposition' => 'attachment; filename="medicamentos.xlsx"',
            ]);

            return $response;
        } catch (\Exception $e) {
            // Log any exceptions or errors
            Log::error('Excel export error: ' . $e->getMessage());
            // You can also return an error response or handle the error as needed
        }
    }
}

