<x-app-layout>
    <h1>Tasks</h1>

    <form action="/tasks" method="post">
        @csrf
        <input type="text" name="list" placeholder="The name of the task">
        <button type="submit">Add</button>
    </form>

    <ul style="list-style-type: none">
        @foreach ($tasks as $index => $task)
            <li>{{ $index + 1 }} - {{ $task->list }} - <a style="color: red" href="/tasks/{{ $task->id }}/edit">edit</a></li>
            
        @endforeach
    </ul>
</x-app-layout>