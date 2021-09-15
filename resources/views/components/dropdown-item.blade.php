@props(['active' => false])

{{-- Colocando o texto das classes em uma variável php para facilitar a visualização--}}
@php
    $classes = 'block text-left px-3 text-sm leading-6 hover:bg-blue-500 focus:bg-blue-500 hover:text-white';

    if ($active) $classes .= ' bg-blue-500 text-white';
@endphp

<a {{ $attributes([ 'class' => $classes]) }}
>{{ $slot }}</a>