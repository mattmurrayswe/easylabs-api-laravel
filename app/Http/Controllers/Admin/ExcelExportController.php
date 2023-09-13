<?php

namespace App\Http\Controllers\Admin;

use App\Exports\ExportData;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;
use Maatwebsite\Excel\Facades\Excel;
use Symfony\Component\HttpFoundation\StreamedResponse;

class ExcelExportController extends Controller
{
    public function export()
    {
        try {
            // Generate the Excel file
            $export = new ExportData;
            $fileName = 'medicamentos.xlsx';

            // Create a closure that generates and returns the Excel file
            $file = function () use ($export, $fileName) {
                $writer = Excel::store($export, 'public/' . $fileName, "local");
                $path = storage_path('app/public/' . $fileName);
                readfile($path);
                unlink($path);
            };

            // Create the response with the streamed content
            $response = new StreamedResponse($file, 200, [
                'Content-Type' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
                'Content-Disposition' => 'attachment; filename="' . $fileName . '"',
            ]);

            return $response;
        } catch (\Exception $e) {
            // Log any exceptions or errors
            Log::error('Excel export error: ' . $e->getMessage());
            // You can also return an error response or handle the error as needed
        }
    }
}

