<?php

namespace App\Exports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\FromCollection;

class ProductsExportCollection implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        // return Product::all();
        return Product::select('id', 'name', 'excerpt', 'price', 'stock')
            ->orderByDesc('id')
            ->get();
    }
}
