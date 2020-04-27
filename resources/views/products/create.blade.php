@extends ('layout')

@section('navbar')
<nav class="navbar navbar-expand-sm navbar-light bg-light mb-3">
    <div class="container">
        <a class="navbar-brand" href="#"><h1>Product List</h1></a>
           
        <button form="new" class="btn btn-secondary px-5" type="submit">Save</button>
            
    </div>
</nav>
@endsection

@section('content')
<div class="container">
    <form method="POST" action="/products/public/products" id="new">
        @csrf
        <div class="input-group mb-3 w-25">
            <div class="input-group-prepend">
                <span class="input-group-text">SKU </span>
            </div>
            <input type="text" class="form-control" name="sku">
        </div>
        <div class="input-group mb-3 w-25">
            <div class="input-group-prepend">
                <span class="input-group-text">Name</span>
            </div>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="input-group mb-3 w-25">
            <div class="input-group-prepend">
                <span class="input-group-text">Price </span>
            </div>
            <input type="text" class="form-control" name="price">
        </div>
        <div class="dropdown mb-4">
            <select class="form-control w-25" id="target" name="type">
                <option class="dropdown-item" value="">Choose a product type</option>
                <option class="dropdown-item" value="DVD_disc">DVD disc</option>
                <option class="dropdown-item" value="Furniture">Furniture</option>
                <option class="dropdown-item" value="Book">Book</option>
            <select>
        </div>

            {{-- <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
                    Product type
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Link One</a>
                    <a class="dropdown-item" href="#">Link Two</a>
                    <a class="dropdown-item" href="#">Link Three</a>
                </div>
            </div> --}}

        <div id="DVD_disc" class="inv">
            <div class="input-group mb-3 w-50">
                <div class="input-group-prepend">
                    <span class="input-group-text">Size </span>
                </div>
                <input type="text" class="form-control" name="size">
            </div>
            <p class="font-italic lead">
                Please specify a disk size in megabytes.
                <br>
                Only numbers accepted, no letters.
            </p>
        </div>

        <div id="Furniture" class="inv">
            <div class="input-group mb-3 w-25">
                <div class="input-group-prepend">
                    <span class="input-group-text">Height </span>
                </div>
                <input type="text" class="form-control" name="height">
            </div>
            <div class="input-group mb-3 w-25">
                <div class="input-group-prepend">
                    <span class="input-group-text">Width </span>
                </div>
                <input type="text" class="form-control" name="width">
            </div>
            <div class="input-group mb-3 w-25">
                <div class="input-group-prepend">
                    <span class="input-group-text">Length</span>
                </div>
                <input type="text" class="form-control" name="length">
            </div>
        </div>
        <div id="Book" class="inv">
            <div class="input-group mb-3 w-25">
            
                <div class="input-group-prepend">
                    <span class="input-group-text">Weight</span>
                </div>
                <input type="text" class="form-control" name="weight">
            </div>
            <p class="font-italic lead">
                Please indicate the weight of the book in grams. 
                <br>
                Only numbers accepted, no letters.
            </p>
        </div>
    </form>
</div>

@endsection

{{-- 
@foreach ($errors->all() as $error)
<div>{{ $error }}</div>
@endforeach --}}



