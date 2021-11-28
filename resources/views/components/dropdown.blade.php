@props(['trigger'])
<div x-data="{show:false}" @click.away ="show = false" >
    {{-- tigger --}}
    <div @click="show = !show">
        {{$trigger}}
    </div>
   
   {{-- links --}}
    <div x-show="show" class="py-2 absolute bg-gray-100 mt-2 w-full rounded-xl z-50" style="display: none">
        {{$slot}}
    </div>
</div>