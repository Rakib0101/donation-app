@if ($setting->currency_switcher && count($headerCurrencies))
    @php
        $currency_count = count($headerCurrencies) && count($headerCurrencies) > 1;
        $current_currency_code   = currentCurrencyCode();
        $current_currency_symbol = currentCurrencySymbol();
    @endphp

    <div class="relative inline-flex" x-data="{ currDropdown: false }" @click.outside="currDropdown = false">
        <button @click="currDropdown = !currDropdown" class="inline-flex gap-1 items-center" :class="currDropdown ? '' : ''"
            type="button">
            <span class="inline-flex gap-1 items-center body-small-400"
                :class="currDropdown ? 'text-primary-500' : 'text-gray-700 hover:text-gray-900'">
                <span> {{ $current_currency_code }}</span>
                <span class="transition-all duration-300" :class="currDropdown ? 'rotate-180' : ''">
                    <x-svg.arrow-down />
                </span>
            </span>
        </button>
        <!-- Dropdown menu -->
        @if ($currency_count)
            <div class="absolute z-50 right-0 top-full sm:min-w-[248px] min-w-[150px]" x-show='currDropdown' x-transition x-cloak @click.outside="currDropdown=false">
                <ul class="bg-white flex flex-col py-2 rounded-md border border-gray-50 shadow-gray-base-1">
                    @foreach ($headerCurrencies as $currency)
                        @if ($currency->code != $current_currency_code && $currency->symbol != $current_currency_symbol)
                            <li>
                                <a href="{{ route('changeCurrency', $currency->code) }}" class="flex justify-between items-center px-[18px] py-2 hover:bg-gray-50 {{ $current_currency_code === $currency->code ? 'bg-primary-50' : '' }}"> {{ $currency->code }} ({{ $currency->symbol }})</a>
                            </li>
                        @endif
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
@endif
