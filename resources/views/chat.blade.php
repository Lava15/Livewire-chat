<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('CHAT') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="h-full mx-auto sm:px-6 lg:px-8">
            <h2 class="mb-6 w-full md:w-1/2 mx-auto bg-indigo-700 text-center font-bold text-white text-2xl border border-white border-2 rounded-xl shadow-lg">
                Rooms</h2>
            <div class="bg-white mx-auto rounded-lg shadow-lg sm:rounded-lg w-full md:w-1/2">
                @foreach($rooms as $room)
                    <div class="text-start">
                        <a class="p-10 block w-full hover:bg-gray-200"
                           href="{{ route('chat.room', $room) }}">{{ $room->title }}</a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
