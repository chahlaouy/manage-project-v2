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