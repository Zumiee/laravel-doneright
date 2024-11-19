@extends('layouts.app')

@section('title', 'Done Right✅')
@section('content')
    <h1>
        Tasks!
    </h1>

    <div>
        @forelse ($tasks as $task)
            <div>
                {{-- <a href="{{ route('tasks.show', ['id', ]) }}"></a> --}}
                <a href="{{ route('tasks.show', ['id' => $task->id]) }}">{{ $task->title }}</a>
            </div>
        @empty
            <div>There are no tasks!</div>
        @endforelse
    </div>
@endsection

