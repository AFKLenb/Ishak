@seoTitle(__('Редактировать'))

<x-app-layout>
    <x-slot:header>
        <div class="w-full flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Редактирование категории') }} {{$hero->title}}
            </h2>
            <a href="{{ route('heroes.index') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">{{ __('К списку услуг') }}</a>
        </div>
        </x-slot>
        <div class="my-4 p-4 rounded-md max-w-3xl mx-auto bg-white">
            <x-splade-form method="PUT" action="{{route('heroes.update', $hero->id)}}" :default="$hero">
                <x-splade-input name="title" label="{{__('Название категории')}}" placeholder="{{__('Есть пробитие')}}"/>
                <x-splade-textarea class="mt-5" name="description" label="{{__('Описание')}}" placeholder="{{__('Пробитие туза')}}"/>
                <x-splade-input name="plus" label="{{__('Наши плюсы')}}" placeholder="{{__('Есть пробитие')}}"/>
                <x-splade-input name="plusOne" label="{{__('Плюс первый')}}" placeholder="{{__('Есть пробитие')}}"/>
                <x-splade-input name="plusTwo" label="{{__('Плюс второй')}}" placeholder="{{__('Есть пробитие')}}"/>
                <x-splade-input name="plusTree" label="{{__('Плюс третий')}}" placeholder="{{__('Есть пробитие')}}"/>
                <x-splade-file name="image" :show-filename="false" preview label="{{__('Изображение')}}"/>
                <img class="max-w-[150px] rounded-md max-h-[150px] mt-[15px] mb-[15px]" src="{{Storage::url($hero->image)}}" alt="">
                <x-splade-submit label="Сохранить" class="mt-3"/>
            </x-splade-form>
        </div>
</x-app-layout>
