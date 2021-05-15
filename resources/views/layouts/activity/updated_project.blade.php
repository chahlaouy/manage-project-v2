<div class="block">
    <span>{{ __('Updated the project') }} </span> 
    @if ($activity->subject)
        <span class="font-bold">
            {{ Str::limit($activity->subject->title, 20) }}
        </span>
    @endif 
    <div class="flex items-center justify-end mt-1">
        <span class="text-gray-400 text-xs"> {{ $activity->created_at->diffForhumans() }} </span>
    </div>
</div>