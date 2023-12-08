<x-app-layout>
    <x-slot name="header">
        <x-head.h2>{{ __('Редактировать') }}</x-head.h2>
    </x-slot>

    <div class="py-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                        <form method="post" action="{{ route('images.update') }}" enctype="multipart/form-data">
                            @csrf
                            @if (Arr::exists($data, 'id'))
                            <input type="hidden" name="id" value={{ $data->id }}>
                            <input type="hidden" id="user_id" name="user_id" value={{ $data->user_id }}>
                            @endif
                            <table class="table-auto my-3">
                                <tr>
                                    <td class="block md:table-cell">Картинка</td>
                                    <td class="block md:table-cell">
                                        <div class="text-bold">&#8659; Для замены &#8659; выберите Новый файл.</div>
                                        <input type="file" id="image" name="image" accept="image/*" />
                                        @if (!empty($data->image))
                                            <img src="{{ url('/') }}/storage/images/th_{{ $data->image }}" alt="" />
                                            <input type="hidden" id="image_del" name="image_del" value={{ $data->image}} />
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td class="block md:table-cell">Заголовок</td>
                                    <td class="block md:table-cell"><input type="text" id="name" name="name" value="{{ Arr::exists($data, 'name') ? $data->name : '' }}"/></td>
                                </tr>
                            </table>
                            <button type="submit" class="border-solid border border-green-500 rounded bg-green-100 hover:bg-green-200 p-2">Сохранить</button>
                            <a href="{{ route('images.dashboard') }}" class="border-solid border border-gray-500 rounded bg-red-100 hover:bg-red-200 p-2">Отменить</a>
                        </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>