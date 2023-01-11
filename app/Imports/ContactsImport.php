<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\ToModel;
use App\Models\Contact;
use DB;
class ContactsImport implements ToModel, WithHeadingRow
{
    /**
    * @param Collection $collection
    */

    public function model(array $row)
    {

        DB::beginTransaction();
        try {
            Contact::updateOrCreate(['email'=>$row['email']],$row);
            DB::commit();
           
        } catch (\Throwable $e) {
            DB::rollback();            
        }
        catch (\Exception $e) {
            DB::rollback();            
        }
        
    }
}
