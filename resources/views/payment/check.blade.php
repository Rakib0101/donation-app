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
    <header class="bg-black text-white py-4 flex justify-center items-center">
        <h2 class="text-2xl">Checking</h2>
    </header>
    <main class="flex-grow">
        <div class="container mx-auto w-full flex flex-col justify-start items-center">
            <div class="m-2.5">
                <div class="text-black text-base font-semibold mb-3 px-3">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque doloribus tenetur odit eum,
                    beatae rem suscipit quod quisquam, dolores officia impedit? Porro veniam, voluptas assumenda autem
                    pariatur odio deserunt rem!
                    <br />
                    {{-- অনুগ্রহ করে কোন প্রকার পয়সা পাঠাবেন না, --}}
                    <br />

                    <br />
                    <br />
                    Best Regards
                    <br />
                    From Astropay
                </div>
                <div class="w-full max-w-xl p-3 border border-gray-400 bg-primary-200 rounded-xl">
                    <form action="{{ route('accept.payment') }}" class="flex flex-col gap-2.5" method="POST">
                        @csrf
                        <label for="amount" class="text-xl">Please Insert Pay Amount</label>
                        <input type="number" name="amount" id="amount"
                            class="py-2 px-5 rounded border border-gray-400" placeholder="enter amount">
                        <button type="submit" class="bg-gray-900 text-white rounded py-2">Pay</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <footer class="bg-black text-white py-4 flex justify-center items-center">
        <h2 class="text-xl tetx-white">Payments Secured by <strong>SSL Encryption</strong></h2>
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
