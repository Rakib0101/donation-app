<div class="relative inline-flex" x-data="{ countryDropdown: false }" @click.outside="countryDropdown = false">
    <button @click="countryDropdown = !countryDropdown" class="inline-flex gap-1 items-center"
        :class="countryDropdown ? '' : ''" type="button">
        <span class="inline-flex gap-1 items-center body-small-400"
            :class="countryDropdown ? 'text-primary-500' : 'text-gray-700 hover:text-gray-900'">
            <span>India</span>
            <span class="transition-all duration-300" :class="countryDropdown ? 'rotate-180' : ''">
                <x-svg.arrow-down />
            </span>
        </span>
    </button>
    <!-- Dropdown menu -->
    <div class="absolute z-50 right-0 top-full sm:min-w-[248px] min-w-[150px]" x-cloak x-show="countryDropdown"
        x-transition>
        <ul class="bg-white flex flex-col py-2 rounded-md border border-gray-50 shadow-gray-base-1">
            <li>
                <a href="#" class="flex justify-between items-center px-[18px] py-2 hover:bg-gray-50">USA</a>
            </li>
            <li>
                <a href="#" class="flex justify-between items-center px-[18px] py-2 hover:bg-gray-50">UK</a>
            </li>
            <li>
                <a href="#" class="flex justify-between items-center px-[18px] py-2 hover:bg-gray-50">Russia</a>
            </li>
            <li>
                <a href="#" class="flex justify-between items-center px-[18px] py-2 hover:bg-gray-50">Span</a>
            </li>
            <li>
                <a href="#" class="flex justify-between items-center px-[18px] py-2 hover:bg-gray-50">India</a>
            </li>
        </ul>
    </div>

</div>
