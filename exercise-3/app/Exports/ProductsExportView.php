<?php

namespace App\Exports;

use App\Models\Product;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class ProductsExportView implements FromView
{
    public function view(): View
    {
        $products = Product::where('stock', '<', 30)
            ->orderByDesc('stock')
            ->get();

        return view('exports.products', [
            'products' => $products
        ]);
    }
}
