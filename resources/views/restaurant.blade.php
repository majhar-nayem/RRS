@extends('app')

    @section('content')
            <!-- restaurant content start -->
            <div class="w-full py-4 mt-8 border border-t-0 border-b-0">
            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                <div id="homeNavbar" class="middle-column-header border border-t-0 border-r-0 bg-white border-l-0 ">
                    <div class="inner px-3 py-3 ">
                        <div class="flex">
                            <div class="w-1/2">
                                <div class="inner mt-2">
                                    <a href="" class="text-xl font-bold text-primary">Restaurants</a>
                                </div>
                            </div>
                            <div class="w-1/2">
                                <div class="inner text-right relative ">
                                    <a href="{{ url('user/restaurant-add') }}" class="bg-blue-500 clearfix w-auto p-2 px-4 mt-2 transition-3 inline-block rounded-full">
                                        <span class="name float-left pl-5 font-bold text-white text-md">Add New</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Name
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Address
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Type
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Ratings
                        </th>

                    </tr>
                    </thead>
                    @foreach($restaurants as $restaurant)
                    <tbody class="bg-white divide-y divide-gray-200">
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="ml-4">
                                    <div class="text-sm font-medium text-gray-900">
                                        {{ $restaurant->name }}
                                    </div>

                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">{{ $restaurant->area }}</div>
                            <div class="text-sm text-gray-500">{{ $restaurant->address }}</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                  {{ $restaurant->type }}
                </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            {{ $restaurant->ratings }} out of 5
                        </td>

                    </tr>

                    <!-- More rows... -->
                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>
            <!--restaurant content end -->
    @endsection
