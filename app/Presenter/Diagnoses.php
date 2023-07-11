<?php

namespace App\Presenter;

class Diagnoses
{
    public static function concatSymptoms(array $diagnoses): array
    {
        foreach ($diagnoses as &$diagnose) {

            $symptomsConcat = "";

            foreach ($diagnose["has_symptoms"] as $hasSymptom) {

                if (isset($hasSymptom["symptom"]["name"])) {
                    $symptomsConcat .= $hasSymptom["symptom"]["name"] . ", ";
                }
            }
            
            $symptomsConcat = trim($symptomsConcat, ", ");

            $diagnose["symptoms_concat"] = $symptomsConcat;

            $medicinesConcat = "";

            foreach ($diagnose["has_suggested_medicines"] as $hasSuggestedMedicines) {

                if (isset($hasSuggestedMedicines["medicine"]["name"])) {
                    $medicinesConcat .= $hasSuggestedMedicines["medicine"]["name"] . ", ";
                }
            }
            
            $medicinesConcat = trim($medicinesConcat, ", ");

            $diagnose["medicines_concat"] = $medicinesConcat;
            
        }

        return $diagnoses;
    } 
}
