<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Fashion Hub</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="{{ asset('bootstrap/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <!-- Styles -->
        @viteReactRefresh
        @vite(['resources/css/app.css', 'resources/js/app.jsx'])
        @livewireStyles
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <div class="container-fluid pt-3">
            @include('product.view')
        </div>
        <script>
            let selectedColor = '';
            let selectedSize = '';

            function selectColor(color) {
                selectedColor = color;
                document.getElementById('color').value = color;
            }
            function selectSize(size) {
                selectedSize = size;
                document.getElementById('size').value = size;
            }
            let quantity = 1;
            const productPrice = {{ $product->price }};
            const markupPercentage = 0.25;
            function increment() {
                quantity++;
                updateQuantityAndPrice();
            }
            function decrement() {
                if (quantity > 1) {
                    quantity--;
                    updateQuantityAndPrice();
                }
            }

            function updateQuantityAndPrice() {
                const totalPrice = (quantity * productPrice * (1 + markupPercentage)).toFixed(2);
                document.getElementById('quantity').innerText = quantity;
                document.getElementById('quantity_input').value = quantity;
                document.getElementById('total-price').innerText = totalPrice;
                document.getElementById('notification').innerText = quantity;
                document.getElementById('decrement').disabled = quantity === 1;
            }

        </script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        @livewireScripts
    </body>
</html>
