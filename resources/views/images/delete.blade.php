<x-app-layout>
    <x-slot name="header">
        <x-head.h2>{{ __('Подтверждение удаления') }}</x-head.h2>
    </x-slot>

    <div class="py-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                        <form method="post" action="{{ route('images.destroy') }}">
                            @csrf
                            <input type="hidden" name="id" value={{ $data->id }} />
                            <input type="hidden" id="user_id" name="user_id" value={{ $data->user_id }} />
                            <table class="table-auto my-3">
                                <tr>
                                    <td  class="block md:table-cell">Заголовок</td>
                                    <td class="block md:table-cell">{{ Arr::exists($data, 'name') ? $data->name : '' }}</td>
                                </tr>
                                <tr>
                                    <td class="block md:table-cell">Картинка</td>
                                    <td class="block md:table-cell">
                                        @if (!empty($data->image))
                                            <img src="{{ url('/') }}/storage/images/th_{{ $data->image }}" alt="" />
                                            <input type="hidden" id="image_del" name="image_del" value={{ $data->image}} />
                                        @endif
                                    </td>
                                </tr>
                            </table>
                            <button type="submit" class="border-solid border border-red-500 rounded bg-red-100 hover:bg-red-200 p-2">Удалить</button>
                            <a href="{{ route('images.dashboard') }}" class="border-solid border border-gray-500 rounded bg-gray-100 hover:bg-gray-200 p-2">Отменить</a>
                        </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>