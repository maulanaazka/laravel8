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
        // membuat simple inputan jika hanya list saja yg diinput (harus ada default value untuk yg lain)
        // jika name dalam blade sama dengan name dalam db
        // dd($request->all());
        Task::create($request->all()); // create akan memberikan feedback, sedangkan insert tidak (hanya membeikan nilai boolean)

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