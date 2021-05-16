{{-- attack link  --}}
<div class="rounded flex items-center p-2 mr-3 cursor-pointer" 
:class="attachActive ? 'bg-purple-500 text-gray-100' : 'text-gray-500 bg-gray-200'" 
x-on:click="
    descActive = false; 
    filesActive = false; 
    imagesActive = false;
    subtaskActive = false; 
    attachActive = true
">
<span class="block w-5 mr-1">

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" :class="attachActive ? 'fill-current text-gray-100' : 'fill-current text-gray-400'"><path d="M9.26 13a2 2 0 0 1 .01-2.01A3 3 0 0 0 9 5H5a3 3 0 0 0 0 6h.08a6.06 6.06 0 0 0 0 2H5A5 5 0 0 1 5 3h4a5 5 0 0 1 .26 10zm1.48-6a2 2 0 0 1-.01 2.01A3 3 0 0 0 11 15h4a3 3 0 0 0 0-6h-.08a6.06 6.06 0 0 0 0-2H15a5 5 0 0 1 0 10h-4a5 5 0 0 1-.26-10z"></path></svg>
</span>
<span class="font-bold">
    {{ __('Attach')}} 

</span>
</div>