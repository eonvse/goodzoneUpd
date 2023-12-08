<x-home-layout>
    <div class="flex-1 space-y-4 space-x-1 align-top md:table-cell mx-2 w-full md:w-1/2 flayer">
        <div class='text-green-500 font-bold text-2xl text-center'>Антикафе 
            <div id="logo" class="font-normal text-blue-500 text-4xl md:text-3xl">Good Zone</div>
        </div>
        <div class='flex text-blue-500 font-medium text-lg pl-5'> 
            <div>
            <svg class="h-6 w-6"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
            </svg>
        </div>
        <div>
            <a href="https://yandex.ru/maps/-/CCUFZGtD1A">г. Усть-Илимск, <span class="underline">пр. Мира 59, ТК "Север" (вход со двора)</span>.</a>
        </div>
        </div>
        <div class="flex md:invisible md:fixed top-0 left-0">
                        
            @foreach ($news as $item)
                @if($loop->first)
                    @if(!empty($item->image))
                        <div class="max-w-1/3">
                            <img src="storage/posts/th_{{ $item->image }}" alt="" class="max-w-1/3" />
                        </div>
                    @endif
                @endif
            @endforeach
                        
            <div class="min-w-2/3">
                @foreach ($news as $item)
                    @if ($loop->iteration <=3)
                        <div class="flex-1 w-full min-w-2/3 text-sm text-gray-500 mb-2">
                            <a href="#item{{ $item->id }}" class="flex flex-row-reverse w-full">
                                <span class="underline flex flex-grow mx-1">{{ $item->name }}</span> 
                                <span class="flex flex-grow-0 w-6">
                                    <svg class="h-5 w-5 mx-auto"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M4 21v-13a3 3 0 0 1 3 -3h10a3 3 0 0 1 3 3v6a3 3 0 0 1 -3 3h-9l-4 4" />  <line x1="12" y1="11" x2="12" y2="11.01" />  <line x1="8" y1="11" x2="8" y2="11.01" />  <line x1="16" y1="11" x2="16" y2="11.01" /></svg>
                                </span>
                            </a>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
        <div class='text-blue-800 font-medium text-lg w-4/5 pl-5'>
            Мероприятия для школьников: День именинника, 8 марта, 23 февраля, Новогодние вечеринки, Празднование начала и окончания учебного года.
        </div>
        <div class='text-pink-700 font-medium text-lg pl-20 mr-5'>
            День рождения в антикафе: уютная атмосфера, индивидуальный подход, развлекательные программы.
        </div>
        <div class='text-gray-800 font-medium text-lg w-4/5 pl-10'>
            Сити-квест: незабываемое приключение для любой компании.
        </div>
        <div class='text-red-600 font-semibold text-2xl text-center'>Бронируйте время.</div>
        <div class='text-blue-800 font-semibold text-2xl text-center pl-20'>
            <a class="flex mx-1 hover:text-green-500 transition-all rounded" href="tel:+79148767422">
                <svg class="h-8 w-8"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" />  <path d="M15 7a2 2 0 0 1 2 2" />  <path d="M15 3a6 6 0 0 1 6 6" /></svg>
                <span class="mx-1">+79148767422</span>
            </a>
        </div>
        <div class='text-red-600 font-semibold text-2xl text-center'>Отдыхайте с удовольствием.</div>
        <div class='text-red-600 font-semibold text-2xl text-center'>Сделайте свой день незабываемым.</div>
    </div>     
    
    <div class="align-top md:table-cell min-h-full max-h-full h-full md:pt-8 ">
    @foreach($news as $item)
        <a name="item{{ $item->id }}"></a>
        <div id="news-item" class="bg-gradient-to-r from-white to-yellow-300">
            <div id="news-item-caption" class="w-full text-xl text-center font-bold text-blue-500 overflow-ellipsis mt-7 bg-gradient-to-r from-yellow-300 to-white">
                {{ $item->name }}
            </div>
            <div id="news-item-body" class="w-full mb-3 ">
            @if(!empty($item->image))
                <div class="max-w-full"><img src="storage/posts/{{ $item->image }}" alt="" class="md:transform md:rotate-2 rounded" /></div>
            @endif
                        
            @if(!empty($item->body))
                <div class="md:transform md:-rotate-1 font-medium bg-gradient-to-r from-white p-2">{!! $item->body !!}</div>
            @endif
            </div>
        </div>
    @endforeach
    {!! $news->links() !!}
    </div>
    
</x-home-layout>
