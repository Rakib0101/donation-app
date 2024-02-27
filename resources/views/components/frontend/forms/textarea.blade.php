@props(['placeholder' => '', 'value' => '', 'class' => ''])

<div class="w-full relative">
    <textarea rows="6"
        class="transition ease-linear duration-300 py-2.5 px-[18px] rounded-lg border border-gray-100 hover:border-gray-200 focus:border-primary-500  flex w-full text-base-400 shadow-gray-base-1 hover:shadow-gray-base-2 placeholder:text-gray-500 {{ $class }} hover:border-primary-500 focus:ring-0 outline-0"
        placeholder="{{ $placeholder }}">{{ $value }}</textarea>
    <x-frontend.forms.error name="" />
    <span class="absolute left-[18px] top-1/2 -translate-y-1/2">
        {{ $slot }}
    </span>
</div>
