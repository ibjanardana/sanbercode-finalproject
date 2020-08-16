@extends('layouts.master')
@section('title', 'Buat Pertanyaan')
@section('breadcumb', 'Buat Pertanyaan')
@section('tambah-pertanyaan')
<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                <form action="{{url('/questions')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="judul">Judul Pertanyaan</label>
                        <input type="text" class="form-control" name="title" id="judul" required placeholder="Ketikkan judul pertanyaan di sini...">
                    </div>
                    <div class="form-group">
                        <label for="isi">Isi Pertanyaan</label>
                        <textarea class="form-control" id="isi" name="content" rows="5" required placeholder="Ketikkan pertanyaan di sini..."></textarea>
                    </div>
                    <div class="form-group">
                        <label for="tag">Tag</label>
                        <input type="text" class="form-control" name="tag" id="tag" required placeholder="Ketikkan tag di sini...">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{url('/questions')}}" class="btn btn-secondary">Kembali</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
