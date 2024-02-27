@if ($faqs->count())
<section class="py-20">
    <div class="container">
        <h2 class="heading-01 leading-[116.66%] text-center mb-6">{{ __('faq') }}</h2>
        <div x-data="{
            activeAccordion: '',
            setActiveAccordion(id) {
                this.activeAccordion = (this.activeAccordion == id) ? '' : id
            }
        }"
            class="relative w-full mx-auto overflow-hidden text-sm font-normal bg-white border-b border-gray-100 p-0 divide-y divide-gray-200 max-w-[872px]">

            @foreach ($faqs as $faq)
                <!-- Accordion Item -->
                <div x-data="{ id: $id('accordion') }" class="cursor-pointer group">
                    <button @click="setActiveAccordion({{$faq->id}})"
                        class="flex items-center justify-between body-large-600 text-gray-900 w-full text-left select-none"
                        :class="activeAccordion == {{ $faq->id }} ? 'pt-6 pb-4' : 'py-6'">
                        <span>{{ $faq->question ?? '' }}</span>
                        <svg x-show="activeAccordion=={{ $faq->id }}" x-cloak width="25" height="24" viewBox="0 0 25 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M8.5 12H16.5M22.5 12C22.5 17.5228 18.0228 22 12.5 22C6.97715 22 2.5 17.5228 2.5 12C2.5 6.47715 6.97715 2 12.5 2C18.0228 2 22.5 6.47715 22.5 12Z"
                                stroke="#007BFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <svg x-show="activeAccordion !== {{ $faq->id }}" x-cloak width="25" height="24" viewBox="0 0 25 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M12.5 8V16M8.5 12H16.5M22.5 12C22.5 17.5228 18.0228 22 12.5 22C6.97715 22 2.5 17.5228 2.5 12C2.5 6.47715 6.97715 2 12.5 2C18.0228 2 22.5 6.47715 22.5 12Z"
                                stroke="#74787D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    <div x-show="activeAccordion=={{ $faq->id }}" x-collapse x-cloak :class="activeAccordion == {{ $faq->id }} ? 'pb-6' : 'pb-0'">
                        <div class="body-base-400 text-gray-700">
                            {!! $faq->answer !!}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</section>

@endif
