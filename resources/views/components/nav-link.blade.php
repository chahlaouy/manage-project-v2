@props(['active'])

@php
    $class = $active ? 'border-indigo-500' : ''
@endphp
<a {{$attributes->merge(['class' => "block border-r-2 p-3 w-24 {$class}"])}}>
    {{$slot }}
</a>