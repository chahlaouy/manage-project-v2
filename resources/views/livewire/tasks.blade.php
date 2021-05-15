<div>
    
    <span class="block text-lg text-gray-600 font-bold uppercase">{{__('To do')}}</span>
    <hr class="border-t-2 my-4">
    @forelse ($tasks as $task)    
        <div class="bg-white py-4 rounded shadow-md mb-8">
            <div x-data="{showTaskModalDetails : false}">
                <h2 class="text-lg border-l-4 border-purple-500 px-2 mb-4 text-blue-500" x-on:click="showTaskModalDetails = true">
                    {{ $task->title }}
                </h2>
                <div x-show="showTaskModalDetails" x-key="{{$task->id}}" class="animate__animated absolute top-0 right-0 w-full min-h-screen z-50 py-12 bg-gray-900 bg-opacity-10" :class="showTaskModalDetails ? 'animate__slideInUp' : ''">
                    <livewire:task-modal-details :task="$task" />
                </div>
            </div> 
                
            <div class="px-2">
                <span class="block text-gray-700 mb-2 font-bold">{{__('Created By')}}</span>
                <span class="block text-gray-700">{{$task->user->name}}</span>
                <div class="flex items-center justify-end">
                    <span class="block text-gray-400"> 
                        {{ $task->created_at->diffForHumans() }}
                    </span>
                </div>
                {{-- <label class="inline-flex items-center">
                    <input wire:change="toggleComplete({{$task->id}})"  type="checkbox" class="rounded border-gray-300 text-purple-600 shadow-sm focus:border-purple-300 focus:ring focus:ring-offset-0 focus:ring-purple-200 focus:ring-opacity-50 mr-2" {{ $task->completed ? 'checked' : ''}}>
                </label> --}}
            </div>
        </div>

    @empty
        <div class="mb-8"> 
            {{ __('You have no tasks yet create one') }}
        </div>
    @endforelse

</div>