<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('CHAT') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h2 class="mb-6">Rooms</h2>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                @foreach($rooms as $room)
                    <div>
                        <a href="{{ route('chat.room', $room) }}">{{ $room->title }}</a>

                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
