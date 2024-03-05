@seoTitle(__('Главная'))

<x-app-layout>
    <x-slot:header>
        <div class="w-full flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">{{ __('Главная') }}</h2>
            <a href="{{ route('heroes.create') }}" class="bg-gray-300 hover:bg-gray-600 hover:text-white text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">{{ __('Новая главная') }}</a>
        </div>
    </x-slot>
        <div class="my-4 p-4 rounded-md max-w-[1400px] mx-auto bg-white">
            <x-splade-table :for="$heroes">
                @cell('image', $heroes)
                <img class="max-w-[35px] rounded-full max-h-[35px] mt-[15px] mb-[15px]" src="{{Storage::url($heroes->image)}}" alt="">
                @endcell
                @cell('action', $heroes)
                    <div class="flex gap-3">
                        <Link href="{{ route('heroes.destroy', $heroes->id) }}" class="bg-gray-300 hover:bg-gray-600 hover:text-white text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center" confirm="Внимание" confirm-text="Вы действительно хотите удалить главную?" confirm-button="Да" cancel-button="Нет" method="DELETE" >{{__('Удалить')}}</Link>
                        <Link href="{{ route('heroes.edit', $heroes->id) }}" class="bg-gray-300 hover:bg-gray-600 hover:text-white text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center" >{{__('Редактировать')}}</Link>
                    </div>
                @endcell
            </x-splade-table>
        </div>

</x-app-layout>

