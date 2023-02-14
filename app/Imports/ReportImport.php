<?php

namespace App\Imports;

use App\Models\Report\Report;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Concerns\ToCollection;
use Illuminate\Support\Collection;

class ReportImport implements ToCollection, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function collection(Collection $rows)
    {
        Validator::make($rows->toArray(), [

            '*.title' => 'required',
            '*.keywords' => 'required',
            '*.category_id' => 'required',
            '*.type' => 'required',
            '*.application' => 'required',
            '*.keyplayers' => 'required',
            '*.description_one' => 'required',
            '*.description_two' => 'required',
            '*.description_three' => 'required',
            '*.content' => 'required',
            '*.slug' => 'required',

        ])->validate();
       foreach ($rows as $row) {

           Report::create([

               'title' => $row['title'],
               'keywords' => $row['keywords'],
               'category_id' => $row['category_id'],
               'type' => $row['type'],
               'application' => $row['application'],
               'keyplayers' => $row['keyplayers'],
               'description_one' => $row['description_one'],
               'description_two' => $row['description_two'],
               'description_three' => $row['description_three'],
               'content' => $row['content'],
               'slug' => $row['slug'],

           ]);

       }
    }
}
