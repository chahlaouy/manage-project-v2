<x-app-layout>
    
    <x-slot name="header">
        <header class="flex items-center justify-between text-sm">
            <div class="flex items-center">
                <div class="flex items-center">
                    <a href="{{route('projects.index')}}" class="leading-tight block mr-1">{{auth()->user()->currentTeam->name}}</a>
                    <span class="mr-1">/</span>
                    <a href="{{route('projects.index')}}" class="leading-tight block mr-1">{{__('Projects')}}</a>
                    <span class="mr-1">/</span>
                    <span>{{$project->title}}</span>
                    
                </div>
                
            </div>
            <div class="flex items-center">
                <div class="flex items-center justify-center bg-blue-200 w-10 h-10 rounded-full mr-4 uppercase text-xl">
                    {{ Str::limit(auth()->user()->name, 1, '') }}
                </div>
                @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                    
                    <a href="/projects/create" class="block rounded text-white px-12 py-2 bg-purple-500 focus:outline-none hover:bg-purple-600">
                        {{ __('Invite to project') }} 
                    </a>
                @endcan
            </div>
        </header> 
    </x-slot>
    <div x-data="{showModal : false}">
        <div x-show="showModal" class="animate__animated absolute top-0 right-0 w-full min-h-screen z-50 py-12 bg-gray-900 bg-opacity-10" :class="showModal ? 'animate__slideInUp' : ''">
            <livewire:task-modal :project="$project" />
        </div>
        <div class="flex items-end justify-between mb-4">

            <h3 class="text-gray-500 text-lg"> {{ __('Tasks') }} </h3>
            <button x-on:click="showModal = true" class="rounded text-white px-12 py-2 bg-purple-500 focus:outline-none hover:bg-purple-600"> {{__('Add task')}} </button>
        </div>
        <div class="flex">
            <div id="tasks" class="flex-1 mr-4">
                @include('layouts.tasks')
                
            </div>
            <div class="w-72 mr-4">
                @include('layouts.card')
                <livewire:activity-feed :project="$project" />
                <div class="mt-8 bg-white py-4 relative shadow-md rounded">
                    <span class="block text-xl font-normal px-8 border-l-4 border-purple-600 py-3 mb-6">
                        {{ __('Notes') }}
                    </span>
                    <form action="/projects/{{$project->id}}" method="POST" class="px-8 pb-8">
                        @csrf
                        @method('PATCH')
                            <label class="block mb-8">
                                <span class="block text-gray-500 text-lg mb-4 p-0">{{ __('General Notes') }}</span>
                                <textarea
                                    name="general_notes"
                                    class="bg-gray-100 mt-0 block w-full px-0.5 border-0 border-b-2 border-gray-200 focus:ring-0 focus:border-purple-500" rows="8" spellcheck="false">{{ $project->general_notes }}
                                </textarea>
                            </label>
                            
                            {{-- Submit button --}}
                            <div class="absolute bottom-0 right-0 p-4">
                                <x-button>
                                    {{ __('Update notes') }}
                                </x-button>
                            </div>
                    </form>
                </div>
                
                
            </div>
            
        </div>
    </div>
    
</x-app-layout>