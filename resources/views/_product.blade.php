<div class=" col-sm-6 col-md-4 col-lg-3 m-4 card d-flex" style="width: 16rem;">
    <input class="mt-2" type="checkbox" name="delete[]" value="{{$product->id}}">
    <div class="card-body pl-5 d-flex flex-column align-items-center">
        <h4 class="card-title">{{$product->sku}}</h4>
        <h6 class="card-subtitle text-muted">{{$product->name}}</h6>
        <p class="card-text m-1">{{$product->priceInDolars}}</p>
        
        @switch($product->productprops_type)
            @case("App\Furniture")
              <p class="card-text">{{$product->productprops->dimensions}}</p>
                @break
            @case("App\Disc")
                <p class="card-text">{{$product->productprops->size}}</p>
                @break
            @case('App\Book')
                <p class="card-text">{{$product->productprops->weight}}</p>
                @break
        @endswitch
        
    </div>
</div>