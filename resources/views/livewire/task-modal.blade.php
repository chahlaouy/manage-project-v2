<div class="max-w-4xl mx-auto relative">
    <div class="absolute bg-white bg-opacity-60 w-full h-full top-0 right-0 rounded" wire:loading wire:target="submitForm">
        <div class="h-full flex items-center justify-center">
            <div class="inline-flex items-center px-4 py-2 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-purple-500">
                <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                  <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                  <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                </svg>
                {{__('Processing')}}
            </div>
        </div>
    </div>
    <div class="bg-white shadow-2xl rounded-md">
        <div class="flex items-center justify-between rounded-t-md px-8 py-4 bg-gray-100 mb-8">
            <h3 class="font-bold capitalize text-lg leading-tight text-gray-500">
                {{ __('Create a new task') }}
            </h3>
            <div class="p-1 rounded border border-gray-400">
                <span class="block w-5" x-on:click="showModal = false">
                    <svg viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g id="Page-1" stroke="none" stroke-width="1" class="fill-current text-gray-400" fill-rule="evenodd">
                            <g id="icon-shape">
                                <polygon id="Combined-Shape" points="10 8.58578644 2.92893219 1.51471863 1.51471863 2.92893219 8.58578644 10 1.51471863 17.0710678 2.92893219 18.4852814 10 11.4142136 17.0710678 18.4852814 18.4852814 17.0710678 11.4142136 10 18.4852814 2.92893219 17.0710678 1.51471863 10 8.58578644"></polygon>
                            </g>
                        </g>
                    </svg>
                </span>
            </div>
        </div>
        
        <form wire:submit.prevent="submitForm" class="p-8" x-data="{ attachActive: false, descActive: true }">
            @csrf
            <div class="flex text-sm mb-8">
                {{-- attack link  --}}
                <div class="rounded flex items-center p-2 mr-3" :class="attachActive ? 'bg-purple-500 text-gray-100' : 'text-gray-500 bg-gray-200'" x-on:click=" descActive = false; attachActive = true">
                    <span class="block w-5 mr-1">

                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" :class="attachActive ? 'fill-current text-gray-100' : 'fill-current text-gray-400'"><path d="M9.26 13a2 2 0 0 1 .01-2.01A3 3 0 0 0 9 5H5a3 3 0 0 0 0 6h.08a6.06 6.06 0 0 0 0 2H5A5 5 0 0 1 5 3h4a5 5 0 0 1 .26 10zm1.48-6a2 2 0 0 1-.01 2.01A3 3 0 0 0 11 15h4a3 3 0 0 0 0-6h-.08a6.06 6.06 0 0 0 0-2H15a5 5 0 0 1 0 10h-4a5 5 0 0 1-.26-10z"></path></svg>
                    </span>
                    <span class="font-bold">
                        {{ __('Attach')}} 

                    </span>
                </div>
                {{-- description link  --}}
                <div class="rounded flex items-center p-2" :class="descActive ? 'bg-purple-500 text-gray-100' : 'text-gray-500 bg-gray-200'" x-on:click="attachActive = false; descActive = true">
                    <span class="block w-5 mr-1">

                        <svg viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g id="Page-1" stroke="none" stroke-width="1" :class="descActive ? 'fill-current text-gray-100' : 'fill-current text-gray-400'" fill-rule="evenodd">
                                <g id="icon-shape">
                                    <path d="M9,10 L7,10 L7,12 L9,12 L9,14 L11,14 L11,12 L13,12 L13,10 L11,10 L11,8 L9,8 L9,10 Z M4,18 L4,2 L12,2 L12,6 L16,6 L16,18 L4,18 Z M2,19 L2,0 L3,0 L12,0 L14,0 L18,4 L18,6 L18,20 L17,20 L2,20 L2,19 Z" id="Combined-Shape"></path>
                                </g>
                            </g>
                        </svg>
                    </span>
                    <span class="font-bold">
                        {{ __('Project descrption')}} 

                    </span>
                </div>
            </div>

            {{-- Attach accordion --}}
            
            <div class="" x-show="descActive">
                <label class="block mb-8">
                    <span 
                    class="text-gray-700">  {{__('Title')}}  </span>
                    <input 
                    wire:model="title"
                    name="title"
                    id="title"
                    type="text" 
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-purple-300 focus:ring focus:ring-purple-200 focus:ring-opacity-50" 
                    placeholder="{{__('Add a title')}}">
                </label>
                @error('title')
                    <span class="text-red-400">{{$message}}</span>
                @enderror
                <label class="block mb-8">
                    <span 
                    class="text-gray-700">  {{__('Description')}}  </span>
                    <input 
                    wire:model="description"
                    name="description"
                    id="description"
                    type="text" 
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-purple-300 focus:ring focus:ring-purple-200 focus:ring-opacity-50" 
                    placeholder="{{__('Add a description')}}">
                </label>
                @error('description')
                    <span class="text-red-400">{{$message}}</span>
                @enderror
                <label class="block mb-8">
                    <span class="block text-gray-500 text-lg mb-4">{{ __('Add notes') }}</span>
                    <textarea wire:model="general_notes" class="mt-0 block w-full px-0.5 border-0 border-b-2 border-gray-200 focus:ring-0 focus:border-purple-500" rows="5" spellcheck="false"></textarea>
                </label>
                @error('general_notes')
                    <span class="text-red-400">{{$message}}</span>
                @enderror
                <button x-on:click="Livewire.emit('ProjectAdded')" type="submit" class="block shadow rounded text-white px-12 py-2 bg-purple-600 focus:outline-none hover:bg-purple-700 mr-4">
                    {{__('Create now')}}
                </button>
            </div>

            {{-- Attach accordion --}}

            <div class="" x-show="attachActive">

                <div class="flex items-center">
                    <label class="w-56 flex flex-col items-center px-4 py-6 bg-white text-purple-600 rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer hover:bg-purple-600 hover:text-white mr-4">
                        <svg class="w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
                        </svg>
                        <span class="mt-2 text-base leading-normal"> {{ __('Attach images') }} </span>
                        <input type='file' class="hidden" wire:model="images" multiple/>
                    </label>
                    <label class="w-56 flex flex-col items-center px-4 py-6 bg-white text-purple-600 rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer hover:bg-purple-600 hover:text-white mr-8">
                        <svg class="w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
                        </svg>
                        <span class="mt-2 text-base leading-normal"> {{ __('Attach files') }} </span>
                        <input type='file' class="hidden" wire:model="files" multiple/>
                    </label>
    
                </div>
                @error('files')
                    <span class="text-red-400">{{$message}}</span>
                @enderror
                @error('images')
                    <span class="text-red-400">{{$message}}</span>
                @enderror
            </div>
        </form>
    </div>
</div>