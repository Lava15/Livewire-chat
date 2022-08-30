<div>
    <form action="#" wire:submit.prevent="send">
        <span x-text="typing"></span>

        <div>
            <textarea class="w-1/2 text-black rounded-lg" rows="10" wire:model="body"></textarea>
        </div>
        <button class="bg-white text-blue-600 w-1/2 my-5 rounded-lg p-2" x-ref="submit" type="submit">
            Send
        </button>
    </form>
</div>
