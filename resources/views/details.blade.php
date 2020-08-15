@extends('layouts.master')
@section('title-page', 'Final Project | Details')
@section('title', 'Details')
@section('breadcumb', 'Details')
@section('details')
<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <form>
                    <div class="form-group">
                        <label for="judul">Judul Pertanyaan</label>
                        <input type="text" class="form-control" readonly class="form-control-plaintext" name="judul" id="judul">
                    </div>
                    <div class="form-group">
                        <label for="isi">Isi Pertanyaan</label>
                        <textarea class="form-control" readonly class="form-control-plaintext" id="isi" name="isi" rows="5"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="tag">Tag</label>
                        <input type="text" class="form-control" readonly class="form-control-plaintext" name="tag" id="tag">
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm">Jawab</button>
                    <button type="submit" class="btn btn-secondary btn-sm">Kembali</button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md 4">
        <div class="card">
            <div class="card-title mt-3 ml-3">
                <h5 class="font-weight-bold">Jawaban</h5>
            </div>
            <div class="card-body">
                <div class="overflow-auto pr-2 mb-3" style="height: 500px;">
                    @for($i = 0; $i < 5; $i++) <h6>Nama Contributor</h6>
                        <textarea class="form-control" id="jawaban" name="jawaban" rows="4"></textarea>
                        <div class="d-inline-block mb-3">
                            <a href="" class="d-inline" id=""><small>Komentar</small></a>
                            <a href="" class="d-inline" id=""><small>Vote</small></a>
                        </div>
                        @endfor
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
