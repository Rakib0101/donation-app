@props(['placeholder' => '', 'value' => '', 'class' => '', 'name' => ''])
<div class="relative" x-data="{eyeOpen : false}">
    <input
    @if ($attributes['wire:model'])
    wire:model="{{ $attributes['wire:model'] }}" 
    @endif  class="focus:outline-none transition-all duration-300 py-2.5 pr-[54px] pl-[18px] rounded-lg border border-gray-100 hover:border-gray-200 focus:border-primary-500 focus:shadow-[0px_4px_8px_0px_rgba(107,45,210,0.12),0px_0px_0px_3px_rgba(107,45,210,0.24)] flex w-full text-base-400 shadow-gray-base-1 hover:shadow-gray-base-2 placeholder:text-gray-500 {{ $class }}"
        :type="eyeOpen ? 'text':'password'" value="{{ $value }}" placeholder="{{ $placeholder }}">
    <x-frontend.forms.error name="" />
    <span @click="eyeOpen = !eyeOpen" x-show="eyeOpen" x-cloak class="cursor-pointer inline-flex justify-center items-center absolute top-1/2 right-[18px] -translate-y-1/2">
        <x-svg.eye-off />
    </span>
    <span @click="eyeOpen = !eyeOpen" x-show="!eyeOpen" x-cloak class="cursor-pointer inline-flex justify-center items-center absolute top-1/2 right-[18px] -translate-y-1/2">
        <x-svg.eye />
    </span>
</div>
