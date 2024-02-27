<!-- Showing limited numbers of page with (...) ellipse -->
@if ($paginator->hasPages())
    <div class="mt-[2.5rem]">
        <ul class="flex items-center gap-[0.75rem] justify-center">
            @if ($paginator->onFirstPage())
                <!-- Display disabled previous button -->
                <li class="disabled h-[2.75rem] w-[2.75rem] rounded-[0.5rem] flex items-center justify-center bg-[rgba(240,234,251,0.40)] text-primary-100">
                    <button disabled>
                        <x-svg.arrow-circle-left />
                    </button>
                </li>
            @else
                <!-- Display previous button with Livewire navigation -->
                <li class="h-[2.75rem] w-[2.75rem] rounded-[0.5rem] flex items-center justify-center bg-primary-50 text-primary-500 hover:bg-primary-500 hover:text-gray-white transition-all duration-200 ease-in-out">
                    <button wire:click="previousPage">
                        <x-svg.arrow-circle-left />
                    </button>
                </li>
            @endif
            
            <!-- Pagination Elements -->
            @foreach ($elements as $element)
                @if (is_string($element))
                    <!-- Display ellipsis -->
                    <li class="disabled h-[2.75rem] w-[2.75rem] rounded-full flex items-center justify-center hover:shadow-gray-base-2 border border-transparent  transition-all duration-200 ease-in-out hover:border-gray-100 hover:text-gray-900 text-gray-700"><span>{{ $element }}</span></li>
                @endif
                
                @if (is_array($element))
                    <!-- Display page links -->
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <!-- Highlight current page -->
                            <li class="h-[2.75rem] w-[2.75rem] rounded-full flex items-center justify-center bg-primary-500 text-gray-white hover:border-gray-100 hover:text-gray-900 text-gray-700">
                                <button>{{ $page }}</button>
                            </li>
                        @elseif ($page == 1 || $page == $paginator->lastPage() || abs($page - $paginator->currentPage()) <= 1)
                            <!-- Display page link if it's the first, last, or within 1 page of the current page -->
                            <li class="h-[2.75rem] w-[2.75rem] rounded-full flex items-center justify-center  hover:shadow-gray-base-2 border border-transparent  transition-all duration-200 ease-in-out hover:border-gray-100 hover:text-gray-900 text-gray-700">
                                <button wire:click="gotoPage({{ $page }})">{{ $page }}</button>
                            </li>
                        @endif
                    @endforeach
                @endif
            @endforeach
            
            <!-- Next Page Link -->
            @if ($paginator->hasMorePages())
                <!-- Display next button with Livewire navigation -->
                <li class="h-[2.75rem] w-[2.75rem] rounded-[0.5rem] flex items-center justify-center bg-primary-50 text-primary-500 hover:bg-primary-500 hover:text-gray-white transition-all duration-200 ease-in-out">
                    <button wire:click="nextPage">
                        <x-svg.arrow-circle-right />
                    </button>
                </li>
            @else
                <!-- Display disabled next button -->
                <li class="disabled h-[2.75rem] w-[2.75rem] rounded-[0.5rem] flex items-center justify-center bg-[rgba(240,234,251,0.40)] text-primary-100">
                    <button disabled>
                        <x-svg.arrow-circle-right />
                    </button>
                </li>
            @endif
        </ul>
    </div>
@endif
