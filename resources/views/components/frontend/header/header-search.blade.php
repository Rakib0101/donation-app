<div class="relative" x-data="dropdownMovies()" x-effect="await search(keywords)">
    <div
        class="focus-within:border-secondary-500 hover:border-secondary-500 transition duration-200 ease-linear border-2 border-transparent lg:min-w-[380px] xl:min-w-[500px] lg:flex items-center body-base-400 text-gray-700 hidden  bg-gray-white rounded-lg max-h-[44px] py-[10px]">
        <div class="relative items-center w-full pl-[18px] ">
            <span class="mr-3 absolute left-3 ">
                <x-svg.search-md />
            </span>
            <input x-model="keywords" type="search" placeholder="{{ __('job_search_criteria') }}" class="w-full text-ellipsis whitespace-nowrap overflow-hidden focus:ring-0 border-l-0 p-0 border-b-0 border-t-0 outline-none border-r border-r-gray-100 ps-6">
        </div>
        <div class="pr-[18px]">
            <select x-model="type" class="focus:ring-0 border-none outline-none">
                <option value="job" selected>{{ __('jobs') }}</option>
                <option value="company">{{ __('company') }}</option>
                <option value="candidate">{{ __('candidate') }}</option>
            </select>
        </div>
    </div>

    <ul x-transition x-show="queries && queries.length" x-cloak
        class="rounded-lg border border-gray-100 shadow-gray-base-1 bg-gray-white py-3 hidden lg:inline absolute top-12 left-0 w-full z-10">
        <template x-for="query in queries">
            <li>
                <a :href="query.url" class="flex items-center px-[18px] py-3 gap-3 text-base font-medium text-gray-600 hover:bg-gray-50 hover:text-gray-900 transition duration-200 ease-linear">
                    <span>
                        <x-svg.search-md stroke="currentColor" />
                    </span>
                    <span x-text="query.value"></span>
                </a>
            </li>
        </template>
    </ul>
</div>

@push('script')
<script src="{{ asset('frontend') }}/assets/js/axios.min.js"></script>
<script>

    function dropdownMovies() {
        return {
            queries: [],
            keywords:"",
            type: 'job',
            // showSearchMenu: false,

            async search(query) {
                if (!query || query.length < 3) {
                    return []
                }

                let response = await axios.get('/search-autocomplete', {
                    params: {
                        keywords: this.keywords,
                        type: this.type
                    }
                })

                this.queries = response.data
                // this.showSearchMenu = true

                console.log(response.data)
            },
            searchQuery() {
                alert()
                this.search(this.keywords)
            }
        };
    }
</script>
@endpush
