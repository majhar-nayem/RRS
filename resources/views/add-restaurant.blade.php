@extends('app')

@section('content')
    <div class="w-full py-4 mt-8 ">
        <h1 class="font-bold mt-4 text-blue-500 text-xl">Add Restaurant</h1>
    <form action="{{ url('/user/save-restaurant') }}" method="POST" class="w-full max-w-lg mt-8">
        @csrf
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                    Restaurant Name
                </label>
                <input name="name" class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password" type="text" required placeholder="Restaurant Name">
            </div>
        </div>
        <div class="flex flex-wrap mb-6">
            <div class="w-full md:w-1/2 px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                   Type
                </label>
                <input name="type" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name"  type="text" placeholder="Type">
            </div>
            <div class="w-full md:w-1/2 px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                   Area
                </label>
                <input name="area" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" required type="text" placeholder="Area">
            </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                    Restaurant Address
                </label>
                <input name="address" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password" type="text" required placeholder="Restaurant Address">
            </div>
        </div>
        <div class="flex flex-wrap mb-2">
            <div class="w-full md:w-full px-3 mb-6 md:mb-0">
                <button type="submit" class="appearance-none block w-full bg-blue-500 hover:bg-blue-600  text-white text-bold border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                    Save Restaurant
                </button>
            </div>
        </div>
    </form>
    </div>

@endsection
