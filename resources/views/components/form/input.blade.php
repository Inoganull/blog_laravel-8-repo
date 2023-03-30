@props(['name', 'type' => 'text'])

<x-form.field>
    <x-form.label name="{{ $name }}" />

    <input class="border border-gray-400 p-2 w-full" 
            name="{{ $name }}" 
            id="{{ $name }}" 
            type="{{ $type }}" 
            value="{{ old($name) }}" 
            required>

    <x-form.error name="{{ $name }}" />
</x-form.field>
