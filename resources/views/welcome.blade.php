<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="h-screen flex flex-col justify-between">
    <header class="bg-gray-900 text-white py-4 flex justify-center items-center">
        <h2 class="text-2xl">Header</h2>
    </header>
    <main class="flex-grow">
        <div class="w-full flex justify-center items-center py-24">
            <div class="w-full max-w-xl mx-4 p-8 border border-gray-400 bg-primary-200 rounded-xl">
                <form action="{{ route('payment') }}" class="flex flex-col gap-2" method="POST">
                    @csrf
                    <label for="">Donate Any Amount</label>
                    <input type="number" name="amount" id="" class="py-2 px-5 rounded border border-gray-400" placeholder="donation amount">
                    <button type="submit" class="bg-gray-500 text-white rounded py-2">Pay</button>
                </form>
            </div>
        </div>
    </main>
    <footer class="bg-gray-900 text-white py-4 flex justify-center items-center">
        <h2 class="text-2xl">Footer</h2>
    </footer>
    <!-- footer end -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script type="module" type="module" src="./assets/js/main.js"></script>
</body>

</html>
