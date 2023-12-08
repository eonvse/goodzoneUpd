<x-app-layout>
    <x-slot name="header">
        <x-head.h2>{{ __('Редактировать запись') }}</x-head.h2>
    </x-slot>

    <div class="py-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                        <form method="post" action="{{ route('news.update') }}" enctype="multipart/form-data">
                            @csrf
                            @if (Arr::exists($data, 'id'))
                            <input type="hidden" name="id" value={{ $data->id }}>
                            <input type="hidden" id="user_id" name="user_id" value={{ $data->user_id }}>
                            @endif
                            <table class="table-auto my-3">
                                <tr>
                                    <td class="block md:table-cell italic font-light">Название</td>
                                    <td class="block md:table-cell"><input type="text" id="name" name="name" required value="{{ Arr::exists($data, 'name') ? $data->name : '' }}"/></td>
                                </tr>
                                <tr>
                                    <td class="block md:table-cell italic font-light">Изображение</td>
                                    <td class="block md:table-cell">
                                        @if (!empty($data->image))
                                            <div class="font-bold overflow-visible">
                                                <img src="{{ url('/') }}/storage/posts/th_{{ $data->image }}" alt="" />
                                                &#8659; Для замены &#8659; выберите Новый файл.
                                                <input type="hidden" id="image_del" name="image_del" value={{ $data->image}} />
                                            </div>
                                        @endif
                                        <input type="file" id="image" name="image" accept="image/*" />
                                    </td>
                                </tr>
                                <tr>
                                    <td class="block md:table-cell italic font-light">Содержание</td>
                                    <td class="block md:table-cell">
                                        <textarea id="body" rows="3" name="body">{{ Arr::exists($data, 'body') ? $data->body : '' }}</textarea>
                                        <script>
                                            ClassicEditor
                                                .create( document.querySelector( '#body' ), {
                                                toolbar: [  'heading',
                                                            '|',
                                                            'bold',
                                                            'italic',
                                                            'link',
                                                            '|',
                                                            'mediaEmbed'
                                                             ]
                                            } )
                                                .catch( error => {
                                                console.error( error );
                                            } );
                                        </script>
                                    </td>
                                </tr>
                            </table>
                            <button type="submit" class="border-solid border border-green-500 rounded bg-green-100 hover:bg-green-200 p-2">Сохранить</button>
                            <a href="{{ route('news.dashboard') }}" class="border-solid border border-gray-500 rounded bg-red-100 hover:bg-red-200 p-2">Отменить</a>
                        </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>