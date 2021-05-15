<div class="relative" x-data="{ open: false}">
    <div x-on:click="open = true">
        {{ $trigger }}
    </div>
    <div x-show.transition="open" x-on:click.away="open = false" class="absolute z-50 bottom-6 left-24 rounded shadow-2xl border border-gray-200 bg-blue-100 w-60">
        {{ $content }}
    </div>
</div>