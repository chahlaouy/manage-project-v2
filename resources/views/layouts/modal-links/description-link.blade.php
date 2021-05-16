{{-- description link  --}}
<div 
class="rounded flex items-center p-2 mr-3 cursor-pointer" 
:class="descActive ? 'bg-purple-500 text-gray-100' : 'text-gray-500 bg-gray-200'" 
x-on:click="
    subtaskActive = false; 
    attachActive = false
    filesActive = false; 
    imagesActive = false;
    descActive = true; 
">
<span class="block w-5 mr-1">

    <svg viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <g id="Page-1" stroke="none" stroke-width="1" :class="descActive ? 'fill-current text-gray-100' : 'fill-current text-gray-400'" fill-rule="evenodd">
            <g id="icon-shape">
                <path d="M9,10 L7,10 L7,12 L9,12 L9,14 L11,14 L11,12 L13,12 L13,10 L11,10 L11,8 L9,8 L9,10 Z M4,18 L4,2 L12,2 L12,6 L16,6 L16,18 L4,18 Z M2,19 L2,0 L3,0 L12,0 L14,0 L18,4 L18,6 L18,20 L17,20 L2,20 L2,19 Z" id="Combined-Shape"></path>
            </g>
        </g>
    </svg>
</span>
<span class="font-bold">
    {{ __('Task descrption')}} 

</span>
</div>