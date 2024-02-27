@props(['icon' => false, 'placeholder' => '', 'value' => '', 'type' => 'text', 'class' => '', 'name' => ''])

@if ($icon)
    <div class="w-full relative">
        <input @if ($attributes['wire:model']) wire:model="{{ $attributes['wire:model'] }}" @endif
            class="focus:ring-0 transition-all duration-300 py-2.5 pl-[54px] pr-[18px] rounded-lg border border-gray-100 hover:border-gray-200 flex w-full text-base-400 shadow-gray-base-1 hover:shadow-gray-base-2 placeholder:text-gray-500 {{ $class }} outline-none"
            type="{{ $type }}" value="{{ $value }}" placeholder="{{ $placeholder }}">
        @if ($name)
            <x-frontend.forms.error :name="$name" />
        @endif
        <span class="absolute left-[18px] top-1/2 -translate-y-1/2">
            {{ $slot }}
        </span>
    </div>
@else
    <div class="w-full">
        <input @if ($attributes['wire:model']) wire:model="{{ $attributes['wire:model'] }}" @endif
            class="focus:ring-0 transition-all duration-300 py-2.5 px-[18px] rounded-lg border border-gray-100 hover:border-gray-200   flex w-full text-base-400 shadow-gray-base-1 hover:shadow-gray-base-2 placeholder:text-gray-500 {{ $class }} outline-none"
            type="{{ $type }}" value="{{ $value }}" placeholder="{{ $placeholder }}">
        @if ($name)
            <x-frontend.forms.error :name="$name" />
        @endif
    </div>
@endif
