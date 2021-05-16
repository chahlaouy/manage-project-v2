{{-- Images Accordion --}}

<div class="" x-show="filesActive">
    <div class="flex items-center justify-center">
        <div class="w-full grid grid-cols-3 gap-4">
            @forelse ($task->files as $file)
                <div class="bg-gray-200 rounded p-4">
                    <div class="p-2 flex items-center justify-between mb-4">
                        <button 
                            type="button" 
                            class="bg-green-400 px-3 h-6 flex items-center justify-center rounded mr-4"
                            >
                            <span class="block text-gray-700 text-sm mr-2">{{ __('Download') }}</span>
                            <span class="block w-3">
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
                            class="bg-red-500 px-3 h-6 flex items-center justify-center rounded"
                            >
                            <span class="block text-white text-sm mr-2">{{ __('Delete') }}</span>
                            <span class="block w-3">
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
                    <div x-data="{file : '{{$file}}', arr : [], length : 0}" x-init="
                        arr = file.split('/');
                    ">

                        <span class="block text-xs text-gray-500 font-bold" x-text="arr[4]"></span>
                    </div>
                </div>
            @empty
                <div class="px-8 py-2 rounded bg-gray-100">
                    {{ __('This task has no files associasted with it') }}
                </div>
            @endforelse
        </div>
    </div>
</div>