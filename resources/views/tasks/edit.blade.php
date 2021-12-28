<x-app-layout>

    <div class="container">
        <div class="row">
            <div class="col-md-6"></div>
            <h1>Tasks</h1>
            <form action="{{ route('tasks.update', $task->id) }}" method="post">
                {{-- karena html blm support put --}}
                @method('put')
                @csrf
                <div class="mb-2">
                    <input type="text" name="list" value="{{ $task->list }}" class="form-control"
                        placeholder="The name of the task">
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>

</x-app-layout>
