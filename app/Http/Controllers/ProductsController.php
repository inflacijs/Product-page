<?php

namespace App\Http\Controllers;

use App\Product;
use App\Furniture;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        return view('products.index');
    }
    public function create()
    {
        return view('products.create');
    }

    public function store()
    {
        
                if(request('type') == 'content_1')
        {
                $discAttributes = request()->validate([
                    'size' => 'integer'
                ]);
                
                $productType = Disc::create($discAttributes);
                
        }elseif(request('type') == 'content_2')
        {
                $furnitureAttributes = request()->validate([
                    'width' => 'integer',
                    'height' => 'integer',
                    'length' => 'integer'
            ]);
            
                $productType = Furniture::create($furnitureAttributes);

        }elseif(request('type') == 'content_3')
        {
                $bookAttributes = request()->validate([
                    'weight' => 'integer',
        
            ]);
            
                $productType = Book::create($bookAttributes);

        }

        $productAttributes = request()->validate([
            'sku' => 'required',
            'name' => 'required',
            'price' => 'required|integer'
        ]);
        
        $product = new Product($productAttributes);
        $productType->product()->save($product);
        



        return redirect('/products');
    }
}
