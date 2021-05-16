<div>
    @if ($showTaskModalDetails)

        <div x-data="{showTaskModalDetails : true}">
            <div 
                x-show="showTaskModalDetails"  
                class="animate__animated fixed top-0 right-0 w-full h-screen overflow-scroll z-50 py-12 bg-gray-900 bg-opacity-10" 
                :class="showTaskModalDetails ? 'animate__slideInUp' : ''"
                x-on:toggle.window="showTaskModalDetails = true">
                @include('layouts.modals.task-modal-details')
            </div> 
        </div>
    @endif 
    <div id="incompleted-tasks" class="mb-8">
        <span class="block text-lg px-2 py-2 bg-red-200 text-gray-600 font-bold uppercase">{{__('To do')}}</span>
        <hr class="border-t-2 my-4">
        @forelse ($inCompletedTasks as $task)
            <div class="bg-white py-4 rounded shadow-md mb-8">
                <div x-data>
    
                    <h2 
                    class="text-lg border-l-4 border-purple-500 px-2 mb-4 text-blue-500 cursor-pointer" 
                    wire:click="showTaskModalDetails({{$task->id}})"
                    x-on:click="$dispatch('toggle')"
                    >
                        {{ $task->title }}
                    </h2>
                </div>
                <div class="px-2">
                    <span class="block text-gray-700 mb-2 font-bold">{{__('Created By')}}</span>
                    <span class="block text-gray-700">{{$task->user->name}}</span>
                    <div class="flex items-center justify-end">
                        <span class="block text-gray-400"> 
                            {{ $task->created_at->diffForHumans() }}
                        </span>
                    </div>
                </div>
            </div>
    
        @empty
            <div class="mb-8"> 
                {{ __('You have no to do tasks yet') }}
            </div>
        @endforelse
    </div>

    <div id="inprogress-tasks" class="mb-8">
        <span class="block text-lg px-2 py-2 bg-yellow-200 shadow-md text-gray-600 font-bold uppercase">{{__('In progress')}}</span>
        <hr class="border-t-2 my-4">
        @forelse ($inProgressTasks as $task)
            <div class="bg-white py-4 rounded shadow-md mb-8">
                <div x-data>
    
                    <h2 
                    class="text-lg border-l-4 border-purple-500 px-2 mb-4 text-blue-500 cursor-pointer" 
                    wire:click="showTaskModalDetails({{$task->id}})"
                    x-on:click="$dispatch('toggle')"
                    >
                        {{ $task->title }}
                    </h2>
                </div>
                <div class="px-2">
                    <span class="block text-gray-700 mb-2 font-bold">{{__('Created By')}}</span>
                    <span class="block text-gray-700">{{$task->user->name}}</span>
                    <div class="flex items-center justify-end">
                        <span class="block text-gray-400"> 
                            {{ $task->created_at->diffForHumans() }}
                        </span>
                    </div>
                </div>
            </div>
    
        @empty
            <div class="mb-8"> 
                {{ __('You have no in progress tasks yet') }}
            </div>
        @endforelse
    </div>

    <div id="inprogress-tasks">
        <span class="block text-lg px-2 py-2 bg-green-200 shadow-md text-gray-600 font-bold uppercase">{{__('Completed')}}</span>
        <hr class="border-t-2 my-4">
        @forelse ($completedTasks as $task)
            <div class="bg-white py-4 rounded shadow-md mb-8">
                <div x-data>
    
                    <h2 
                    class="text-lg border-l-4 border-purple-500 px-2 mb-4 text-blue-500 cursor-pointer" 
                    wire:click="showTaskModalDetails({{$task->id}})"
                    x-on:click="$dispatch('toggle')"
                    >
                        {{ $task->title }}
                    </h2>
                </div>
                <div class="px-2">
                    <span class="block text-gray-700 mb-2 font-bold">{{__('Created By')}}</span>
                    <span class="block text-gray-700">{{$task->user->name}}</span>
                    <div class="flex items-center justify-end">
                        <span class="block text-gray-400"> 
                            {{ $task->created_at->diffForHumans() }}
                        </span>
                    </div>
                </div>
            </div>
    
        @empty
            <div class="mb-8"> 
                {{ __('You have no completed tasks yet') }}
            </div>
        @endforelse
    </div>

</div>