
@if(Session::has('mass_delete'))
    <div class="alert alert-danger text-center">
        <em> {{ session('mass_delete') }}</em>
    </div>
@endif
@extends('layout')

@section('navbar')
<nav class="navbar navbar-expand-sm navbar-light bg-light mb-3">
    <div class="container">
        <a class="navbar-brand" href="#"><h1>Product List</h1></a>
        
            <div class="d-flex">
                    <div class="dropdown mr-4">
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown">
                            Mass delete action
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Mass delete action</a>   
                        </div>
                    </div>
                    <button class="btn btn-secondary" type="submit" form="checkForm" >Apply</button>
                </div>
        
    </div>
</nav>
@endsection

@section('content')

<div class="container">
    <form id="checkForm" method="POST" action="/products/public/products/delete">
        @csrf
        @method('DELETE')
        <div class="row">

            @forelse ($products as $product) 
                @include('_product')
                @empty
                    <p class="p-4">No products yet.</p>
            @endforelse 

            
        </div>
        
    </form>
</div>

@endsection