<?php

namespace App\Presenter;

class Documents
{
    public static function concatDocumentosPendentes($prescribers)
    {
        foreach ($prescribers as &$prescriber) {

            $docs_pendentes = [];
        
            if ($prescriber->ok_crm_frente === 'false') {
                $docs_pendentes[] = self::getFieldName('crm_frente');
            }
        
            if ($prescriber->ok_crm_verso === 'false') {
                $docs_pendentes[] = self::getFieldName('crm_verso');
            }
        
            if ($prescriber->ok_selfie_com_doc === 'false') {
                $docs_pendentes[] = self::getFieldName('selfie_com_doc');
            }
        
            // Adicionar a lista de documentos pendentes ao prescriber
            $prescriber->docs_pendentes = implode(', ', $docs_pendentes);
        }

        return $prescribers;
    } 


    private static function getFieldName($field)
    {
        return strtoupper(str_replace('ok_', '', str_replace('_', ' ', $field)));
    }
}
