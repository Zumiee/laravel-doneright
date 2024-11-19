<h1>
    The task list!
</h1>

<div>
    @forelse ($tasks as $task)
        <div>
            {{-- <a href="{{ route('tasks.show', ['id', ]) }}"></a> --}}
            <a href="{{ route('tasks.show', ['id' => $task->id]) }}">{{ $task->title }}</a>
            <div>Description: {{ $task->description }}</div>
        </div>
    @empty
        <div>There are no tasks!</div>
    @endforelse
</div>


