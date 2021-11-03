<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    public function index()
    {
        return view('tasks.index', [
            'tasks' => Task::orderBy('id', 'desc')->get(),
        ]);
    }

    public function store(Request $request) // reqquest untuk memasukkan / mengubah file dalam db
    {
        Task::create([
            'list' => $request->list,
            'mark' => false,
        ]); // create akan memberikan feedback, sedangkan insert tidak (hanya membeikan nilai boolean)

        return back();
    }

    public function edit($id)
    {
        // $task = Task::where('id', $id)->first(); // ambil data / fetching data secara tunggal
        $task = Task::find($id); // untuk mencari data dengan id
        
        return view('tasks.edit', ['task' => $task]);
    }

    public function update(Request $request, $id)
    {
        Task::find($id)->update(['list' => $request->list]);
        return redirect('tasks');
    }

    public function destroy($id)
    {
        Task::find($id)->delete();
        return back();
    }
}