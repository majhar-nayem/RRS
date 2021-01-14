<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<form action="{{ route('register') }}" method="post">
<div class="py-20 h-screen bg-gray-300 px-2">
    <div class="max-w-md mx-auto bg-white rounded-lg overflow-hidden md:max-w-md">
        <div class="md:flex">
            @csrf
            <div class="w-full p-3 px-6 py-10">
                <div class="text-center"> <span class="text-xl text-gray-700">Registration Form</span> </div>
                <div class="mt-3 relative">
                    <input name="name" type="text" class="h-12 px-2 w-full border-2 rounded focus:outline-none focus:border-blue-600" placeholder="Name">
                    @error('name')
                    <span class="text-red-400" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
                <div class="mt-4 relative">
                    <input name="email" type="email" class="h-12 px-2 w-full border-2 rounded focus:outline-none focus:border-blue-600" placeholder="email">
                    @error('email')
                    <span class="text-red-400" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
                <div class="mt-4 relative">
                    <input name="password" type="password" class="h-12 px-2 w-full border-2 rounded focus:outline-none focus:border-blue-600" placeholder="password">
                    @error('password')
                    <span class="text-red-400" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
                <div class="mt-4 relative">  <input name="password_confirmation" type="password" class="h-12 px-2 w-full border-2 rounded focus:outline-none focus:border-blue-600" placeholder="confirm password"> </div>
                <div class="mt-4"> <button type="submit" class="h-12 w-full bg-blue-600 text-white rounded hover:bg-blue-700">Register</button> </div>
            </div>

        </div>
    </div>
</div>
    </form>
</body>
<script src='https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js'></script>
</html>
