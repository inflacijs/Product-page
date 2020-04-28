<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/products/public/css/app.css">
    <title>Product page</title>
    
</head>
<style>
    .inv {
        display: none;
    }
</style>
<body>
    @yield('navbar')

    @yield ('content')

    <!-- Footer -->
    <footer id="main-footer" class="bg-dark text-white mt-5 p-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    <p class="lead text-center">
                        Copyright &copy <span id="year"></span>
                        Products page
                    </p>
                </div>
            </div>
        </div>
    </footer>
   <script src="/products/public/js/app.js"></script> 
   <script src="/products/public/js/dropdown.js"></script> 
</body>
</html>