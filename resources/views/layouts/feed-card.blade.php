<div class="bg-gray-100 py-4 relative shadow-md rounded p-4">
                
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
    </div>
    
</div>