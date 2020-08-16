<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Answer;

class AnswerController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function create($id_pertanyan) {
        return view('');
    }

    public function store(Request $request) {
        $request->validate([
            'content' => 'required:max:255',
        ]);

        $answer = Answer::create([
            "content" => $request["content"],
            "user_id" => Auth::user()->id
        ]);

        return redirect('')->with('success', "Jawaban berhasil dibuat!");
    }

    public function index() {
        $data = Answer::all();

        return view('index', compact('data'));
    }

    public function edit($id_jawaban)
    {
        $data = Answer::find($id);

        return view('edit', compact('data'));
    }

    public function update($id_jawaban, Request $request)
    {
        $request->validate([
            'content' => 'required:max:255',
        ]);

        Answer::where('id', $id)->update([
            "content" => $request["content"],
        ]);

        return redirect('')->with('success', 'Jawaban berhasil diubah!');
    }

    public function destroy($id_jawaban)
    {
        Answer::destroy($id);
        
        return redirect('')->with('success', 'Jawaban berhasil dihapus!');
    }
}
