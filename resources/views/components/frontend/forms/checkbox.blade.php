@props(['id' => '', 'label' => '', 'value' => ''])
<div class="flex items-center ">
    <input id="{{ $id }}" type="checkbox" value="{{ $value }}"
        class="w-4 h-4 text-blue-600 bg-gray-50 border-gray-100 rounded focus:ring-blue-500  focus:ring-0 ">
    <label for="{{ $id }}" class="ms-2 text-sm font-medium text-gray-900 ">
        {{ $label }}</label>
</div>
