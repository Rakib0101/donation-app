@push('css')
    <style>
        input[type=range]::-webkit-slider-thumb {
            pointer-events: all;
            width: 24px;
            height: 24px;
            -webkit-appearance: none;
        }
    </style>
@endpush
<div x-data="range()" x-init="mintrigger();
maxtrigger()" class="relative  w-full space-y-3 ">
    <div class="flex items-center">

        <div class="flex gap-2 items-center ">
            <div class="flex items-center gap-1">
                <label for="min-value " class="body-small-400">Min:</label>
                <input type="text" id="min-value" maxlength="5" x-on:input="mintrigger" x-model="minprice"
                    class=" border border-gray-100 rounded w-[3rem] h-[1.4rem] text-center outline-0 focus:ring-0 hover:border-primary-500 transition duration-200 ease-linear p-0">
            </div>
            <div class="flex items-center gap-1">
                <label for="min-value " class="body-small-400">Max:</label>
                <input type="text" maxlength="5" x-on:input="maxtrigger" x-model="maxprice"
                    class="border border-gray-200 rounded w-[3rem] h-[1.4rem] text-center p-0 otuline-0 focus:ring-0">
            </div>
        </div>
        <div>

        </div>
    </div>

    <div>
        <input type="range" step="100" x-bind:min="min" x-bind:max="max"
            x-on:input="mintrigger" x-model="minprice"
            class="absolute pointer-events-none appearance-none z-20 h-2 w-full opacity-0 cursor-pointer">

        <input type="range" step="100" x-bind:min="min" x-bind:max="max"
            x-on:input="maxtrigger" x-model="maxprice"
            class="absolute pointer-events-none appearance-none z-20 h-2 w-full opacity-0 cursor-pointer">

        <div class="relative z-10 h-2">

            <div class="absolute z-10 left-0 right-0 bottom-0 top-0 rounded-md bg-gray-100"></div>

            <div class="absolute z-20 top-0 bottom-0 rounded-md bg-primary-500"
                x-bind:style="'right:' + maxthumb + '%; left:' + minthumb + '%'"></div>

            <div class="absolute z-30 w-4 h-4 top-1 left-0 bg-primary-500 rounded-full -mt-2 -ml-1"
                x-bind:style="'left: ' + minthumb + '%'"></div>

            <div class="absolute z-30 w-4 h-4 top-1 right-0 bg-primary-500 rounded-full -mt-2 -mr-1"
                x-bind:style="'right: ' + maxthumb + '%'"></div>

        </div>

    </div>



</div>

@push('script')
    <script>
        function range() {
            return {
                minprice: 1000,
                maxprice: 7000,
                min: 100,
                max: 10000,
                minthumb: 0,
                maxthumb: 0,

                mintrigger() {
                    this.minprice = Math.min(this.minprice, this.maxprice - 500);
                    this.minthumb = ((this.minprice - this.min) / (this.max - this.min)) * 100;
                },

                maxtrigger() {
                    this.maxprice = Math.max(this.maxprice, this.minprice + 500);
                    this.maxthumb = 100 - (((this.maxprice - this.min) / (this.max - this.min)) * 100);
                },
            }
        }
    </script>
@endpush
