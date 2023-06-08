<?php

namespace App\Imports;

use App\Models\Report\Report;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Concerns\ToCollection;
use Illuminate\Support\Collection;

class ReportImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $rows)
    {
        // Validator::make($rows->toArray(), [

        //     '*.title' => 'required',
        //     '*.keywords' => 'required',
        //     '*.category_id' => 'required',
        //     '*.type' => 'required',
        //     '*.application' => 'required',
        //     '*.keyplayers' => 'required',
        //     '*.description_one' => 'required',
        //     '*.description_two' => 'required',
        //     '*.description_three' => 'required',
        //     '*.content' => 'required',
        //     '*.slug' => 'required',

        // ])->validate();
    //    foreach ($rows as $row) {

        return new Report([

               'title' => $rows['title'],
               'keywords' => $rows['keywords'],
               'category_id' => $rows['category_id'],
               'type' => $rows['type'],
               'application' => $rows['application'],
               'keyplayers' => $rows['keyplayers'],
               'description_one' => $rows['description_one'],
               'description_two' => $rows['description_two'],
               'description_three' => $rows['description_three'],
               'content' => $rows['content'],
               'slug' => $rows['slug'],

           ]);

    //    }
    }

    public function batchSize(): int
    {
        return 1000;
    }
}
