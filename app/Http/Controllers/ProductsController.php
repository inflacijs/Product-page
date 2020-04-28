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
                    'size' => 'integer|required'
                ]);
                
                $productType = Disc::create($discAttributes);
                
        }elseif(request('type') == 'Furniture')
        {
                $furnitureAttributes = request()->validate([
                    'width' => 'required|integer',
                    'height' => 'required|integer',
                    'length' => 'required|integer'
            ]);
            
                $productType = Furniture::create($furnitureAttributes);

        }elseif(request('type') == 'Book')
        {
                $bookAttributes = request()->validate([
                    'weight' => 'required|integer',
        
            ]);
            
                $productType = Book::create($bookAttributes);

        }

        $productAttributes = request()->validate([
            'sku' => 'required|max:255|string',
            'name' => 'required|max:255|string',
            'price' => 'required|integer',
            'type' => 'required'
        ]);

        array_pop($productAttributes); // 'type' is removed

        $product = new Product($productAttributes);
        $productType->product()->save($product);

        return redirect('/products');
    }

    public function destroy()
    {
        $deleteArray = request()->input('delete');
        
        if($deleteArray){
            foreach($deleteArray as $deleteItem)
            {
                Product::destroy($deleteItem);
            }
            
            return back();
        }
    
        return redirect()
                ->back()
                ->with('mass_delete', 'No items selected for mass delete!');
        
    }
    
    
}
