<x-app-layout>
    <x-slot name="header">
      
        <x-head.h2>
            НОВОСТИ
            <x-button.create href="{{ route('news.create') }}">Добавить</x-button.create>
        </x-head.h2>
    </x-slot>

    <div class="py-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    {!! $news->links() !!}
                    <table class="w-full table-fixed border-collapse border border-solid border-gray-200 align-top">
                      <thead class="p-1 w-wull bg-white">
                        <tr class="flex text-gray-500">
                          <th class="flex-shrink-0 w-auto">Миниатюра</th>
                          <th class="flex-shrink-0 w-12 contenet-center text-center">&#128736;</th>
                          <th class="flex-1 min-w-2/5"><span class="font-bold">Заголовок</span>| <span class="font-extralight">Дата</span>| Текст</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($news as $item)
                            <tr class="flex shadow-md border border-solid border-gray-200">
                                <td class="flex-shrink-0 w-auto">
                                  @if(!empty($item->image))
                                  <img src="storage/posts/th_{{ $item->image }}" alt="" />
                                  @endif
                                </td>
                                <td class="flex-shrink-0 contenet-center align-top w-12">
                                    <a href="{{ route('news.edit',['id'=>$item->id]) }}" class="block text-center h-10 w-10 mx-1 mt-2 ">
                                        <svg class="h-10 w-10 text-gray-600 hover:text-green-600" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <path d="M12 19l7-7 3 3-7 7-3-3z" />  <path d="M18 13l-1.5-7.5L2 2l3.5 14.5L13 18l5-5z" />  <path d="M2 2l7.586 7.586" />  <circle cx="11" cy="11" r="2" /></svg>
                                    </a>
                                    <a href="{{ route('news.delete',['id'=>$item->id]) }}" class="block items-center mx-1 mt-5"><svg class="h-10 w-10 text-red-400 hover:text-red-600"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <rect x="3" y="3" width="18" height="18" rx="2" ry="2" />  <line x1="9" y1="9" x2="15" y2="15" />  <line x1="15" y1="9" x2="9" y2="15" /></svg></a>
                                </td>
                                <td class="border border-solid border-gray-200 align-top flex-1 min-w-2/5 ">
                                    <div class="font-bold">{{ $item->name }}</div>
                                    <div class="font-extralight text-xs">{{ $item->created }}</div>
                                    <div class="text-right">{{ strip_tags($item->body) }}</div>
                                </td>
                            </tr>
                        @endforeach
                      </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>