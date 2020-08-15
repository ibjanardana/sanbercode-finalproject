 @extends('layouts.master')
 @section('title-page', 'Final Project | Pertanyaan')
 @section('title', 'Pertanyaan')
 @section('breadcumb', 'Pertanyaan')
 @section('pertanyaan')
 <a class="btn btn-primary btn-sm mb-3" href="{{url('/tambah')}}" role="button"><i class="fas fa-plus"></i> <strong class=""> Tambah</strong></a>

 <div class="row">
     <div class="col-md-12">
         <div class="mr-3 p-1">
             {{-- foreach disini --}}
             @for($i = 0; $i < 8; $i++) <div class="card float-left mr-4" style="width: 20rem;">
                 <div class="card-body">
                     <h5 class="card-title"><strong>Judul Pertanyaan aaaaaaaaaaaaaaa</strong></h5>
                     <div class="d-inline overflow-auto h-75 w-75">
                         Isi Pertanyaan, qqqqqqaaqqqqqqqaaaaaaaaaaaSome quick example text to build on the card title and make up the bulk of the card's content.
                     </div>
                     <div class="row float-right mt-3">
                         <a class="d-inline float-right"><small class="text-primary">Vote : 4.5 / 5</small></a>
                     </div>
                     <div class="mt-4">
                         <a href="{{url('/jawaban')}}" class="btn btn-success btn-sm">Jawab</a>
                         <a href="{{url('/details')}}" class="btn btn-primary btn-sm">Details</a>
                         <a href="{{url('/komentar')}}" class="btn btn-danger btn-sm">Komentar</a>
                     </div>
                 </div>
         </div>
         @endfor

     </div>
 </div>
 </div>
 @endsection
