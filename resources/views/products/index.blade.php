@extends('layout')

@section('navbar')
<nav class="navbar navbar-expand-sm navbar-light bg-light mb-3">
    <div class="container">
        <a class="navbar-brand" href="#"><h1>Product List</h1></a>
        
            <form class="d-flex">
                    <div class="dropdown mr-4">
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown">
                            Mass delete action
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Mass delete action</a>   
                        </div>
                    </div>
                    <button class="btn btn-secondary">Apply</button>
            </form>
        
    </div>
</nav>
@endsection

@section('content')

<div class="container">
    <div class="row">


    
        {{-- @forelse ($products as $product) --}}
        @include('_product')
        @include('_product')
        @include('_product')
        @include('_product')
        @include('_product')
        @include('_product')
        @include('_product')
        @include('_product')
        @include('_product')
        @include('_product')
        @include('_product')
        @include('_product')
        @include('_product')
        @include('_product')
            {{-- @empty
            {{-- @empty
            {{-- @empty
            {{-- @empty
            {{-- @empty
            {{-- @empty
            {{-- @empty
            {{-- @empty
            {{-- @empty
                <p class="p-4">No products yet.</p>
    @endforelse --}}

    </div>
</div>

@endsection