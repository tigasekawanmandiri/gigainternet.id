@extends('layouts.admin.app')

@push('style')
    <link href="{{ asset('admin/assets/plugins/datatable/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" />
@endpush

@section('content-admin')
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Kecamatan</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Data Kecamatan</li>
                </ol>
            </nav>
        </div>
    </div>
    <hr>
    <!--end breadcrumb-->
    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
        <div class="card border-top border-0 border-4 border-danger">
            <div class="card-body p-5">
                <div class="card-title d-flex align-items-center">
                    <div><i class="bx bxs-map me-1 font-22 text-danger"></i>
                    </div>
                    <h5 class="mb-0 text-danger">Cover Area</h5>
                </div>
                <hr>
                <form class="row g-3" method="post" action="{{ route('subdistrict.store')}}">
                    @csrf
                    <div class="col-md-12">
                        <label for="namaKecamatan" class="form-label">Nama Kecamatan</label>
                        <input type="text" class="form-control form-control-sm" id="" name="subdistrict_name" required>
                    </div>
                    
                    <div class="col-12">
                        <button type="submit" class="btn btn-danger btn-sm px-5">Tambahkan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <h6 class="mb-0 text-uppercase">List Cover Area Gigainternet</h6>
    <hr/>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="example2" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Kecamatan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($subdistricts as $p)
                        <tr>
                            <td class="text-center" width="5">{{$loop->iteration}}</td>
                            <td>{{$p->subdistrict_name}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection

@push('script')
    <script src="{{ asset('admin/assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
    <script>
		$(document).ready(function() {
			var table = $('#example2').DataTable( {
				lengthChange: false,
				buttons: [ 'copy', 'excel', 'pdf', 'print']
			} );
		 
			table.buttons().container()
				.appendTo( '#example2_wrapper .col-md-6:eq(0)' );
		} );
	</script>
@endpush