<div>
    <div class="flex items-center mb-8" x-data="{myTasks : true, recentlyUpdated: false}">
        {{-- button search --}}
        <x-button-search>
            <x-slot name="input">
                <input class="block px-2 py-3 text-xs relative z-10 flex-1 rounded-l-md border-gray-200 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="{{__('Search')}}" type="search">
            </x-slot>
        </x-button-search>
        <div class="rounded flex items-center p-2 ml-2" :class="myTasks ? 'bg-purple-500 text-gray-100' : 'text-gray-500 bg-gray-200'">
            <span class="block w-5 mr-1">
                <svg viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g id="Page-1" stroke="none" stroke-width="1" :class="myTasks ? 'fill-current text-gray-100' : 'fill-current text-gray-400'" fill-rule="evenodd">
                        <g id="icon-shape">
                            <path d="M2,1.99079514 C2,0.891309342 2.89451376,0 3.99406028,0 L16.0059397,0 C17.1072288,0 18,0.898212381 18,1.99079514 L18,20 L10,16 L2,20 L2,1.99079514 Z" id="Rectangle-373"></path>							
                        </g>
                    </g>
                </svg>
               
            </span>
            <span class="font-bold">
                {{__('Only my tasks')}}
            </span>
        </div>
        <div class="rounded flex items-center p-2 ml-2" :class="recentlyUpdated ? 'bg-purple-500 text-gray-100' : 'text-gray-500 bg-gray-200'">
            <span class="block w-5 mr-1">
                <svg viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g id="Page-1" stroke="none" stroke-width="1" :class="recentlyUpdated ? 'fill-current text-gray-100' : 'fill-current text-gray-400'" fill-rule="evenodd">
                        <g id="icon-shape">
                            <path d="M10,3 C6.13400675,3 3,6.13400675 3,10 C3,11.9329966 3.78350169,13.6829966 5.05025253,14.9497475 L6.46446609,13.5355339 C5.55964406,12.6307119 5,11.3807119 5,10 C5,7.23857625 7.23857625,5 10,5 L10,3 L10,3 Z M14.9497475,5.05025253 C16.2164983,6.31700338 17,8.06700338 17,10 C17,13.8659932 13.8659932,17 10,17 L10,15 C12.7614237,15 15,12.7614237 15,10 C15,8.61928813 14.4403559,7.36928813 13.5355339,6.46446609 L14.9497475,5.05025253 L14.9497475,5.05025253 Z M10,20 L6,16 L10,12 L10,20 L10,20 Z M10,8 L14,4 L10,0 L10,8 L10,8 Z" id="Combined-Shape"></path>
                        </g>
                    </g>
                </svg>
            </span>
            <span class="font-bold">
                {{__('Recently updated')}}
            </span>
        </div>
        
    </div>
    <livewire:tasks :project="$project"/>
</div>