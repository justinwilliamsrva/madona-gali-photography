@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'rounded-md shadow-sm border-1 focus:border-[#EAF3F6] focus:ring focus:ring-indigo-200 focus:ring-opacity-50']) !!}>
