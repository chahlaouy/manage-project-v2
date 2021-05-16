{{-- description accordion --}}
            
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
        <textarea wire:model="general_notes" class="mt-0 block w-full px-0.5 border-0 border-b-2 border-gray-200 focus:ring-0 focus:border-purple-500" rows="5" spellcheck="false">
        </textarea>
    </label>
    @error('general_notes')
        <span class="text-red-400">{{$message}}</span>
    @enderror
    <button x-on:click="Livewire.emit('ProjectAdded')" type="submit" class="block shadow rounded text-white px-12 py-2 bg-purple-600 focus:outline-none hover:bg-purple-700 mr-4">
        {{__('Update now')}}
    </button>
</div>