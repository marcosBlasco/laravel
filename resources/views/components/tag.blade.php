@props(['size' => 'base'])
@php
    $classes = "bg-white/10  rounded-xl text-xs hover:bg-white/25 transition-colors duration-300";
    if($size === 'base'){
        $classes .= " px-5 py-1 text-sm";
    }
    if($size === 'small'){
        $classes .= " px-2 py-1 text-xs";
    }
@endphp
<a href="" class="{{ $classes }}">{{ $slot }}</a>
