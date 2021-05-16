{{-- subtask link  --}}
<div class="rounded flex items-center p-2 cursor-pointer" 
:class="subtaskActive ? 'bg-purple-500 text-gray-100' : 'text-gray-500 bg-gray-200'" 
x-on:click="
    descActive = false; 
    attachActive = false
    filesActive = false; 
    imagesActive = false;
    subtaskActive = true; 
">
    <span class="block w-5 mr-1">
        <svg viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <g id="Page-1" stroke="none" stroke-width="1"  :class="subtaskActive ? 'fill-current text-gray-100' : 'fill-current text-gray-400'" fill-rule="evenodd">
                <g id="icon-shape">
                    <path d="M10,1 L20,7 L10,13 L0,7 L10,1 Z M16.6666667,11 L20,13 L10,19 L0,13 L3.33333333,11 L10,15 L16.6666667,11 Z" id="Combined-Shape"></path>
                </g>
            </g>
        </svg>
    </span>
    <span class="font-bold">
        {{ __('Create subtask')}} 

    </span>
</div>