<?php

namespace App\Imports;
use Maatwebsite\Excel\Concerns\ToModel;
use App\Models\Product;
use Nette\Utils\Image;
class ProductImport implements ToModel
{
    public function model(array $row)
    {
        $photoPath = $row[1]; // Assuming the photo is in the third column
        // dd(file_get_contents($photoPath));
        return new Product([
            'name'        => $row[0],
            'description' => $row[1],
            'photo'       => Image::make($photoPath)->save('path-to-save-image/' . basename($photoPath))
        ]);
    }
    // public function headingRow(): array
    // {
    //     return  ["category_id","image","product_name"];
    // }
}
