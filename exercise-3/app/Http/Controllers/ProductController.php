<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Exports\ProductsExportCollection;
use App\Exports\ProductsExportView;
use Maatwebsite\Excel\Facades\Excel;

class ProductController extends Controller
{
    public function index()
    {
        return view('products', [
            'products' => Product::paginate()
        ]);
    }

    public function collection()
    {
        return Excel::download(new ProductsExportCollection, 'products.xlsx');
    }

    public function view()
    {
        return Excel::download(new ProductsExportView, 'products.xlsx');
    }
}
