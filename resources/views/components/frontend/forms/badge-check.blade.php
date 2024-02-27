@props(['name' => '', 'id'=>'', 'checked'=> false])
<label for="{{ $id }}" class="badge-check border border-transparent cursor-pointer hover:bg-primary-500 hover:shadow-primary-base-1 hover:border-primary-700 hover:text-white transition-all duration-300 py-1.5 px-3 rounded-[5px] bg-gray-50 body-small-500 text-gray-700">
    <input type="checkbox" id="{{ $id }}" class="hidden" @if($checked) checked @endif>
    <span>{{ $name }}</span>
</label>
