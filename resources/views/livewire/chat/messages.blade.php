<div>
    @if($messages->count())
        @foreach($messages as $message)
            <div class="mb-5 pb-5 border-b">
                <div>
                    <h2>{{ $message->user->name }}</h2>
{{--                    <time>{{ $message->created_at->toDateTimeString() }}</time>--}}
                    <span>{{ $message->body }}</span>
                </div>
            </div>
        @endforeach
    @else
        <h1>No messages</h1>
    @endif
</div>
