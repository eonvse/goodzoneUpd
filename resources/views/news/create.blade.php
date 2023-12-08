<x-app-layout>
    <x-slot name="header">
        <x-head.h2>
            {{ __('Добавление новости') }}
        </x-head.h2>
    </x-slot>

    <div class="py-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                        <form method="post" action="{{ route('news.store') }}" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" id="user_id" name="user_id" value="{{ Auth::user()->id }}">
                            <table class="table-auto my-3">
                                <tr>
                                    <td class="block md:table-cell italic font-light">Название</td>
                                    <td class="block md:table-cell"><input type="text" id="name" name="name" required/></td>
                                </tr>
                                <tr>
                                    <td class="block md:table-cell italic font-light">Изображение</td>
                                    <td class="block md:table-cell "><input type="file" id="image" name="image" accept="image/*" /></td>
                                </tr>
                                <tr>
                                    <td class="block md:table-cell italic font-light">Содержание</td>
                                    <td class="block md:table-cell">
                                        <textarea id="body" rows="5" name="body"></textarea>
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
                            <button type="submit" class="border-solid border border-green-500 rounded bg-green-100 hover:bg-green-200 p-2">Добавить</button>
                            <a href="{{ route('news.dashboard') }}" class="border-solid border border-gray-500 rounded bg-red-100 hover:bg-red-200 p-2">Отменить</a>
                        </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>