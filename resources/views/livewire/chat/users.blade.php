<div>
    @if(!empty($users))
        @foreach($users as $user)
            <div>
                <a class="align-middle border-b-2 border-b-green-700 font-bold" href="">{{ $user['name'] }}</a>
            </div>
        @endforeach
    @endif
</div>
