<x-app-layout>
    <x-slot name="header">
        <header class="flex items-center justify-between text-sm" x-data="{showModal : false}">
            <div class="flex-1 flex items-center">
                <div class="leading-tight mr-4 flex items-center">
                    <a href="{{route('projects.index')}}" class="mr-1">{{ auth()->user()->currentTeam->name }}</a>
                    <span class="mr-1">/</span>
                    <a href="{{route('projects.index')}}" class="mr-1">{{ __('Projects') }}</a>
                    
                </div>
                
            </div>
            @can('create', Laravel\Jetstream\Jetstream::newTeamModel())                     
                <button  x-on:click="showModal = true" class="block rounded text-sm bg-purple-600 text-white px-4 py-2 mr-auto">
                    {{ __('Create a new project') }} 
                </button>
                <div 
                x-show="showModal" 
                class="animate__animated absolute top-0 right-0 w-full min-h-screen z-50 py-12 bg-gray-900 bg-opacity-10" :class="showModal ? 'animate__slideInUp' : ''">
                    <livewire:project-modal />
                </div>
            @endcan
        </header> 
    </x-slot>
    <div>
        <livewire:project-data-table />
    </div>
</x-app-layout> 