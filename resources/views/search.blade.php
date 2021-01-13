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
                        <!-- block seach block start -->
                        <div class="block search-block my-2 w-full">

                            <!-- form start -->
                            <form action="{{ url('search') }}" method="POST" class="w-full max-w-sm">
                                @csrf
                                <div class="flex items-center py-2 bg-gray-300 rounded-full search-input-wrappper">
                                    <span class="w-8 px-1 mx-2">
                                        <svg viewBox="0 0 24 24" class="r-1re7ezh r-4qtqp9 r-yyyyoo r-1xvli5t r-dnmrzs r-18qmn74 r-1hfyk0a r-bnwqim r-1plcrui r-lrvibr"><g><path d="M21.53 20.47l-3.66-3.66C19.195 15.24 20 13.214 20 11c0-4.97-4.03-9-9-9s-9 4.03-9 9 4.03 9 9 9c2.215 0 4.24-.804 5.808-2.13l3.66 3.66c.147.146.34.22.53.22s.385-.073.53-.22c.295-.293.295-.767.002-1.06zM3.5 11c0-4.135 3.365-7.5 7.5-7.5s7.5 3.365 7.5 7.5-3.365 7.5-7.5 7.5-7.5-3.365-7.5-7.5z"></path></g></svg>
                                    </span>
                                    <input name="value" class="appearance-none search-input bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight font-normal focus:outline-none" type="text" placeholder="Search Restaurant by name, location or type">
                                </div>
                            </form>
                            <!-- form end -->

                        </div>
                        <!-- block seach block end -->
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
                @if(is_null($restaurants))
                    <h1 class="text-bold lni-text-align-center">No restaurant Found</h1>
                @endif
            </table>
        </div>
    </div>
    <!--restaurant content end -->
@endsection

