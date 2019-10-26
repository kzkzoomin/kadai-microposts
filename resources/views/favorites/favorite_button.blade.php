@if (Auth::id() != $micropost->id)
    @if (Auth::user()->liked($micropost->id))
        {!! Form::open(['route' => ['favorites.unlike', $micropost->id], 'method' => 'delete']) !!}
            {!! Form::submit('Unfavorite', ['class' => "btn btn-success btn-sm"]) !!}
        {!! Form::close() !!}
    @else
        {!! Form::open(['route' => ['favorites.like', $micropost->id]]) !!}
            {!! Form::submit('Favourite', ['class' => "btn btn-secondary btn-sm"]) !!}
        {!! Form::close() !!}
    @endif
@endif