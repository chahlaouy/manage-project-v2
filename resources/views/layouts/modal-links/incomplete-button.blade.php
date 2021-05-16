{{-- InComplete button --}}
<div class="rounded flex items-center p-2 mr-3 {{ $task->incompleted ? 'text-red-700 bg-red-300' : 'text-gray-500 bg-gray-200'}}">
    <span class="block w-5 mr-1">
        <svg viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <g id="Page-1" stroke="none" stroke-width="1" class="fill-current {{ $task->incompleted ? 'text-red-700' : 'text-gray-400'}} " fill-rule="evenodd">
                <g id="icon-shape">
                    <path d="M10,20 C15.5228475,20 20,15.5228475 20,10 C20,4.4771525 15.5228475,0 10,0 C4.4771525,0 0,4.4771525 0,10 C0,15.5228475 4.4771525,20 10,20 Z M15,9 L15,11 L5,11 L5,9 L15,9 Z" id="Combined-Shape-Copy"></path>
                </g>
            </g>
        </svg>
        
        
    </span>
    <span class="font-bold">
        {{ __('To Do')}} 

    </span>
</div>