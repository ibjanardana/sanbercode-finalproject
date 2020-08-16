@extends('layouts.master')
@section('title-page', 'Final Project | Pertanyaan Saya')
@section('title', 'Pertanyaan Saya')
@section('breadcumb', 'Pertanyaan Saya')
@section('pertanyaan-saya')
<a href="{{url('/index')}}" class="btn btn-secondary btn-sm mb-3">Kembali</a>
<div class="row">
    <div class="col-md-12">
        <div class="mr-3 p-1">
            @foreach($data as $key => $value)
            <div class="card float-left mr-4" style="width: 20rem;">
                <div class="card-body" style="height:195px;">
                    <div class="d-block mb-2" style="overflow:hidden; height: 27px; width: 250px;">
                        <p class="card-title"><strong>{{$value->title}}</strong></p>
                        <hr class="mt-4">
                    </div>
                    <div class="d-inline-block overflow-hidden h-50 w-75 mb-2">
                        {{$value->content}}
                    </div>
                    <div class="d-inline row float-right" style="margin-top:62px;">
                        <a class="float-right"><small class="text-primary">Vote : 4.5 / 5</small></a>
                    </div>
                    <div style="display: flex;">
                        <a href="{{ route('questions.edit', ['question' => $value->id]) }}" class="btn btn-primary btn-sm mr-2">Edit</a>
                        <form action="{{ route('questions.destroy', ['question' => $value->id]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="Delete" class="btn btn-danger btn-sm">
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
