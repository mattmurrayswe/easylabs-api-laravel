<?php

namespace App\Http\Controllers\Admin;

use App\Exports\ExportData;
use App\Exports\ExportDataFarmacias;
use App\Exports\ExportDataUsuarios;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;
use Symfony\Component\HttpFoundation\StreamedResponse;

class ExcelExportController extends Controller
{
    public function exportMedicamentos(Request $request)
    {
        try {
            // Retrieve the search parameter from the request
            $search = $request->input('search');
    
            // Create an instance of your ExportData class with the search parameter
            $export = new ExportData($search);
    
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

    public function exportUsuarios()
    {
        try {
            // Generate the Excel file
            $export = new ExportDataUsuarios;
            
            $fileName = 'usuarios-' . uniqid() . '.xlsx'; // Combine prefix and unique identifier

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
                'Content-Disposition' => 'attachment; filename="usuarios.xlsx"',
            ]);

            return $response;
        } catch (\Exception $e) {
            // Log any exceptions or errors
            Log::error('Excel export error: ' . $e->getMessage());
            // You can also return an error response or handle the error as needed
        }
    }
    
    public function exportFarmacias()
    {
        try {
            // Generate the Excel file
            $export = new ExportDataFarmacias;
            
            $fileName = 'farmacias-' . uniqid() . '.xlsx'; // Combine prefix and unique identifier

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
                'Content-Disposition' => 'attachment; filename="farmacias.xlsx"',
            ]);

            return $response;
        } catch (\Exception $e) {
            // Log any exceptions or errors
            Log::error('Excel export error: ' . $e->getMessage());
            // You can also return an error response or handle the error as needed
        }
    }
}

