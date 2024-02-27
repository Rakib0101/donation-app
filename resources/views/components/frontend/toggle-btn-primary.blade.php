@props(['label' => ''])
<label class="relative inline-flex items-center cursor-pointer">
    <input type="checkbox" value="" class="hidden peer">
    <div
        class="w-10 h-5 bg-gray-100 peer-focus:outline-none  rounded-full peer  peer-checked:after:translate-x-[161%] rtl:peer-checked:after:-translate-x-full after:content-[''] after:absolute after:top-[6px] after:start-[4px] after:bg-white  after:rounded-full after:h-3 after:w-3 after:transition-all  peer-checked:bg-blue-600">
    </div>
    <span
        class="body-base-500 text-gray-700 hover:text-gray-900 transition duration-200 ease-linear peer-checked:text-gray-900 ms-3">{{ $label }}</span>
</label>
