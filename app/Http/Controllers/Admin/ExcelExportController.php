<?php

namespace App\Http\Controllers\Admin;

use App\Exports\ExportData;
use App\Exports\ExportDataFarmacias;
use App\Exports\ExportDataUsuarios;
use App\Http\Controllers\Controller;
use App\Imports\FarmaciasImport;
use App\Imports\MedicineImport;
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
    
            return (new ExportData($search))->download('farmacias.xlsx', \Maatwebsite\Excel\Excel::XLSX, [
                'X-Vapor-Base64-Encode' => 'True'
            ]);

        } catch (\Exception $e) {
            // Log any exceptions or errors
            Log::error('Excel export error: ' . $e->getMessage());
            // You can also return an error response or handle the error as needed
        }
    }

    public function importMedicamentos(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xlsx,csv' // Validate the uploaded file
        ]);

        $file = $request->file('file');

        // Import the data from the Excel file using the MedicineImport class
        Excel::import(new MedicineImport(), $file);

        return response()->json(['message' => 'Data imported successfully'], 200);
    }

    public function exportUsuarios(Request $request)
    {
        try {
            $search = $request->input('search');

            return (new ExportDataUsuarios($search))->download('usuarios.xlsx', \Maatwebsite\Excel\Excel::XLSX, [
                'X-Vapor-Base64-Encode' => 'True'
            ]);
            
        } catch (\Exception $e) {
            // Log any exceptions or errors
            Log::error('Excel export error: ' . $e->getMessage());
            // You can also return an error response or handle the error as needed
        }
    }
    
    public function exportFarmacias(Request $request)
    {
        try {
            $search = $request->input('search');

            return (new ExportDataFarmacias($search))->download('farmacias.xlsx', \Maatwebsite\Excel\Excel::XLSX, [
                'X-Vapor-Base64-Encode' => 'True'
            ]);

        } catch (\Exception $e) {
            // Log any exceptions or errors
            Log::error('Excel export error: ' . $e->getMessage());
            // You can also return an error response or handle the error as needed
        }
    }

    public function importFarmacias(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xlsx,csv' // Validate the uploaded file
        ]);

        $file = $request->file('file');

        // Import the data from the Excel file using the MedicineImport class
        Excel::import(new FarmaciasImport(), $file);

        return response()->json(['message' => 'Data imported successfully'], 200);
    }
}

