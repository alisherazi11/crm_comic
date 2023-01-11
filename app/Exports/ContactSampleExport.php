<?php

namespace App\Exports;

use App\Models\Contact;
use Maatwebsite\Excel\Concerns\FromCollection;
//use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Illuminate\Support\Facades\Schema;

class ContactSampleExport implements FromCollection, WithHeadings
{

    public function headings(): array
    {

        $col=Schema::getColumnListing('contacts');
        $columns=array_values(array_diff($col,['id','created_at','updated_at']));

        return $columns;
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Contact::where('id', '')->get();
    }

}
