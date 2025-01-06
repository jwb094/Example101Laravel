<!--<a {{ $attributes }}>{{ $slot }}</a>
/*
$attributes = id='c-id-selector' html Attributes
$attributes = class='c-class-selector'
$attributes = class='class-name'


prop is not a HTMLAttributes
props = variables


:propsname =  expresion rather than a string

<x-{component-name}> - components
*/-->

@props(['active' => false])
@props(['type'])
{{-- @dump($type); --}}

@php
@endphp 


{{-- @if ($type == "button")   || <php if($type == "button") ?>--}} 
@if ($type == "button")  
<button class=" {{ $active ? 'bg-gray-900 text-white' :'text-gray-300 hover:bg-gray-700 hover:text-white' }}   rounded-md px-3 py-2 text-sm font-medium" 
aria-current="{{ $active ? 'page' : 'false' }}"
{{ $attributes }}>
    {{$slot}}
</button>
{{-- @else || <php else : ?>--}}
@else 
<a class=" {{ $active ? 'bg-gray-900 text-white' :'text-gray-300 hover:bg-gray-700 hover:text-white' }}   rounded-md px-3 py-2 text-sm font-medium" 
aria-current="{{ $active ? 'page' : 'false' }}"
{{ $attributes }}>
    {{$slot}}
</a>   
@endif 
{{-- @endif || <php endif; ?>--}}
    {{-- {{ $type === "button" ? '<button> </button>' : "" }} --}}
{{-- {{$type }} --}}
{{--
<a href="/" class=" {{ $active ? ' bg-gray-700 text-white' : ' text-gray-300 hover:bg-gray-700 hover:text-white' }}   rounded-md px-3 py-2 text-sm font-medium" 
    aria-current="{{ $active ? 'page' : 'false' }}"
    {{ $attributes }}>
    {{$slot }} </a>--}}