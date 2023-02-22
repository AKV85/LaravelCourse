<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="{{asset('images/favicon.ico')}}" />
{{--    <link href="/css/bootstrap.css" rel="stylesheet">--}}
{{--    <link--}}
{{--        rel="stylesheet"--}}
{{--        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"--}}
{{--        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="--}}
{{--        crossorigin="anonymous"--}}
{{--        referrerpolicy="no-referrer"--}}
{{--    />--}}
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        laravel: "#6417ab",
                    },
                },
            },
        };
    </script>
    <title>TechShop</title>
</head>


<body class="mb-48">
<header>


            @if (auth()?->user()?->isPersonnel())


<nav class="flex justify-between items-center mb-4">
    <a href="/"
    ><img class="logo pl-2 pt-2"
          src="{{asset('images/TSLogo.png')}}" alt="logo"
        /></a>
    <ul class="flex space-x-6 mr-6 text-lg">
        <li>
            <a href="{{route('addresses.index')}}" class="hover:text-laravel">
                {{__('general.meniu.addresses')}}
            </a>
        </li>
        <li>
            <a href="{{route('categories.index')}}" class="hover:text-laravel">
                {{__('general.meniu.categories')}}
        </a>
    </li>
    <li>
        <a href="{{route('orders.index')}}" class="hover:text-laravel">
            {{__('general.meniu.orders')}}
            </a>
        </li>
        <li>
            <a href="{{route('persons.index')}}" class="hover:text-laravel">
                {{__('general.meniu.persons')}}
            </a>
        </li>
        <li>
            <a href="{{route('products.index')}}" class="hover:text-laravel">
                {{__('general.meniu.products')}}
            </a>
        </li>
        <li>
            <div>
                @if(app()->getLocale() == 'en')
                    <a href="{{url()->current()}}?lang=lt">LT</a>
                @else
                    <a href="{{url()->current()}}?lang=en">EN</a>
                @endif
            </div>
        </li>
    </ul>
</nav>
        @endauth
</header>
<main>
{{$slot}}
</main>
<footer
    class="fixed bottom-0 left-0 w-full flex items-center
    justify-start font-bold bg-laravel text-white h-24 mt-24
     opacity-90 md:justify-center">
    <p class="ml-2">Copyright &copy; 2022, All Rights reserved</p>

</footer>

<x-flash-message />
</body>
</html>

