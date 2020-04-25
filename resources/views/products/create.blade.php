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

        <select id="target" name="type">
            <option value="content_1">Option 1</option>
            <option value="content_2">Option 2</option>
            <option value="content_3">Option 3</option>
        <select>

        <div id="content_1" class="inv">
            <div class="input-group mb-3 w-25">
                <div class="input-group-prepend">
                    <span class="input-group-text">Size </span>
                </div>
                <input type="text" class="form-control" name="size">
            </div>
    
        </div>
        <div id="content_2" class="inv">
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
        <div class="input-group mb-3 w-25">
            <div id="content_3" class="inv">
                <div class="input-group-prepend">
                    <span class="input-group-text">Weight</span>
                </div>
                <input type="text" class="form-control" name="weight">
            </div>
        </div>
    </form>
</div>

@endsection


