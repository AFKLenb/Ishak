@seoTitle(__('Подписки'))

<x-app-layout>
    <x-slot:header>
        <div class="w-full flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">{{ __('Заявки') }}</h2>
            <a href="{{ route('subscriptions.create') }}" class="bg-gray-300 hover:bg-gray-600 hover:text-white text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">{{ __('Новая подписка') }}</a>
        </div>
    </x-slot>
        <div class="my-4 p-4 rounded-md max-w-[1400px] mx-auto bg-white">
            <x-splade-table :for="$subscriptions">
                @cell('action', $subscriptions)
                    <div class="flex gap-3">
                        <Link href="{{ route('subscriptions.destroy', $subscriptions->id) }}" class="bg-gray-300 hover:bg-gray-600 hover:text-white text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center" confirm="Внимание" confirm-text="Вы действительно хотите удалить категорию?" confirm-button="Да" cancel-button="Нет" method="DELETE" >{{__('Удалить')}}</Link>
                        <Link href="{{ route('subscriptions.edit', $subscriptions->id) }}" class="bg-gray-300 hover:bg-gray-600 hover:text-white text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center" >{{__('Редактировать')}}</Link>
                        <Link href="{{ route('subscriptions.show', $subscriptions->id) }}" class="bg-gray-300 hover:bg-gray-600 hover:text-white text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center" >{{__('Подробнее')}}</Link>
                    </div>
                @endcell
                @cell('isStatus', $subscriptions)
                    @if($subscriptions->isStatus == 0)
                        <div class="bg-gray-300 text-black font-bold py-2 px-4 rounded inline-flex items-center">
                            {{ __('Не активна') }}
                        </div>
                    @elseif($subscriptions->isStatus == 1)
                        <div class="bg-green-400 text-black font-bold py-2 px-4 rounded inline-flex items-center">
                            {{ __('Активна') }}
                        </div>
                    @endif
                @endcell
            </x-splade-table>
        </div>

</x-app-layout>

