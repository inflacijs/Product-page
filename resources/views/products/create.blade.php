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
        <div class="input-group mt-4 col-lg-6 col-sm-9 p-0">
            <div class="input-group-prepend">
                <span class="input-group-text">SKU </span>
            </div>
            <input 
                type="text" 
                class="form-control @error('sku') is-invalid @enderror" 
                name="sku"
                value="{{old('sku')}}"
                >
                
        </div>  

        @error ('sku')
            <p class="alert alert-danger col-lg-6 col-sm-9">{{$message}}</p>
        @enderror

        <div class="input-group mt-4 col-lg-6 col-sm-9 p-0">
            <div class="input-group-prepend">
                <span class="input-group-text">Name</span>
            </div>
            <input 
                type="text" 
                class="form-control @error('name') is-invalid @enderror" 
                name="name"
                value="{{old('name')}}"
            >
           
        </div>

        @error ('name')
            <p class="alert alert-danger col-lg-6 col-sm-9">{{$message}}</p>
        @enderror

        <div class="input-group mt-4 col-lg-6 col-sm-9 p-0">
            <div class="input-group-prepend">
                <span class="input-group-text">Price </span>
            </div>
            <input 
                type="text" 
                class="form-control @error('price') is-invalid @enderror" 
                name="price"
                value="{{old('price')}}"
            >
          
        </div>

        @error ('price')
            <p class="alert col-lg-6 col-sm-9 alert-danger">{{$message}}</p>
        @enderror

        <p class="font-italic lead mt-3 pl-3">
            Please specify a price in cents.
            <br>
            Only numbers accepted, no letters.
        </p>

        <div class="dropdown mt-4">
            <select 
                class="form-control col-lg-4 col-sm-9  @error('type') is-invalid @enderror" 
                id="target" 
                name="type"
            >
                <option class="dropdown-item" value="">Choose a product type</option>
                <option class="dropdown-item" value="DVD_disc" {{ old('type') == "DVD_disc" ? 'selected' : '' }}>DVD disc</option>
                <option class="dropdown-item" value="Furniture" {{ old('type') == "Furniture" ? 'selected' : '' }}>Furniture</option>
                <option class="dropdown-item" value="Book" {{ old('type') == "Book" ? 'selected' : '' }}>Book</option>
            <select>
        </div>

        @error ('type')
            <p class="alert col-lg-6 col-sm-9 alert-danger">{{$message}}</p>
        @enderror


        <div id="DVD_disc" class="{{ old('type') == "DVD_disc" ? "vis" : "inv"}}">
            <div class="input-group mt-4 col-lg-6 col-sm-9 p-0">
                <div class="input-group-prepend">
                    <span class="input-group-text">Size </span>
                </div>
                <input 
                    type="text" 
                    class="form-control @error('size') is-invalid @enderror" 
                    name="size"
                    value="{{old('size')}}"
                >
            </div>
            @error ('size')
                <p class="alert col-lg-6 col-sm-9 alert-danger">{{$message}}</p>
            @enderror
            <p class="font-italic lead mt-3">
                Please specify a disk size in megabytes.
                <br>
                Only numbers accepted, no letters.
            </p>
        </div>

        <div id="Furniture" class="{{ old('type') == "Furniture" ? "vis" : "inv"}}">
            <div class="input-group mt-4 col-lg-6 col-sm-9 p-0">
                <div class="input-group-prepend">
                    <span class="input-group-text">Height </span>
                </div>
                <input 
                    type="text" 
                    class="form-control @error('height') is-invalid @enderror" 
                    name="height"
                    value="{{old('height')}}"
                >
            </div>
            @error ('height')
                <p class="alert col-lg-6 col-sm-9 alert-danger">{{$message}}</p>
            @enderror
            <div class="input-group mt-4 col-lg-6 col-sm-9 p-0">
                <div class="input-group-prepend">
                    <span class="input-group-text">Width </span>
                </div>
                <input 
                    type="text" 
                    class="form-control @error('width') is-invalid @enderror" 
                    name="width"
                    value="{{old('width')}}"
                >
            </div>
            @error ('width')
                <p class="alert col-lg-6 col-sm-9 alert-danger">{{$message}}</p>
            @enderror
            <div class="input-group mt-4 col-lg-6 col-sm-9 p-0">
                <div class="input-group-prepend">
                    <span class="input-group-text">Length</span>
                </div>
                <input 
                    type="text" 
                    class="form-control @error('length') is-invalid @enderror" 
                    name="length"
                    value="{{old('length')}}"
                >
            </div>
            @error ('length')
                <p class="alert col-lg-6 col-sm-9 alert-danger">{{$message}}</p>
            @enderror

            <p class="font-italic lead mt-3">
                Please provide dimenssions in HxWxL format. All fields is required.
                <br>
                Specify dimenssions in centimeters. Only numbers accepted, no letters.
            </p>

        </div>
        <div id="Book" class="{{ old('type') == "Book" ? "vis" : "inv"}}">
            <div class="input-group mt-4 col-lg-6 col-sm-9">
            
                <div class="input-group-prepend">
                    <span class="input-group-text">Weight</span>
                </div>
                <input 
                    type="text" 
                    class="form-control @error('weight') is-invalid @enderror" 
                    name="weight"
                    value="{{old('weight')}}"
                >
            </div>
            @error ('weight')
                <p class="alert col-lg-6 col-sm-9 alert-danger">{{$message}}</p>
            @enderror
            <p class="font-italic lead">
                Please indicate the weight of the book in grams. 
                <br>
                Only numbers accepted, no letters.
            </p>
        </div>
    </form>
</div>

@endsection





