{{-- Images Accordion --}}

<div class="" x-show="imagesActive">
    <div  x-data="{
            showImage : false,
            imageToShow: null,
            show(image){
                this.showImage = true
                this.imageToShow = image
            }
        }">

        <div x-show="showImage">
            <div class="fixed top-0 right-0 bg-gray-900 bg-opacity-40 w-full h-screen z-40 py-8 overflow-scroll">
                <img x-bind:src="imageToShow" alt="image-task" class="max-w-4xl mx-auto">
            </div>
            <div class="fixed top-0 right-0 z-50 p-8 flex items-center">
                <button 
                    type="button" 
                    class="bg-green-400 px-4 h-12 flex items-center justify-center rounded mr-8"
                    x-on:click="showImage = false"
                    >
                    <span class="block text-gray-700 mr-2">{{ __('Download') }}</span>
                    <span class="block w-4">
                        <svg viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g id="Page-1" stroke="none" stroke-width="1" class="fill-current text-gray-700" fill-rule="evenodd">
                                <g id="icon-shape">
                                    <path d="M13,8 L13,2 L7,2 L7,8 L2,8 L10,16 L18,8 L13,8 Z M0,18 L20,18 L20,20 L0,20 L0,18 Z" id="Combined-Shape"></path>
                                </g>
                            </g>
                        </svg>
                    </span>
                   
                </button>
                <button 
                    type="button" 
                    class="bg-red-500 px-4 h-12 flex items-center justify-center rounded"
                    x-on:click="showImage = false"
                    >
                    <span class="block text-white mr-2">{{ __('Close') }}</span>
                    <span class="block w-4">
                        <svg viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g id="Page-1" stroke="none" stroke-width="1" class="fill-current text-gray-100" fill-rule="evenodd">
                                <g id="icon-shape">
                                    <polygon id="Combined-Shape" points="10 8.58578644 2.92893219 1.51471863 1.51471863 2.92893219 8.58578644 10 1.51471863 17.0710678 2.92893219 18.4852814 10 11.4142136 17.0710678 18.4852814 18.4852814 17.0710678 11.4142136 10 18.4852814 2.92893219 17.0710678 1.51471863 10 8.58578644"></polygon>
                                </g>
                            </g>
                        </svg>
                    </span>
                </button>
            </div>
        </div>

        <div class="flex items-center justify-center">
            <div class="w-full grid grid-cols-3 gap-4">
                @forelse ($task->images as $image)
                    <img src="{{asset('uploads/' . $image)}}" alt="" class="w-full h-64 object-cover bg-center rounded cursor-pointer" x-on:click="show('{{asset('uploads/' . $image)}}')">
                @empty
                    <div class="px-8 py-2 rounded bg-gray-100">
                        {{ __('This task has no images associasted with it') }}
                    </div>
                @endforelse
            </div>
        </div>
        @error('files')
            <span class="text-red-400">{{$message}}</span>
        @enderror
        @error('images')
            <span class="text-red-400">{{$message}}</span>
        @enderror
    </div>
</div>