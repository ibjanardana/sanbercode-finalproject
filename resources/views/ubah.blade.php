@extends('layouts.master')
@section('title-page', 'Final Project | Edit Pertanyaan')
@section('title', 'Edit Pertanyaan')
@section('breadcumb', 'Edit Pertanyaan')
@section('ubah')
<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                <form role="form" action="{{ route('questions.update', ['question' => $data->id]) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="judul">Judul Pertanyaan</label>
                        <input type="text" class="form-control" name="title" id="judul" value="{{ old('title', $data->title) }}" required placeholder="Ketikkan judul pertanyaan di sini...">
                    </div>
                    <div class="form-group">
                        <label for="isi">Isi Pertanyaan</label>
                        <textarea class="form-control" id="isi" name="content" rows="5" required placeholder="Ketikkan pertanyaan di sini...">{{ old('content', $data->content) }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="tag">Tag</label>
                        <input type="text" class="form-control" name="tag" id="tag" value="{{ old('tag', $data->tag) }}" required placeholder="Ketikkan tag di sini...">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{url('/questions')}}" class="btn btn-secondary">Kembali
                    </a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
