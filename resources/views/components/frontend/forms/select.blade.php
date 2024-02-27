@props(['name' => '', 'id' => '', 'value' => '', 'class' => ''])
<select name="{{ $name }}" value="{{ $value }}" id="{{ $id }}"
    class="focus:ring-0 transition-all duration-300 py-2.5 px-[18px] rounded-lg border border-gray-100 hover:border-gray-200 focus:border-primary-500 flex w-full text-base-400 shadow-gray-base-1 hover:shadow-gray-base-2 placeholder:text-gray-500 {{ $class }} outline-none hover:border-primary-500">
    {{ $slot }}
</select>
<x-forms.error name="" />
