<?php

namespace App\Imports;

use App\Models\DataUser;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Str;

class DataUsersImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new DataUser([
            'name' => $row[0],
            'last_name' => $row[1],
            'speciality' => $row[2],
            'employe_number' => $row[3],
            'phone' => $row[4],
            'email' => $row[5],
            'slug' => Str::slug($row[0].' '.$row[1]),
        ]);
    }
}
