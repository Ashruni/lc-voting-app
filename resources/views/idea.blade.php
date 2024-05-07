<x-app-layout class="flex justify-center ml-4"><br>
    <div style="margin-left:-570px;">
        <a href="#" class="flex items-center font-semibold hover:underline">
            <svg fill="none" viewBox="0 0 39 39" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 15 3 9m0 0 6-6M3 9h12a6 6 0 0 1 0 12h-3" />
            </svg>
            <span >All Ideas</span>
        </a>
    </div>


    <div class="ideas-container  space-y-6 my-6">
            <div class="idea-container  bg-white  rounded-xl flex mt-4">
            <div class="border-r  border-gray-100 px-5 py-8 flex shadow-2xl rounded-lg" style="margin-left:-530px;margin-top:80px; ">
                <div>
                    <!-- <div>
                        <div class="font-semibold text-2xl">12</div>
                        <div class="text-gray-500">Votes</div>
                    </div> -->
                    <div class="mt-8">
                        <button class="w-20 bg-gray-200 border border-gray-200 hover:border-gray-400 font-bold text-xs uppercase rounded-xl transition duration-150 ease-in px-4 py-3">votes</button>

                    </div>
                </div>
                <div class="flex flex-1 px-4 py-6">
                    <div class="flex flex-none">
                    <a href="#">
                        <img src="https://tse1.mm.bing.net/th?id=OIP.srNFFzORAaERcWvhwgPzVAHaHa&pid=Api&P=0&h=220" alt="avatar" class="w-14 ht-14 rounded-xl">
                    </a>
                    </div>
                    <div class="mx-4">
                        <h4 class="text-xl font-semibold">
                            <a href="#" class="hover:underline"></a>
                        </h4>
                        <div class="text-gray-600 mt-3 max-w-[350px]">
                            {{$idea->title}}
                        </div>
                        <div class="flex items-center justify-between mt-6">
                            <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div class="font-bold text-gray-900">  joe </div>
                            <div>{{ $idea->created_at->diffForHumans() }}</div>
                                <div>bull;</div>
                                <div>{{$idea->category->name}}</div>
                                
                                <div class="text-gray-900">3 comments</div>
                            </div>
                            <div class="flex items-center space-x-2">
                                <div class="bg-gray-200 text-xs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">Open</div>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" className="w-6 h-6">
                                    <path strokeLinecap="round" strokeLinejoin="round" d="M6.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM12.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM18.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                                </svg>

                                <ul class="absolute w-27 font-semibold bg-white shadow-lg rounded-xl py-3" style="margin-left:120px;">
                                    <li><a href="#" class="hover:bg-gray-100 block transition duration-150 ease-in px-5 py-3">Mark as spam</a></li>
                                    <li><a href="#" class="hover:bg-gray-100 block transition duration-150 ease-in px-5 py-3">delete Post</a></li>
                                </ul>


                            </div>


                        </div>


                    </div>

                </div>
            </div>
<!--
            <div class="buttons-container flex items-center justify-between mt-6">
            <button type="button" class="flex items-center justify-center w-1/2 h-11 text-xs bg-gray-200 font-semibold rounded-xl border border-gray-200 hover:border-gray-400 transition duration-150 ease-in px-6 py-3">
                            <svg class="text-gray-600 w-4 transform- rotate-15" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m18.375 12.739-7.693 7.693a4.5 4.5 0 0 1-6.364-6.364l10.94-10.94A3 3 0 1 1 19.5 7.372L8.552 18.32m.009-.01-.01.01m5.699-9.941-7.81 7.81a1.5 1.5 0 0 0 2.112 2.13" />
                            </svg>

                            <span > Reply </span>
                        </button>
            </div> -->
</x-app-layout>
