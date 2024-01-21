<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Bootstrap CDN --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

        @livewireStyles

    <title>@yield('title', 'Customer Details')</title>
</head>

<body>

    <div class="container-fluid">

        <div class="row text-center mt-5">
            <h2>@yield('heading', 'Customer')</h2>
        </div>

        @if ($errors->any())
            <div class="row text-center justify-content-center">
                <div class="col-6 alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            {{ $error }}
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif

        @if (session()->has('success'))
            <div class="row text-center justify-content-center">
                <div class="col-6 alert alert-success">
                    {{ session()->get('success') }}
                </div>
            </div>
        @endif

        <div>
            @yield('content')
        </div>

    </div>



    @livewireScripts
    
    {{-- Bootstrap JS CDN --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

</body>

</html>
