<?php

namespace App\Presenter;

class Diagnoses
{
    public static function concatSymptoms(array $diagnoses): array
    {
        foreach ($diagnoses as &$diagnose) {

            $symptomsConcat = "";

            foreach ($diagnose["has_symptoms"] as $k => $hasSymptom) {

                if (isset($hasSymptom["symptom"]["name"])) {
                    $symptomsConcat .= $hasSymptom["symptom"]["name"] . ", ";
                }
            }
            
            $symptomsConcat = trim($symptomsConcat, ", ");

            $diagnose["symptoms_concat"] = $symptomsConcat;
            
        }
        return $diagnoses;
    } 
}
