<div>
    <form action="#" wire:submit.prevent="send">
        <div>
            <textarea class="w-full md:w-1/2 text-black rounded-lg" rows="10" wire:model="body"></textarea>
        </div>
        <button class="bg-white font-bold text-blue-600 w-full hover:bg-blue-400 hover:text-gray-50 md:w-1/2 my-5 rounded-lg p-2" x-ref="submit" type="submit">
            Send
        </button>
    </form>
</div>
