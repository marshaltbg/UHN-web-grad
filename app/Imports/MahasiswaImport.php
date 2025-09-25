<?php

namespace App\Imports;

use App\Models\mahasiswa;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class MahasiswaImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new mahasiswa([
            "name"=>$row["nama"],
            "nim"=>$row["nim"],
            "jenis_kelamin"=>$row["jenis_kelamin"],
            "lama_studi"=>$row["lama_studi"],
            "program_studi"=>$row["program_studi"],
            "fakultas"=>$row["fakultas"],
            "ipk"=>$row["ipk"],
            "umur"=>$row["umur"],
            "status_kelulusan"=>$row["status_kelulusan"]
        ]);
    }
}
