@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => ' border-green-500 bg-green-50  focus:border-green-500 text-black focus:ring focus:ring-green-300 focus:ring-opacity-50 rounded-md shadow-sm']) !!}>
