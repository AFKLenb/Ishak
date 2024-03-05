@seoTitle(__('Редактировать заявку'))

<x-app-layout>
    <x-slot:header>
        <div class="w-full flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Редактирование подписки') }} ""
            </h2>
            <a href="{{ route('subscriptions.index') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">{{ __('К списку заявок') }}</a>
        </div>
        </x-slot>
        <div class="my-4 p-4 rounded-md max-w-3xl mx-auto bg-white">
            <x-splade-form method="PUT" action="{{route('subscriptions.update', $subscription->id)}}" :default="$subscription">
                <x-splade-input class="mt-5" name="email" label="{{__('Электронная почта')}}" placeholder="{{__('niggaballs@gmail.com')}}"/>
                <x-splade-select name="isStatus" label="{{__('Статус заявки')}}">
                    <option value="0">{{__('Не активна')}}</option>
                    <option value="1">{{__('Активна')}}</option>
                </x-splade-select>
                <x-splade-submit label="Сохранить" class="mt-3"/>
            </x-splade-form>
        </div>
</x-app-layout>
