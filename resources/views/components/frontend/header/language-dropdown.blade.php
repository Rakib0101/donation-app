<div class="relative inline-flex" x-data="{ langDropdown: false }" @click.outside="langDropdown = false">
    <button @click="langDropdown = !langDropdown" class="inline-flex gap-2 items-center" :class="langDropdown ? '' : ''"
        type="button">
        <x-svg.globe color="#C6C8CB" />
        <span class="inline-flex gap-1 items-center body-small-400"
            :class="langDropdown ? 'text-primary-500' : 'text-gray-700 hover:text-gray-900'">
            <span> {{ currentLanguage() ? currentLanguage()->name : 'Language' }}</span>
            <span class="transition-all duration-300" :class="langDropdown ? 'rotate-180' : ''">
                <x-svg.arrow-down />
            </span>
        </span>
    </button>
    <!-- Dropdown menu -->
    <div x-cloak class="absolute z-50 md:right-0 md:left-auto left-0 top-full md:min-w-[248px] min-w-[150px]" x-show="langDropdown" x-transition>
    <ul class="bg-white flex flex-col py-2 rounded-md border border-gray-50 shadow-gray-base-1">
        @foreach ($languages as $lang)
            <li>
                <a href="{{ route('changeLanguage', $lang->code) }}" class="flex justify-between items-center px-[18px] py-2 hover:bg-gray-50">
                    {{ $lang->name }}
                </a>
            </li>
        @endforeach
    </ul>
</div>


</div>
