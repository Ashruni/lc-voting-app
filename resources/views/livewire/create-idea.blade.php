<div>
    {{-- The Master doesn't talk, he acts. --}}

    <form action="#" wire:submit.prevent="CreateIdea" method="POST" class="text-sm spacer-y-4 px-4 p-10">
                    <div>
                        <input wire:model.defer="title" type="text" class="w-full bg-gray-100  rounded-xl border-none placeholder-gray-900 px-4 p-2" placeholder="Your ideas">
                        </input>
                        @error('title')
                            <p class= "text-red text-xs mt-1">{{$message}}</p>
                        @enderror

                    </div>

                    <div>
                        <select wire:model.defer="category" name="category_add" id="category_add" class="w-full rounded-xl  bg-gray-100 mt-2 border-none px-4 py-2 form-select">
                            @foreach($categories as $category)
                                <option  value="{{ $category->id }}">{{$category->name}}</option>

                            @endforeach
                            @error('category')
                                <p class= "text-red text-xs mt-1">{{$message}}</p>
                            @enderror

                        </select>
                        <div>
                            <textarea id="idea" wire:model.defer="description" name="idea" cols="30" row=""  class="w-full bg-gray-100  rounded-xl border-none placeholder-gray-900 px-4 p-2 mt-2" placeholder="Description"> </textarea>
                            @error('description')
                                 <p class= "text-red text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="flex items-center justify-between space-x-3">
                        <button type="button" class="flex items-center justify-center w-1/2 h-11 text-xs bg-gray-200 font-semibold rounded-xl border border-gray-200 hover:border-gray-400 transition duration-150 ease-in px-6 py-3">
                            <svg class="text-gray-600 w-4 transform- rotate-15" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m18.375 12.739-7.693 7.693a4.5 4.5 0 0 1-6.364-6.364l10.94-10.94A3 3 0 1 1 19.5 7.372L8.552 18.32m.009-.01-.01.01m5.699-9.941-7.81 7.81a1.5 1.5 0 0 0 2.112 2.13" />
                            </svg>

                            <span> Attach </span>
                        </button>

                        <button type="submit" class="flex items-center justify-center w-1/2 h-11 text-xs bg-blue font-semibold rounded-xl border border-blue hover:blue-hover transition duration-150 ease-in px-6 py-3 text-white">


                            <span>submit</span>
                        </button>


                    </div>
                    <div>
                        @if(session('success_message'))
                        <div x-data="{isVisible:true}"
                        x-init="setTimeout(()=>{isVisible = false},5000)"
                        x-show.transition.duration.1000ms="isVisible"
                        class="text-green mt-4">
                            {{ session('success_message') }}
                        </div>
                        @endif
                    </div>



                </form>


</div>
