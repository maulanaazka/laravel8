<x-app-layout>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Create New Task</div>
                    <div class="card-body">
                        <form action="{{ route('tasks.store') }}" method="post" class="d-flex">
                            @csrf
                            <input type="text" name="list" class="form-control me-2" placeholder="The name of the task">
                            <button class="btn btn-primary" type="submit">Add</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <ul class="list-group mt-4">
            @foreach ($tasks as $index => $task)
            <li class="list-group-item d-flex align-items-center justify-content-between">
                {{ $index + 1 }} - {{ $task->list }}
                <div class="d-flex">
                    <a class="btn btn-primary me-2" href="{{ route('tasks.edit', $task->id) }}">edit</a>
                    <form action="{{ route('tasks.destroy', $task->id) }}" method="post">
                        @csrf
                        @method("delete")
                        <button class="btn btn-danger" type="submit">delete</button>
                    </form>
                </div>
            </li>

            @endforeach
        </ul>
    </div>

</x-app-layout>
