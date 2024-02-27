@props([
    'name' => 'name',
    'class' => '',
])

@error($name)
    <span class="text-red-500 {{ $class }}">
        {{ $message }}
    </span>
@enderror
