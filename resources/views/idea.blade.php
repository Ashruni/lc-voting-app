<x-app-layout class="flex justify-center ml-4"><br>
    <div style="margin-left:-570px;">
        <a href="#" class="flex items-center font-semibold hover:underline">
            <svg fill="none" viewBox="0 0 39 39" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 15 3 9m0 0 6-6M3 9h12a6 6 0 0 1 0 12h-3" />
            </svg>
            <span >All Ideas</span>
        </a>
    </div>


    <livewire:show-ideas :idea="$idea" :voteCount="$voteCount" />
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
