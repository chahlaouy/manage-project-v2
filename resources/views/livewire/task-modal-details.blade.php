<div class="max-w-4xl mx-auto relative">
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
                    {{ $task->title }}
                </h3>
            </div>
                
            <div class="flex items-center">
                
                {{-- Progress button --}}
                <div class="rounded flex items-center p-2 mr-3 text-gray-500 bg-gray-200">
                    <span class="block w-5 mr-1">
                        <svg viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g id="Page-1" stroke="none" stroke-width="1" class="fill-current text-gray-400" fill-rule="evenodd">
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

                {{-- Complete button --}}
                <div class="rounded flex items-center p-2 mr-3 text-gray-500 bg-gray-200">
                    <span class="block w-5 mr-1">
                        <svg viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g id="Page-1" stroke="none" stroke-width="1" class="fill-current text-gray-400"  fill-rule="evenodd">
                                <g id="icon-shape">
                                    <path d="M2.92893219,17.0710678 C6.83417511,20.9763107 13.1658249,20.9763107 17.0710678,17.0710678 C20.9763107,13.1658249 20.9763107,6.83417511 17.0710678,2.92893219 C13.1658249,-0.976310729 6.83417511,-0.976310729 2.92893219,2.92893219 C-0.976310729,6.83417511 -0.976310729,13.1658249 2.92893219,17.0710678 L2.92893219,17.0710678 L2.92893219,17.0710678 Z M15.6568542,15.6568542 C18.7810486,12.5326599 18.7810486,7.46734008 15.6568542,4.34314575 C12.5326599,1.21895142 7.46734008,1.21895142 4.34314575,4.34314575 C1.21895142,7.46734008 1.21895142,12.5326599 4.34314575,15.6568542 C7.46734008,18.7810486 12.5326599,18.7810486 15.6568542,15.6568542 L15.6568542,15.6568542 Z M4,10 L6,8 L9,11 L14,6 L16,8 L9,15 L4,10 Z" id="Combined-Shape"></path>							
                                </g>
                            </g>
                        </svg>
                        
                    </span>
                    <span class="font-bold">
                        {{ __('Complete')}} 

                    </span>
                </div>

                {{-- Close button  --}} 
                <div class="p-1 rounded border bg-gray-200">
                    <span class="block w-5" x-on:click="showTaskModalDetails = false">
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
                {{-- attack link  --}}
                <div class="rounded flex items-center p-2 mr-3" 
                :class="attachActive ? 'bg-purple-500 text-gray-100' : 'text-gray-500 bg-gray-200'" 
                x-on:click="
                    descActive = false; 
                    filesActive = false; 
                    imagesActive = false;
                    subtaskActive = false; 
                    attachActive = true
                ">
                    <span class="block w-5 mr-1">

                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" :class="attachActive ? 'fill-current text-gray-100' : 'fill-current text-gray-400'"><path d="M9.26 13a2 2 0 0 1 .01-2.01A3 3 0 0 0 9 5H5a3 3 0 0 0 0 6h.08a6.06 6.06 0 0 0 0 2H5A5 5 0 0 1 5 3h4a5 5 0 0 1 .26 10zm1.48-6a2 2 0 0 1-.01 2.01A3 3 0 0 0 11 15h4a3 3 0 0 0 0-6h-.08a6.06 6.06 0 0 0 0-2H15a5 5 0 0 1 0 10h-4a5 5 0 0 1-.26-10z"></path></svg>
                    </span>
                    <span class="font-bold">
                        {{ __('Attach')}} 

                    </span>
                </div>
                {{-- Files link  --}}
                <div class="rounded flex items-center p-2 mr-3" 
                :class="filesActive ? 'bg-purple-500 text-gray-100' : 'text-gray-500 bg-gray-200'" 
                x-on:click="
                    descActive = false; 
                    imagesActive = false;
                    subtaskActive = false; 
                    attachActive = false
                    filesActive = true; 
                ">
                    <span class="block w-5 mr-1">
                        <svg viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g id="Page-1" stroke="none" stroke-width="1"  :class="filesActive ? 'fill-current text-gray-100' : 'fill-current text-gray-400'" fill-rule="evenodd">
                                <g id="icon-shape">
                                    <path d="M4,18 L4,2 L12,2 L12,6 L16,6 L16,18 L4,18 Z M2,19 L2,0 L3,0 L12,0 L14,0 L18,4 L18,6 L18,20 L17,20 L2,20 L2,19 Z" id="Combined-Shape"></path>
                                </g>
                            </g>
                        </svg>
                        
                    </span>
                    <span class="font-bold">
                        {{ __('Associated files')}} 

                    </span>
                </div>
                {{-- Images link  --}}
                <div class="rounded flex items-center p-2 mr-3" 
                :class="imagesActive ? 'bg-purple-500 text-gray-100' : 'text-gray-500 bg-gray-200'" 
                x-on:click="
                    descActive = false; 
                    subtaskActive = false; 
                    attachActive = false
                    filesActive = false; 
                    imagesActive = true;
                ">
                    <span class="block w-5 mr-1">
                        <svg viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g id="Page-1" stroke="none" stroke-width="1"  :class="imagesActive ? 'fill-current text-gray-100' : 'fill-current text-gray-400'" fill-rule="evenodd">
                                <g id="icon-shape">
                                    <path d="M11,13 L8,10 L2,16 L11,16 L18,16 L13,11 L11,13 Z M0,3.99406028 C0,2.8927712 0.898212381,2 1.99079514,2 L18.0092049,2 C19.1086907,2 20,2.89451376 20,3.99406028 L20,16.0059397 C20,17.1072288 19.1017876,18 18.0092049,18 L1.99079514,18 C0.891309342,18 0,17.1054862 0,16.0059397 L0,3.99406028 Z M15,9 C16.1045695,9 17,8.1045695 17,7 C17,5.8954305 16.1045695,5 15,5 C13.8954305,5 13,5.8954305 13,7 C13,8.1045695 13.8954305,9 15,9 Z" id="Combined-Shape"></path>
                                </g>
                            </g>
                        </svg>
                        
                    </span>
                    <span class="font-bold">
                        {{ __('Associated images')}} 

                    </span>
                </div>
                
                {{-- description link  --}}
                <div 
                    class="rounded flex items-center p-2 mr-3" 
                    :class="descActive ? 'bg-purple-500 text-gray-100' : 'text-gray-500 bg-gray-200'" 
                    x-on:click="
                        subtaskActive = false; 
                        attachActive = false
                        filesActive = false; 
                        imagesActive = false;
                        descActive = true; 
                    ">
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
                        {{ __('Task descrption')}} 

                    </span>
                </div>

                {{-- subtask link  --}}
                <div class="rounded flex items-center p-2" 
                :class="subtaskActive ? 'bg-purple-500 text-gray-100' : 'text-gray-500 bg-gray-200'" 
                x-on:click="
                    descActive = false; 
                    attachActive = false
                    filesActive = false; 
                    imagesActive = false;
                    subtaskActive = true; 
                ">
                    <span class="block w-5 mr-1">
                        <svg viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g id="Page-1" stroke="none" stroke-width="1"  :class="subtaskActive ? 'fill-current text-gray-100' : 'fill-current text-gray-400'" fill-rule="evenodd">
                                <g id="icon-shape">
                                    <path d="M10,1 L20,7 L10,13 L0,7 L10,1 Z M16.6666667,11 L20,13 L10,19 L0,13 L3.33333333,11 L10,15 L16.6666667,11 Z" id="Combined-Shape"></path>
                                </g>
                            </g>
                        </svg>
                    </span>
                    <span class="font-bold">
                        {{ __('Create subtask')}} 

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
                    id="taskTitle"
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
                    id="taskDescription"
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