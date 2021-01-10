@extends('app')

    @section('content')
        <!-- middle colulmn start -->
        <div class="w-full py-0 border border-t-0 border-b-0 ">

            <!-- middle column header start -->
            <div id="homeNavbar" class="middle-column-header border border-t-0 border-r-0 bg-white border-l-0">
                <div class="inner px-3 py-3">
                    <div class="flex">
                        <div class="w-1/2">
                            <div class="inner">
                                <a href="" class="text-xl font-bold text-black">Home</a>
                            </div>
                        </div>
                        <div class="w-1/2">
                            <div class="inner text-right relative">
                                        <span class="magic-icon w-10 twitter-color right-0 top-0 absolute rounded-full cursor-pointer p-2 transition-3 twitter-light-blue-on-hover">
                                            <svg viewBox="0 0 24 24" class="r-13gxpu9 r-4qtqp9 r-yyyyoo r-1q142lx r-50lct3 r-dnmrzs r-bnwqim r-1plcrui r-lrvibr"><g><path d="M22.772 10.506l-5.618-2.192-2.16-6.5c-.102-.307-.39-.514-.712-.514s-.61.207-.712.513l-2.16 6.5-5.62 2.192c-.287.112-.477.39-.477.7s.19.585.478.698l5.62 2.192 2.16 6.5c.102.306.39.513.712.513s.61-.207.712-.513l2.16-6.5 5.62-2.192c.287-.112.477-.39.477-.7s-.19-.585-.478-.697zm-6.49 2.32c-.208.08-.37.25-.44.46l-1.56 4.695-1.56-4.693c-.07-.21-.23-.38-.438-.462l-4.155-1.62 4.154-1.622c.208-.08.37-.25.44-.462l1.56-4.693 1.56 4.694c.07.212.23.382.438.463l4.155 1.62-4.155 1.622zM6.663 3.812h-1.88V2.05c0-.414-.337-.75-.75-.75s-.75.336-.75.75v1.762H1.5c-.414 0-.75.336-.75.75s.336.75.75.75h1.782v1.762c0 .414.336.75.75.75s.75-.336.75-.75V5.312h1.88c.415 0 .75-.336.75-.75s-.335-.75-.75-.75zm2.535 15.622h-1.1v-1.016c0-.414-.335-.75-.75-.75s-.75.336-.75.75v1.016H5.57c-.414 0-.75.336-.75.75s.336.75.75.75H6.6v1.016c0 .414.335.75.75.75s.75-.336.75-.75v-1.016h1.098c.414 0 .75-.336.75-.75s-.336-.75-.75-.75z"></path></g></svg>
                                        </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- middle column header end -->



            <!-- new tweet textarea start -->
            <div class="new-tweet-textarea p-3 pb-0">
                <div class="flex">
                    <div class="w-full">
                        <form action="{{ url('/user/post') }}" method="POST">
                            @csrf
                            <div class="px-1 mt-4">
                                <select class="p-2 rounded-md" name="restaurant_id">
                                    <option value="{{ null }}">Select The Restaurant(Optional)</option>
                                    @foreach($restaurants as $restaurant)
                                        <option value="{{ $restaurant->id }}">
                                            <span>{{ $restaurant->name }}</span>
                                        </option>
                                    @endforeach
                                </select>

                            </div>
                            <div class="textarea px-2 mt-6">
                                <textarea name="comment" class="w-full h-15 focus:outline-none resize-none" placeholder="What's your experience?" rows="4"></textarea>
                            </div>
                            <div class="textarea-footer">
                                <div class="flex">
                                    <div class="w-full">
                                        <div class="inner">
                                            <ul class="clearfix twitter-color mt-1">
                                                <li class="float-left">
                                                        <span class="w-10 h-10 twitter-light-blue-on-hover p-2 rounded-full cursor-pointer">
                                                            <svg viewBox="0 0 24 24" class="r-13gxpu9 r-4qtqp9 r-yyyyoo r-1q142lx r-50lct3 r-dnmrzs r-bnwqim r-1plcrui r-lrvibr"><g><path d="M20.222 9.16h-1.334c.015-.09.028-.182.028-.277V6.57c0-.98-.797-1.777-1.778-1.777H3.5V3.358c0-.414-.336-.75-.75-.75s-.75.336-.75.75V20.83c0 .415.336.75.75.75s.75-.335.75-.75v-1.434h10.556c.98 0 1.778-.797 1.778-1.777v-2.313c0-.095-.014-.187-.028-.278h4.417c.98 0 1.778-.798 1.778-1.778v-2.31c0-.983-.797-1.78-1.778-1.78zM17.14 6.293c.152 0 .277.124.277.277v2.31c0 .154-.125.28-.278.28H3.5V6.29h13.64zm-2.807 9.014v2.312c0 .153-.125.277-.278.277H3.5v-2.868h10.556c.153 0 .277.126.277.28zM20.5 13.25c0 .153-.125.277-.278.277H3.5V10.66h16.722c.153 0 .278.124.278.277v2.313z"></path></g></svg>
                                                        </span>
                                                </li>
                                                <li class="float-left">
                                                        <span class="w-10 h-10 twitter-light-blue-on-hover p-2 rounded-full cursor-pointer">
                                                                <svg viewBox="0 0 24 24" class="r-13gxpu9 r-4qtqp9 r-yyyyoo r-1q142lx r-50lct3 r-dnmrzs r-bnwqim r-1plcrui r-lrvibr"><g><path d="M12 22.75C6.072 22.75 1.25 17.928 1.25 12S6.072 1.25 12 1.25 22.75 6.072 22.75 12 17.928 22.75 12 22.75zm0-20C6.9 2.75 2.75 6.9 2.75 12S6.9 21.25 12 21.25s9.25-4.15 9.25-9.25S17.1 2.75 12 2.75z"></path><path d="M12 17.115c-1.892 0-3.633-.95-4.656-2.544-.224-.348-.123-.81.226-1.035.348-.226.812-.124 1.036.226.747 1.162 2.016 1.855 3.395 1.855s2.648-.693 3.396-1.854c.224-.35.688-.45 1.036-.225.35.224.45.688.226 1.036-1.025 1.594-2.766 2.545-4.658 2.545z"></path><circle cx="14.738" cy="9.458" r="1.478"></circle><circle cx="9.262" cy="9.458" r="1.478"></circle></g></svg>
                                                        </span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="w-full">
                                        <div class="inner">
                                            <ul class="flex items-center justify-end">
                                                <li class="inline-block">
                                                    <span class="w-5 h-5 border-2 border-solid border-gray-500 rounded-full"></span>
                                                </li>
                                                <li class="inline-block">
                                                    <span class="border block border-solid border-gray-500 text-transparent border-t-0 border-l-0 border-b-0 w-1 h-8 mx-3 mb-1">.</span>
                                                </li>

                                                <li class="inline-block mr-1">
                                                        <span class="w-8 border p-1 twitter-border-color-light twitter-color-light rounded-full">
                                                               <svg viewBox="0 0 24 24" class="r-13gxpu9 r-4qtqp9 r-yyyyoo r-1q142lx r-50lct3 r-dnmrzs r-bnwqim r-1plcrui r-lrvibr"><g><path d="M19.75 11H13V4.25c0-.553-.447-1-1-1s-1 .447-1 1V11H4.25c-.553 0-1 .447-1 1s.447 1 1 1H11v6.75c0 .553.447 1 1 1s1-.447 1-1V13h6.75c.553 0 1-.447 1-1s-.447-1-1-1z"></path></g></svg>

                                                        </span>
                                                </li>

                                                <li class="text-right m-1 mb-2">
                                                        <span class="w-20 inline-block">
                                                            <button type="submit" class="p-3 py-2 twitter-bg text-white w-full rounded-full font-bold tracking-wide ">Post</button>
                                                        </span>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- new tweet textarea end -->


            <div class="hr-bar">
                <hr class="block h-3 w-full">
            </div>



            <!-- tweets wrapper start -->
            <div class="tweets-wrapper">
                <div class="innner">

                @foreach($posts as $post)
                    <!-- post start -->
                        <div class="tweet cursor-pointer hover:bg-gray-100 transition-3 border border-l-0 border-r-0 border-t-0 p-4 pb-0">
                            <div class="flex">
                                <div class="w-auto">
                                    <!-- tweet user img start -->
                                    <div class="tweet-user-img">
                                            <span class="w-12 rounded-full overflow-hidden mr-2">
                                                <img src="https://pbs.twimg.com/profile_images/654628951109693440/SZd75JU3_bigger.jpg" alt="tweet user image">
                                            </span>
                                    </div>
                                    <!-- tweet user img end -->
                                </div>
                                <div class="w-full">
                                    <!-- tweet tweet start -->
                                    <div class="tweet-tweet">
                                        <!-- tweet info bar start -->
                                        <div class="tweet-info-bar flex items-center ">

                                            <!-- post username start -->
                                            <span class="tweet-username relative block">
                                                @if(!is_null($post->user))
                                                    <a href="#" class="hover:underline text-gray-900 font-bold text-base mr-1">{{ $post->user->name }}</a>
                                                @else
                                                    <a href="#" class="hover:underline text-gray-900 font-bold text-base mr-1">Anonymous User</a>
                                                @endif
                                                    <span class="w-4 inline-block twitter-color verified">
                                                        <svg viewBox="0 0 24 24" aria-label="Verified account" class="r-13gxpu9 r-4qtqp9 r-yyyyoo r-1xvli5t r-9cviqr r-dnmrzs r-bnwqim r-1plcrui r-lrvibr"><g><path d="M22.5 12.5c0-1.58-.875-2.95-2.148-3.6.154-.435.238-.905.238-1.4 0-2.21-1.71-3.998-3.818-3.998-.47 0-.92.084-1.336.25C14.818 2.415 13.51 1.5 12 1.5s-2.816.917-3.437 2.25c-.415-.165-.866-.25-1.336-.25-2.11 0-3.818 1.79-3.818 4 0 .494.083.964.237 1.4-1.272.65-2.147 2.018-2.147 3.6 0 1.495.782 2.798 1.942 3.486-.02.17-.032.34-.032.514 0 2.21 1.708 4 3.818 4 .47 0 .92-.086 1.335-.25.62 1.334 1.926 2.25 3.437 2.25 1.512 0 2.818-.916 3.437-2.25.415.163.865.248 1.336.248 2.11 0 3.818-1.79 3.818-4 0-.174-.012-.344-.033-.513 1.158-.687 1.943-1.99 1.943-3.484zm-6.616-3.334l-4.334 6.5c-.145.217-.382.334-.625.334-.143 0-.288-.04-.416-.126l-.115-.094-2.415-2.415c-.293-.293-.293-.768 0-1.06s.768-.294 1.06 0l1.77 1.767 3.825-5.74c.23-.345.696-.436 1.04-.207.346.23.44.696.21 1.04z"></path></g></svg>
                                                    </span>

                                                </span>
                                            <!-- post user name end -->

                                            <span class="text-gray-600 text-base font-light tracking-wide inline-block ml-1">{{ $post->restaurent->name ?? null }}</span>
                                            <span class="inline-block ml-1">·</span>
                                            <span class="text-gray-600 text-base font-light tracking-wide inline-block ml-1">{{ $post->created_at->diffForHumans() }}</span>
                                        </div>
                                        <!-- tweet info bar end -->
                                        <!-- tweet detail start -->
                                        <div class="tweet-detail">
                                            <p>
                                                {{ $post->comment }}
                                            </p>
                                        </div>
                                        <!-- tweet detail end -->
                                    @if(!is_null($post->image))
                                        <!-- tweet images start -->
                                            <div class="tweet-images py-3 pb-1">
                                                <span class="inline-block rounded-lg overflow-hidden h-64 shadow">
                                                    <img class="h-64 object-cover object-bottom w-full" src="{{ $post->image }}" alt="tweet image">
                                                </span>
                                            </div>
                                            <!-- tweet images end -->
                                    @endif

                                    <!-- tweet footer start -->
                                        <div class="tweet-footer">
                                            <div class="inner flex">

                                                <div class="inline-block w-full">
                                                    <div class="inline-flex ficon-wrapper comment text-gray-600">
                                                            <span class="ficon comment rounded-full">
                                                                <svg viewBox="0 0 24 24" class="r-4qtqp9 r-yyyyoo r-1xvli5t r-dnmrzs r-bnwqim r-1plcrui r-lrvibr r-1hdv0qi"><g><path d="M14.046 2.242l-4.148-.01h-.002c-4.374 0-7.8 3.427-7.8 7.802 0 4.098 3.186 7.206 7.465 7.37v3.828c0 .108.044.286.12.403.142.225.384.347.632.347.138 0 .277-.038.402-.118.264-.168 6.473-4.14 8.088-5.506 1.902-1.61 3.04-3.97 3.043-6.312v-.017c-.006-4.367-3.43-7.787-7.8-7.788zm3.787 12.972c-1.134.96-4.862 3.405-6.772 4.643V16.67c0-.414-.335-.75-.75-.75h-.396c-3.66 0-6.318-2.476-6.318-5.886 0-3.534 2.768-6.302 6.3-6.302l4.147.01h.002c3.532 0 6.3 2.766 6.302 6.296-.003 1.91-.942 3.844-2.514 5.176z"></path></g></svg>
                                                            </span>
                                                        <span class="px-1 inline-block ficon-text font-normal"> 29 </span>
                                                    </div>
                                                </div>

                                                <div class="inline-block w-full">
                                                    <div class="inline-flex ficon-wrapper retweet text-gray-600">
                                                            <span class="ficon retweet rounded-full">
                                                                <svg viewBox="0 0 24 24" class="r-4qtqp9 r-yyyyoo r-1xvli5t r-dnmrzs r-bnwqim r-1plcrui r-lrvibr r-1hdv0qi"><g><path d="M23.77 15.67c-.292-.293-.767-.293-1.06 0l-2.22 2.22V7.65c0-2.068-1.683-3.75-3.75-3.75h-5.85c-.414 0-.75.336-.75.75s.336.75.75.75h5.85c1.24 0 2.25 1.01 2.25 2.25v10.24l-2.22-2.22c-.293-.293-.768-.293-1.06 0s-.294.768 0 1.06l3.5 3.5c.145.147.337.22.53.22s.383-.072.53-.22l3.5-3.5c.294-.292.294-.767 0-1.06zm-10.66 3.28H7.26c-1.24 0-2.25-1.01-2.25-2.25V6.46l2.22 2.22c.148.147.34.22.532.22s.384-.073.53-.22c.293-.293.293-.768 0-1.06l-3.5-3.5c-.293-.294-.768-.294-1.06 0l-3.5 3.5c-.294.292-.294.767 0 1.06s.767.293 1.06 0l2.22-2.22V16.7c0 2.068 1.683 3.75 3.75 3.75h5.85c.414 0 .75-.336.75-.75s-.337-.75-.75-.75z"></path></g></svg>
                                                            </span>
                                                        <span class="px-1 inline-block ficon-text font-normal"> 342 </span>
                                                    </div>
                                                </div>

                                                <div class="inline-block w-full">
                                                    <div class="inline-flex ficon-wrapper like text-gray-600">
                                                            <span class="ficon like rounded-full">
                                                                <svg viewBox="0 0 24 24" class="r-4qtqp9 r-yyyyoo r-1xvli5t r-dnmrzs r-bnwqim r-1plcrui r-lrvibr r-1hdv0qi"><g><path d="M12 21.638h-.014C9.403 21.59 1.95 14.856 1.95 8.478c0-3.064 2.525-5.754 5.403-5.754 2.29 0 3.83 1.58 4.646 2.73.814-1.148 2.354-2.73 4.645-2.73 2.88 0 5.404 2.69 5.404 5.755 0 6.376-7.454 13.11-10.037 13.157H12zM7.354 4.225c-2.08 0-3.903 1.988-3.903 4.255 0 5.74 7.034 11.596 8.55 11.658 1.518-.062 8.55-5.917 8.55-11.658 0-2.267-1.823-4.255-3.903-4.255-2.528 0-3.94 2.936-3.952 2.965-.23.562-1.156.562-1.387 0-.014-.03-1.425-2.965-3.954-2.965z"></path></g></svg>
                                                            </span>
                                                        <span class="px-1 inline-block ficon-text font-normal"> 1567 </span>
                                                    </div>
                                                </div>

                                                <div class="inline-block w-full">
                                                    <div class="inline-flex ficon-wrapper send text-gray-600">
                                                            <span class="ficon send rounded-full">
                                                                <svg viewBox="0 0 24 24" class="r-4qtqp9 r-yyyyoo r-1xvli5t r-dnmrzs r-bnwqim r-1plcrui r-lrvibr r-1hdv0qi"><g><path d="M17.53 7.47l-5-5c-.293-.293-.768-.293-1.06 0l-5 5c-.294.293-.294.768 0 1.06s.767.294 1.06 0l3.72-3.72V15c0 .414.336.75.75.75s.75-.336.75-.75V4.81l3.72 3.72c.146.147.338.22.53.22s.384-.072.53-.22c.293-.293.293-.767 0-1.06z"></path><path d="M19.708 21.944H4.292C3.028 21.944 2 20.916 2 19.652V14c0-.414.336-.75.75-.75s.75.336.75.75v5.652c0 .437.355.792.792.792h15.416c.437 0 .792-.355.792-.792V14c0-.414.336-.75.75-.75s.75.336.75.75v5.652c0 1.264-1.028 2.292-2.292 2.292z"></path></g></svg>
                                                            </span>
                                                        <!-- <span class="px-1 inline-block ficon-text font-normal"> 3 </span> -->
                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                        <!-- tweet footer end -->
                                    </div>
                                    <!-- tweet tweet end -->
                                </div>
                            </div>
                        </div>
                        <!-- post end -->
                    @endforeach

                </div>
            </div>
            <!-- tweets wrapper end -->

        </div>
        <!-- middle colulmn end -->


        <!-- left colulmn start -->
        <div class="md:w-2/3 w-full px-4 py-0">

            <!-- inner start -->
            <div class="inner right-column" id="rightSide">

                <!-- block seach block start -->
                <div class="block search-block my-2">

                    <!-- form start -->
                    <form class="w-full max-w-sm">
                        <div class="flex items-center py-2 bg-gray-300 rounded-full search-input-wrappper">
                                    <span class="w-8 px-1 mx-2">
                                        <svg viewBox="0 0 24 24" class="r-1re7ezh r-4qtqp9 r-yyyyoo r-1xvli5t r-dnmrzs r-18qmn74 r-1hfyk0a r-bnwqim r-1plcrui r-lrvibr"><g><path d="M21.53 20.47l-3.66-3.66C19.195 15.24 20 13.214 20 11c0-4.97-4.03-9-9-9s-9 4.03-9 9 4.03 9 9 9c2.215 0 4.24-.804 5.808-2.13l3.66 3.66c.147.146.34.22.53.22s.385-.073.53-.22c.295-.293.295-.767.002-1.06zM3.5 11c0-4.135 3.365-7.5 7.5-7.5s7.5 3.365 7.5 7.5-3.365 7.5-7.5 7.5-7.5-3.365-7.5-7.5z"></path></g></svg>
                                    </span>
                            <input class="appearance-none search-input bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight font-normal focus:outline-none" type="text" placeholder="Search Twitter">
                        </div>
                    </form>
                    <!-- form end -->

                </div>
                <!-- block seach block end -->

                <!-- block trend block start -->
                <div class="block trend-block my-4 rounded-lg">

                    <!-- trend block header start -->
                    <div class="trend-block-header clearfix px-3 py-3">
                        <span class="float-left text-xl font-extrabold text-gray-900">Top 5 Restaurants</span>
                        <span class="w-8 float-right twitter-color rounded-full cursor-pointer p-1 transition-3 twitter-light-blue-on-hover">
                                    <svg viewBox="0 0 24 24" class="r-13gxpu9 r-4qtqp9 r-yyyyoo r-1q142lx r-50lct3 r-dnmrzs r-bnwqim r-1plcrui r-lrvibr"><g><path d="M12 8.21c-2.09 0-3.79 1.7-3.79 3.79s1.7 3.79 3.79 3.79 3.79-1.7 3.79-3.79-1.7-3.79-3.79-3.79zm0 6.08c-1.262 0-2.29-1.026-2.29-2.29S10.74 9.71 12 9.71s2.29 1.026 2.29 2.29-1.028 2.29-2.29 2.29z"></path><path d="M12.36 22.375h-.722c-1.183 0-2.154-.888-2.262-2.064l-.014-.147c-.025-.287-.207-.533-.472-.644-.286-.12-.582-.065-.798.115l-.116.097c-.868.725-2.253.663-3.06-.14l-.51-.51c-.836-.84-.896-2.154-.14-3.06l.098-.118c.186-.222.23-.523.122-.787-.11-.272-.358-.454-.646-.48l-.15-.014c-1.18-.107-2.067-1.08-2.067-2.262v-.722c0-1.183.888-2.154 2.064-2.262l.156-.014c.285-.025.53-.207.642-.473.11-.27.065-.573-.12-.795l-.094-.116c-.757-.908-.698-2.223.137-3.06l.512-.512c.804-.804 2.188-.865 3.06-.14l.116.098c.218.184.528.23.79.122.27-.112.452-.358.477-.643l.014-.153c.107-1.18 1.08-2.066 2.262-2.066h.722c1.183 0 2.154.888 2.262 2.064l.014.156c.025.285.206.53.472.64.277.117.58.062.794-.117l.12-.102c.867-.723 2.254-.662 3.06.14l.51.512c.836.838.896 2.153.14 3.06l-.1.118c-.188.22-.234.522-.123.788.112.27.36.45.646.478l.152.014c1.18.107 2.067 1.08 2.067 2.262v.723c0 1.183-.888 2.154-2.064 2.262l-.155.014c-.284.024-.53.205-.64.47-.113.272-.067.574.117.795l.1.12c.756.905.696 2.22-.14 3.06l-.51.51c-.807.804-2.19.864-3.06.14l-.115-.096c-.217-.183-.53-.23-.79-.122-.273.114-.455.36-.48.646l-.014.15c-.107 1.173-1.08 2.06-2.262 2.06zm-3.773-4.42c.3 0 .593.06.87.175.79.328 1.324 1.054 1.4 1.896l.014.147c.037.4.367.7.77.7h.722c.4 0 .73-.3.768-.7l.014-.148c.076-.842.61-1.567 1.392-1.892.793-.33 1.696-.182 2.333.35l.113.094c.178.148.366.18.493.18.206 0 .4-.08.546-.227l.51-.51c.284-.284.305-.73.048-1.038l-.1-.12c-.542-.65-.677-1.54-.352-2.323.326-.79 1.052-1.32 1.894-1.397l.155-.014c.397-.037.7-.367.7-.77v-.722c0-.4-.303-.73-.702-.768l-.152-.014c-.846-.078-1.57-.61-1.895-1.393-.326-.788-.19-1.678.353-2.327l.1-.118c.257-.31.236-.756-.048-1.04l-.51-.51c-.146-.147-.34-.227-.546-.227-.127 0-.315.032-.492.18l-.12.1c-.634.528-1.55.67-2.322.354-.788-.327-1.32-1.052-1.397-1.896l-.014-.155c-.035-.397-.365-.7-.767-.7h-.723c-.4 0-.73.303-.768.702l-.014.152c-.076.843-.608 1.568-1.39 1.893-.787.326-1.693.183-2.33-.35l-.118-.096c-.18-.15-.368-.18-.495-.18-.206 0-.4.08-.546.226l-.512.51c-.282.284-.303.73-.046 1.038l.1.118c.54.653.677 1.544.352 2.325-.327.788-1.052 1.32-1.895 1.397l-.156.014c-.397.037-.7.367-.7.77v.722c0 .4.303.73.702.768l.15.014c.848.078 1.573.612 1.897 1.396.325.786.19 1.675-.353 2.325l-.096.115c-.26.31-.238.756.046 1.04l.51.51c.146.147.34.227.546.227.127 0 .315-.03.492-.18l.116-.096c.406-.336.923-.524 1.453-.524z"></path></g></svg>
                                </span>
                    </div>
                    <!-- trend block header end -->

                    <hr class="h-px bg-gray-300">

                    <!-- trend list wrapper start -->
                    <div class="trend-list-wrapper">
                        <!-- trend list start -->
                        <ul class="trend-list">

                        @foreach($top_restaurants as $restaurant)
                            <!-- trend list item -->
                                <li class="trend-list-item">
                                    <!-- trend list link start -->
                                    <a href="" class="trend-list-link px-3 py-3 block">
                                        <span class="block text-base font-semibold mt-1 text-black"> {{ $restaurant['name'] }} </span>
                                        <span class="block text-sm font-normal text-gray-600">Ratings: {{ $restaurant->ratings }} out of 5 </span>
                                        <span class="block text-xs font-normal text-gray-600 clearfix mt-1">
                                                <img class="inline-block w-4 rounded-full float-left mr-2" src="https://pbs.twimg.com/profile_images/1170222681553162240/9ZaLRf3r_normal.jpg" alt="trending image" /> {{ $restaurant->rater_no }} people rate this restaurant
                                            </span>
                                    </a>
                                    <!-- trend list link end -->
                                </li>
                                <!-- trend list item end -->
                            @endforeach


                        </ul>
                        <!-- trend list end -->
                    </div>
                    <!-- trend list wrapper end -->
                </div>
                <!-- block trend block end -->



                <!-- block footer block start -->
                <div class="block footer-block my-2">

                    <!-- footer-block-list start -->
                    <ul class="footer-block-list clearfix w-4/5">


                        <!-- footer list item start -->
                        <li class="footer-list-item float-left">
                            <a class="footer-item-link inline-block px-2 py-1 text-gray-600 hover:underline" href="">Terms</a>
                        </li>
                        <!-- footer list item end -->

                        <!-- footer list item start -->
                        <li class="footer-list-item float-left ">
                            <a class="footer-item-link inline-block px-2 py-1 text-gray-600 hover:underline" href="">Privacy policy</a>
                        </li>
                        <!-- footer list item end -->

                        <!-- footer list item start -->
                        <li class="footer-list-item float-left ">
                            <a class="footer-item-link inline-block px-2 py-1 text-gray-600 hover:underline" href="">Cookies</a>
                        </li>
                        <!-- footer list item end -->

                        <!-- footer list item start -->
                        <li class="footer-list-item float-left ">
                            <a class="footer-item-link inline-block px-2 py-1 text-gray-600 hover:underline" href="">Ads info</a>
                        </li>
                        <!-- footer list item end -->

                        <!-- footer list item start -->
                        <li class="footer-list-item float-left ">
                            <a class="footer-item-link inline-block px-2 py-1 text-gray-600 hover:underline" href="">More
                                <span class="text-gray-800 text-sm">⌵</span>
                            </a>
                        </li>
                        <!-- footer list item end -->

                        <!-- footer list item start -->
                        <li class="footer-list-item float-left ">
                            <span class="footer-item-link inline-block px-2 py-1 text-gray-600">&copy; 2021 RRS Inc.</span>
                        </li>
                        <!-- footer list item end -->


                    </ul>
                    <!-- footer-block-list end -->

                </div>
                <!-- block footer block end -->


            </div>
            <!-- inner end -->

        </div>
        <!-- right colulmn end -->
    @endsection
