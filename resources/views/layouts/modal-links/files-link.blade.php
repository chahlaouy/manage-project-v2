{{-- Files link  --}}
<div class="rounded flex items-center p-2 mr-3 cursor-pointer" 
:class="filesActive ? 'bg-purple-500 text-gray-100' : 'text-gray-500 bg-gray-200'" 
x-on:click="
    descActive = false; 
    imagesActive = false;
    subtaskActive = false; 
    attachActive = false
    filesActive = true; 
">
<span class="block w-5 mr-1">
    <svg viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <g id="Page-1" stroke="none" stroke-width="1"  :class="filesActive ? 'fill-current text-gray-100' : 'fill-current text-gray-400'" fill-rule="evenodd">
            <g id="icon-shape">
                <path d="M4,18 L4,2 L12,2 L12,6 L16,6 L16,18 L4,18 Z M2,19 L2,0 L3,0 L12,0 L14,0 L18,4 L18,6 L18,20 L17,20 L2,20 L2,19 Z" id="Combined-Shape"></path>
            </g>
        </g>
    </svg>
    
</span>
<span class="font-bold">
    {{ __('Associated files')}} 

</span>
</div>