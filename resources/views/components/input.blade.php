@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'rounded-md shadow-sm border-gray-250 focus:border-indigo-250 focus:ring focus:ring-indigo-200 focus:ring-opacity-50']) !!}>
