<?php

namespace App\Imports;

use App\Models\Temporary;
use Illuminate\Validation\ValidationException;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Validators\Failure;
use Maatwebsite\Excel\Concerns\SkipsFailures;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\SkipsOnFailure;

class TemporaryImport implements ToModel, WithHeadingRow, WithValidation, SkipsOnFailure
{
    use  Importable, SkipsFailures;

    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Temporary([
            'name'  => $row['name'],
            'category_name' => $row['category_name'],
            'subseries_name' => $row['subseries_name'],
            'theme' => $row['theme'],
            'model_name' => $row['model_name'],
            'year' => $row['year'],
            'colour' => $row['colour'],
            'tampo' => $row['tampo'],
            'decoration' => $row['decoration'],
            'base_colour' => $row['base_colour'],
            'type' => $row['type'],
            'window_colour' => $row['window_colour'],
            'interior_colour' => $row['interior_colour'],
            'wheel_type' => $row['wheel_type'],
            'visibility' => $row['visibility'],
            'country' => $row['country'],
            'notes' => $row['notes'],
            'image' => $row['image'],
        ]);
    }

    public function  rules(): array {
        return [
            '*.name' => 'required',
        ];
    }



}
