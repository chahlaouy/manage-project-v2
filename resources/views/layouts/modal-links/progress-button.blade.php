 {{-- Progress button --}}
 <div class="rounded flex items-center p-2 mr-3 {{ $task->in_progress ? 'text-yellow-700 bg-yellow-300' : 'text-gray-500 bg-gray-200'}} ">
    <span class="block w-5 mr-1">
        <svg viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <g id="Page-1" stroke="none" stroke-width="1" class="fill-current {{ $task->in_progress ? 'text-yellow-700' : 'text-gray-400 '}} " fill-rule="evenodd">
                <g id="icon-shape">
                    <path d="M2.92893219,17.0710678 C6.83417511,20.9763107 13.1658249,20.9763107 17.0710678,17.0710678 C20.9763107,13.1658249 20.9763107,6.83417511 17.0710678,2.92893219 C13.1658249,-0.976310729 6.83417511,-0.976310729 2.92893219,2.92893219 C-0.976310729,6.83417511 -0.976310729,13.1658249 2.92893219,17.0710678 L2.92893219,17.0710678 Z M15.6568542,15.6568542 C18.7810486,12.5326599 18.7810486,7.46734008 15.6568542,4.34314575 C12.5326599,1.21895142 7.46734008,1.21895142 4.34314575,4.34314575 C1.21895142,7.46734008 1.21895142,12.5326599 4.34314575,15.6568542 C7.46734008,18.7810486 12.5326599,18.7810486 15.6568542,15.6568542 Z M7,6 L15,10 L7,14 L7,6 Z" id="Combined-Shape"></path>
                </g>
            </g>
        </svg>
        
    </span>
    <span class="font-bold">
        {{ __('In progress')}} 

    </span>
</div>