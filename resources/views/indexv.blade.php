<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>


          @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Loginmmmm</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Revvgister</a>
                        @endif
                    @endif
                </div>
            @endif 

<h1>This is a Heading</h1>
<p>This is a paragraph.</p>

</body>
</html>
