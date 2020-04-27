<?php

namespace App\Http\Controllers;

use App\Book;
use App\Disc;
use App\Product;
use App\Furniture;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', ['products' => $products]);
    }
    public function create()
    {
        return view('products.create');
    }

    public function store()
    {
        
                if(request('type') == 'DVD_disc')
        {
                $discAttributes = request()->validate([
                    'size' => 'integer'
                ]);
                
                $productType = Disc::create($discAttributes);
                
        }elseif(request('type') == 'Furniture')
        {
                $furnitureAttributes = request()->validate([
                    'width' => 'integer',
                    'height' => 'integer',
                    'length' => 'integer'
            ]);
            
                $productType = Furniture::create($furnitureAttributes);

        }elseif(request('type') == 'Book')
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

    public function destroy()
    {
        $deleteArray = request()->input('delete');
        
        foreach($deleteArray as $deleteItem)
        {
            Product::destroy($deleteItem);
        }
        
        return back();
    }
    
    
}
