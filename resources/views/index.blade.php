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
        @if(session('sukses'))
            <div class="alert alert-success">
                {{session('sukses')}}
            </div>
        @endif
        <a class="btn btn-primary" href="{{route('questions.create')}}">Buat Pertanyaan Baru</a>
         <table id="example1" class="table table-bordered table-striped">
             <thead>
                 <tr>
                     <th>#</th>
                     <th>Judul Pertanyaan</th>
                     <th>Isi Pertanyaan</th>
                     <th>Tag</th>
                     <th>Action</th>
                 </tr>
             </thead>
             <tbody>
                 @forelse($data as $i => $info)
                    <tr>
                        <td> {{$i + 1}} </td>
                        <td> {{$info->title}} </td>
                        <td> {{$info->content}} </td>
                        <td> {{$info->tag}} </td>
                        <td> <a href="{{ route('questions.show', ['question' => $info->id]) }}" class="btn btn-info btn-sm">Details</a> </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" align="center">No Posts!</td>
                    </tr>
                @endforelse
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
