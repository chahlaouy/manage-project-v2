<div class="bg-gray-100 py-4 relative shadow-md rounded p-4 mt-4">
                
    <h3 class="text-lg font-bold mb-8"> {{ __('Activity feed') }} </h3>

    <div>
        <ul>
            @forelse ($activities as $activity)
                
                <li class="flex mb-4">
                    <div class="flex text-sm border-2 border-transparent rounded-full mr-3">
                        <img class="h-12 w-12 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" /> 
                    </div>
                    <div class="flex-1"> 
                        <span class="block font-bold text-md">
                            @if (Auth::user()->name == $activity->user->name)
                                You
                            @else
                                {{$activity->user->name}}
                            @endif
                        </span>
                        @include("layouts.activity.{$activity->description}")
                    </div>
                </li>
            @empty
                <div> {{ __('There is no activity yet') }} </div>
            @endforelse
        </ul>
        <a href="#" class="flex items-center justify-center">

            <button type="button" class="px-4 py-2 bg-gray-200 text-gray-600 font-bold rounded mr-3">
                {{__('Load more')}}
            </button>
            <span class="block w-4">
                <svg viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g id="Page-1" stroke="none" stroke-width="1" class="fill-current text-purple-500" fill-rule="evenodd">
                        <g id="icon-shape">
                            <polygon id="Combined-Shape" points="10 7 2 7 2 13 10 13 10 18 18 10 10 2 10 7"></polygon>
                        </g>
                    </g>
                </svg>
            </span>
        </a>
    </div>
    
</div>