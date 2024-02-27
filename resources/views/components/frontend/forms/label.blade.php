@props(['for' => '', 'name' => '', 'required' => true, 'class' => 'mb-2'])
<label for="{{ $for }}"
    class="body-small-500 {{ $class }} text-gray-800 cursor-pointer block">{{ $name }}
    @if ($required === true)
        <span class="text-red-500">*</span>
    @endif
</label>
