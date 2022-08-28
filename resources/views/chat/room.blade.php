    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('CHAT') }}
            </h2>
        </x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <h2 class="mb-6">{{ $room->title }}</h2>

                <div class="flex gap-4 justify-around bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <h1>Section</h1>
                    <h1>Messages</h1>
                </div>
            </div>
        </div>
    </x-app-layout>
</h1>
