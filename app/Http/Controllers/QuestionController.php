<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Question;
use Auth;

class QuestionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required:max:50',
            'content' => 'required:max:255',
            'tag' => 'required:max:50'
        ]);

        $question = Question::create([
            "title" => $request["title"],
            "content" => $request["content"],
            "tag" => $request["tag"],
            "user_id" => Auth::user()->id
        ]);

        return redirect('/index')->with('success', "Pertanyaan berhasil dibuat!");
    }

    public function index()
    {
        $id = Auth::user()->id;
        $data = DB::table('questions')->where('user_id', $id)->get();
        return view('myquestions', compact('data'));
    }

    public function show($id)
    {
        $data = Question::find($id);

        return view('details', compact('data'));
    }

    public function edit($id)
    {
        $data = Question::find($id);

        return view('ubah', compact('data'));
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'title' => 'required:max:50',
            'content' => 'required:max:255',
            'tag' => 'required:max:50'
        ]);

        Question::where('id', $id)->update([
            "title" => $request["title"],
            "content" => $request["content"],
            "tag" => $request["tag"]
        ]);

        return redirect('index')->with('success', 'Pertanyaan berhasil diubah!');
    }

    public function destroy($id)
    {
        Question::destroy($id);

        return redirect('index')->with('success', 'Pertanyaan berhasil dihapus!');
    }
}
