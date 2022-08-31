<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('CHAT') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <h1 class="font-bold mb-6 w-1/6 mx-auto text-center text-2xl border border-cyan-400 border-2 rounded-xl">ROOM</h1>
            <h2 class="mb-6 w-1/6 font-bold mx-auto bg-white text-center text-2xl border border-cyan-400 border-2 rounded-xl">{{ $room->title }}</h2>

            <div class="flex bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="w-1/4 text-black my-5   text-center border-r-2">
                    <livewire:chat.users :room="$room"/>
                </div>
                <span class="w-full h-80 text-center overflow-y-scroll">
                <livewire:chat.messages :room="$room" :messages="$messages"/>
                </span>

            </div>
            <div class=" text-gray-800 font-bold w-full text-center">
                <p class="text-2xl py-6">Messages</p>
                <livewire:chat.send-message :room="$room"/>
            </div>
        </div>
    </div>
</x-app-layout>
</h1>
