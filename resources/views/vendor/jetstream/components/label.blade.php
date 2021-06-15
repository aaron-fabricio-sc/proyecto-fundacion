@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text:sm md:text-md text-gray-900']) }}>
    {{ $value ?? $slot }}
</label>
