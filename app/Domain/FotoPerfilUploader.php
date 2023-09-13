<?php

namespace App\Domain;

use App\Models\Prescriber;
use Illuminate\Support\Facades\Storage;

class FotoPerfilUploader
{
    public static function uploadFotoPerfil($id, $file) {
        $publicUrl = self::upload($id, $file);
        self::updateDatabase($id, $publicUrl);
        return $publicUrl;
    }

    public static function upload($id, $file) {
        $path = "prescriber/foto-perfil/foto-perfil-{$id}.jpg";
        $fileContents = file_get_contents($file->getPathname());
        Storage::disk('s3')->put($path, $fileContents, 'public');
        $publicUrl = Storage::disk('s3')->url($path);
        return $publicUrl;
    }

    public static function updateDatabase($id, $publicUrl) {
        Prescriber::where("id", $id)->update([
            "uploaded_foto_perfil" => $publicUrl
        ]);
    }
}