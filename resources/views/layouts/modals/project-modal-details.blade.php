<div class="max-w-4xl mx-auto relative">
    <div class="absolute bg-white bg-opacity-60 w-full h-full top-0 right-0 rounded" wire:loading>
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
            <div class="flex items-center">
                <span class="block w-4 mr-3"> 

                    <svg viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g id="Page-1" stroke="none" stroke-width="1" class="fill-current text-green-400" fill-rule="evenodd">
                            <g id="icon-shape">
                                <path d="M0,10 L0,2 L2,0 L10,0 L20,10 L10,20 L0,10 Z M4.5,6 C5.32842712,6 6,5.32842712 6,4.5 C6,3.67157288 5.32842712,3 4.5,3 C3.67157288,3 3,3.67157288 3,4.5 C3,5.32842712 3.67157288,6 4.5,6 Z" id="Combined-Shape"></path>
                            </g>
                        </g>
                    </svg>
                </span>
                <h3 class="font-bold capitalize text-lg leading-tight text-gray-500">
                    {{ $title }}
                </h3>
            </div>
                
            <div class="flex items-center">
                
               @include('layouts.modal-links.incomplete-button')

               @include('layouts.modal-links.progress-button')

                @include('layouts.modal-links.complete-button')

                @include('layouts.modal-links.close-button')

            </div>
        </div>
        
        <form 
            wire:submit.prevent="submitForm" 
            class="p-8" 
            x-data="{ 
                attachActive: false, 
                descActive: true, 
                filesActive: false, 
                imagesActive: false, 
                subtaskActive: false}">
            @csrf
            <div class="flex text-sm mb-8">
                
                @include('layouts.modal-links.attach-link')
                
                @include('layouts.modal-links.files-link')

                @include('layouts.modal-links.images-link')
                
                @include('layouts.modal-links.description-link')

                @include('layouts.modal-links.subtask-link')
                

            </div>

            @include('layouts.accordion.descriptin-accordion')

            @include('layouts.accordion.attach-accordion')

            @include('layouts.accordion.images-accordion')




        </form>
    </div>
</div>