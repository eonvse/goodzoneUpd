<x-home-layout>
    <div class='flex-1 text-center md:mt-[60px]'>        
        <x-newYear class="py-2 md:py-0" />
        <div class="text-green-500 font-extrabold text-3xl pt-4 md:pt-2">Фотогалерея</div> 
        <div id="head_logo" class="font-normal text-blue-500 text-4xl md:text-3xl">Good&nbsp;Zone</div>
    </div>
    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-2">
    @foreach($photos as $item)
        <div class="w-full aspect-square text-center">
            <a href="storage/images/{{ $item->image }}" class="w-full" data-lightbox="Фото" data-title="{{ $item->name }}"><img class="w-full" src="storage/images/th_{{ $item->image }}" alt="" class="rounded" /></a>                      
            @if(!empty($item->name))
                <span class="text-gray-800">{{ $item->name }}</span>
            @endif
       </div>
    @endforeach
    </div>
    {!! $photos->links() !!}
</x-home-layout>

