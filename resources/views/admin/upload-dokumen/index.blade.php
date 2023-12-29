@extends('master.dashboard')
@section('title','Upload Dokumen')
@push('style')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
<link href="
https://cdn.jsdelivr.net/npm/sweetalert2@11.9.0/dist/sweetalert2.min.css
" rel="stylesheet">

<link href="
https://cdn.jsdelivr.net/npm/lightbox2@2.11.4/dist/css/lightbox.min.css
" rel="stylesheet">

<style>
<style>
  .buttons-print{
    background-color: rgb(133, 72, 207) !important; 
    color: white !important;
    border: none !important;
    outline: none !important;
  }
  

</style>
@endpush

@include('admin.upload-dokumen.modal')

@section('content') 

    <section id="welcome">
      <div class="row">
        <div class="container">
          <h2>
            SELAMAT DATANG DI<br />
            DASHBOARD MALA<span>&#128075;&#127995;</span>
          </h2>

          <nav
            aria-label="breadcrumb"
            class="justify-content-center d-flex pt-3"
          >
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="/admin">Dashboard</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                Upload Dokumen
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </section>

    <section id="content">
      <div class="container py-4">
        <div class="row justify-content-between mb-3">
            <div class="col-6 text-left align-self-center">
                <h4>Kelola Dokumen Panduan PPG</h4>
            </div>
            <div class="col-6 justify-content-end d-flex">
                <a href="javascript::void(0)" class="openModal btn btn-primary btn-lg">Upload Dokumen</a>
            </div>
        </div>
        <div class="row justify-content-center text-center">
          <table class="table" id="tableKritikSaran">
            <table id="tabledocument" class="table w-100">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>File</th>
                        <th>Tanggal</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- data table ajax--}}
                </tbody>
            </table>
        </table>
        </div>
      </div>
    </section>
@endsection


@push('script')
<script src="
https://cdn.jsdelivr.net/npm/sweetalert2@11.9.0/dist/sweetalert2.all.min.js
"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap4.min.js"></script> 
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
 <script src="https://cdn.datatables.net/fixedcolumns/4.3.0/js/dataTables.fixedColumns.min.js"></script>
 <script src="
 https://cdn.jsdelivr.net/npm/lightbox2@2.11.4/dist/js/lightbox.min.js
 "></script>
 
 <script>
   lightbox.option({
     'albumLabel': false
   })
 </script>
<script>
    jQuery(document).ready(function ($) {
        var table = $('#tabledocument').DataTable({
            processing: true,
            serverside: true,
            scrollX: true,
            "order": [
                [0, "asc"]
            ],
            ajax: {
                url: '{{route("getDokumen")}}',
            },

            columns: [{
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex',
                },
                {
                    data: 'name',
                    name: 'name',
                },{
                    data: 'file',
                    name: 'file',
                    render: function(data) {
                        return '<a href="'+data+'" class="btn btn-main" target="_blank">Lihat Panduan</a>'
                    }
                },{
                    data: 'created_at',
                    name: 'created_at',
                },{
                    data: 'action',
                    name: 'action',
                },
            ],

        });

        
        $('body').on('click', '.openModal', function () {
          clearInput();  
          $('#formModal').modal('show');
        });

        
        $('body').on('click', '.updateItems', function () {
          clearInput();  
          var id = $(this).data('id');
            $.get("{{ route('upload-dokumen.index' ) }}"+'/'+id, function (data) {
                $('#formModal').modal('show');
                $('#id').val(id);
                $('#name').val(data.data.name);
            });
        });

        function clearInput(){
            $('#id').val("");
            $('#name').val("");
            $('#name-error').html('');
            $('#file-error').html('');
        }

        $('body').on('click', '.deleteItems', function (e) {
            e.preventDefault();
       
            var id = $(this).data('id');
            $.ajax({
                headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
                url: "{{ route('upload-dokumen.index' ) }}" + '/' + id,
                method: 'DELETE',

                success: function (data) {
                           table.ajax.reload();
                    const Toast = Swal.mixin({
                            toast: true,
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 2000
                        });

                        Toast.fire({
                            icon: 'success',
                            title: data.success 
                        });
                } 
            });
        });

        $('body').on('click', '#simpan', function (e) {

            e.preventDefault();
            
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });

            var data = new FormData($('#form')[0]);


            $.ajax({
                type: "POST",
                url: "{{ route('upload-dokumen.store') }}",
                data: data,
                contentType: false,
                processData: false, 
                success: function (data) {
                  if(data.errors){
                    if(data.errors.file){
                        $('#file-error').html(data.errors.file[0]);
                    }else{
                        $('#file-error').html('');
                    }
                    if(data.errors.name){
                        $('#name-error').html(data.errors.name[0]);
                    }else{
                        $('#name-error').html('');
                    }
                }else{
                        $('#formModal').modal('hide');
                        table.ajax.reload();

                        const Toast = Swal.mixin({
                            toast: true,
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 2000
                        });

                        Toast.fire({
                            icon: 'success',
                            title: data.success 
                        });
                }

                },
                error: function(data) {
                // Tanggapi jika terjadi kesalahan
                }
            });

        });

     
    });

    

</script>

{{-- @include('sweetalert::alert') --}}
@endpush
{{-- end script khusus pada pages daftar anggota --}}
