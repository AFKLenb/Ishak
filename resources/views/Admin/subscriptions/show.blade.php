@seoTitle(__($subscription->email))

<x-app-layout>
    <x-slot:header>
        <div class="w-full flex items-center justify-between">
            <a href="{{ route('subscriptions.index') }}" class="bg-gray-300 hover:bg-gray-600 hover:text-white text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">{{ __('К списку подписок') }}</a>
        </div>
        </x-slot>
        <div class="flex justify-between  my-4 p-4 rounded-md max-w-[1240px] mx-auto bg-white">
            <div class="flex gap-[80px]  items-top  p-[15px]">
                <div class="flex flex-col items-start justify-between">
                    <div class=" w-full items-center">
                    </div>
                    <div class="mt-[30px]">
                        <p class="text-[18px] whitespace-normal ">{{$subscription->email}}</p>
                    </div>
                </div>
            </div>
            <div class="flex flex-col justify-between p-[15px]">
                <p class="">Дата оставления заявки: <br> {{$subscription->date}}</p>

            </div>
        </div>
</x-app-layout>

