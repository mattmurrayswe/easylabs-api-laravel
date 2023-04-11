<?php

namespace App\Service;

use App\Models\Medicine;


class MedicineService
{
    public function storeAndGetId(array $medicine){

       return Medicine::insertGetId($medicine);

    }
    public function newMedicine($request){

       return Medicine::create($request->all());

    }
    public function getAllMedicine()
    {
        return Medicine::all();
    }
    public function getMedicine($id)
    {
        return Medicine::findOrFail($id);
    }
    public function deleteMedicine($id)
    {
        $medicine = Medicine::find($id);
        return $medicine->delete();
    }
    public function edit( $request,$id)
    {
        $medicine = Medicine::find($id);
        $medicine->update($request->all());
        return $medicine;

    }
    
}
