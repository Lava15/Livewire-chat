<div>
    <form action="" wire:submit.prevent="send" >
        <div>
            <textarea class="w-1/2 text-black rounded-lg" rows="10" wire:model="body"></textarea>
        </div>
            {{ $body }}
        <button class="bg-white text-blue-600 w-1/2 my-5 rounded-lg p-2" type="submit">
            Send
        </button>
    </form>
</div>
