 @extends('layouts.master')
 @section('title-page', 'Project Final | Dasboard')
 @section('title', 'Dashboard')
 @section('breadcumb', 'Dashboard')
 @section('index')
 <div class="card">
     <div class="card-header">
         <h3 class="card-title">DataTable Pertanyaan</h3>
     </div>
     <!-- /.card-header -->
     <div class="card-body">
         <table id="example1" class="table table-bordered table-striped">
             <thead>
                 <tr>
                     <th>#</th>
                     <th>Judul Pertanyaan</th>
                     <th>Isi Pertanyaan</th>
                     <th>Vote</th>
                     <th>Opsi</th>
                 </tr>
             </thead>
             <tbody>
                 @for($i = 0; $i < 10; $i++) <tr>
                     <td>{{$i}}</td>
                     <td>Camino 1.5</td>
                     <td>OSX.3+</td>
                     <td>1.8</td>
                     <td>A</td>
                     </tr>
                     @endfor

             </tbody>
         </table>
     </div>
     <!-- /.card-body -->
 </div>
 @endsection

 @push('scripts')
 <script src="{{asset('plugins/datatables/jquery.dataTables.js')}}"></script>
 <script src="{{asset('plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
 <script>
     $(function() {
         $("#example1").DataTable();
     });

 </script>
 @endpush
