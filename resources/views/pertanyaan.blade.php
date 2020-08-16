 @extends('layouts.master')
 @section('title-page', 'Final Project | Pertanyaan')
 @section('title', 'Pertanyaan')
 @section('breadcumb', 'Pertanyaan')
 @section('pertanyaan')
 <a class="btn btn-primary btn-sm mb-3" href="{{url('/questions/create')}}" role="button"><i class="fas fa-plus"></i> <strong class=""> Tambah</strong></a>

 <div class="row">
     <div class="col-md-12">
         <div class="mr-3 p-1">
             {{-- foreach disini --}}
             @foreach($data as $key => $value)
             <div class="card float-left mr-4" style="width: 20rem;">
                 <div class="card-body" style="height:195px;">
                     <div class="d-block mb-2" style="overflow:hidden; height: 27px; width: 250px;">
                         <p class="card-title"><strong>{{$value['title']}}</strong></p>
                         <hr class="mt-4">
                     </div>
                     <div class="d-inline-block overflow-hidden h-50 w-75 mb-2">
                         {{$value['content']}}
                     </div>
                     <div class="d-inline row float-right" style="margin-top:62px;">
                         <a class="float-right"><small class="text-primary">Vote : 4.5 / 5</small></a>
                     </div>
                     <div class="d-inline">
                         <a href="{{url('/jawaban')}}" class="btn btn-success btn-sm">Jawab</a>
                         <a href="{{url('/questions')}}/{{$value['id']}}" class="btn btn-primary btn-sm">Details</a>
                         <a href="{{url('/komentar')}}" class="btn btn-danger btn-sm">Komentar</a>
                     </div>
                 </div>
             </div>
             @endforeach

         </div>
     </div>
 </div>
 @endsection
