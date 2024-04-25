<x-app-layout>
    <div class="filters flex space-x-6">
        <div class="w-3/3" style="margin-left:-620px;">
            <select name="category" id="category" class="w-full rounded-xl border-none px-4 py-2 form-select">
                <option selected value="Category One">Category </option>
                <option value="Category One">Category One</option>
                <option value="Category Two">Category Two</option>
                <option value="Category Three">Category Three</option>

            </select>
        </div>



    </div>

    </div>

    <div class="ideas-container  space-y-6 my-6">
        <div class="idea-container  bg-white  bg-blue-200  rounded-xl flex">
            <div class="border-r hover:shadow-md transition duration-150 ease-in cursor-pointer border-gray-100 px-5 py-8 flex shadow-2xl rounded-lg" style="margin-left:-530px;margin-top:80px; ">
                <div>
                    <div>
                        <div class="font-semibold text-2xl">12</div>
                        <div class="text-gray-500">Votes</div>
                    </div>
                    <div class="mt-8">
                        <button class="w-20 bg-gray-200 border border-gray-200 hover:border-gray-400 font-bold text-xs uppercase rounded-xl transition duration-150 ease-in px-4 py-3">votes</button>

                    </div>
                </div>
                <div class="flex px-2 py-6">
                    <a href="#">
                        <img src="https://tse1.mm.bing.net/th?id=OIP.srNFFzORAaERcWvhwgPzVAHaHa&pid=Api&P=0&h=220" alt="avatar" class="w-14 ht-14 rounded-xl">
                    </a>
                    <div class="mx-4">
                        <h4 class="text-xl font-semibold">
                            <a href="#" class="hover:underline"></a>
                        </h4>
                        <div class="text-gray-600 mt-3 max-w-[350px]">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam ad ex ipsa molestiae! Harum libero nulla id, animi laboriosam corrupti distinctio at
                        </div>
                        <div class="flex items-center justify-between mt-6">
                            <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                                <div>10 hours ago</div>
                                <div>bull;</div>
                                <div>Category 1</div>
                                <div>bull;</div>
                                <div class="text-gray-900">3 comments</div>
                            </div>
                            <div class="flex items-center space-x-2">
                                <div class="bg-gray-200 text-xs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">Open</div>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" className="w-6 h-6">
                                    <path strokeLinecap="round" strokeLinejoin="round" d="M6.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM12.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0ZM18.75 12a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                                    </svg>

                                    <ul class="absolute w-27 font-semibold bg-white shadow-lg rounded-xl py-3" style="margin-left:120px;" >
                                    <li><a href="#" class="hover:bg-gray-100 block transition duration-150 ease-in px-5 py-3">Mark as spam</a></li>
                                    <li><a href="#" class="hover:bg-gray-100 block transition duration-150 ease-in px-5 py-3">delete Post</a></li>
                                </ul>


                            </div>


                        </div>


                    </div>

                </div>




            </div>


            ///
            

        </div>

    </div>
    </div>
</x-app-layout>
