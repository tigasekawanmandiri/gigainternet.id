@extends('layouts.admin.app')

@push('style')
    <link href="{{ asset('admin/assets/plugins/datatable/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" />
@endpush

@section('content-admin')
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Paket</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Data Paket</li>
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
                    <div><i class="bx bxs-box me-1 font-22 text-danger"></i>
                    </div>
                    <h5 class="mb-0 text-danger">Paket Internet</h5>
                </div>
                <hr>
                <form class="row g-3" method="post" action="{{ route('package.store')}}">
                    @csrf
                    <div class="col-md-6">
                        <label for="namaPaket" class="form-label">Nama Paket</label>
                        <input type="text" class="form-control form-control-sm" id="" name="package_name" required>
                    </div>
                    <div class="col-md-6">
                        <label for="kategoriPaket" class="form-label">Kategori</label>
                        <select class="form-control form-control-sm" name="category_package_id" id="" required>
                            <option > Pilih Kategori </option>
                            @foreach ($categories as $c)
                                <option value="{{$c->id}}">{{$c->category_name}}</option>    
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="kecepatan" class="form-label">Kecepatan</label>
                        <input type="number" class="form-control form-control-sm" id="" name="speeds" required>
                    </div>
                    <div class="col-md-6">
                        <label for="harga" class="form-label">Harga</label>
                        <input type="number" class="form-control form-control-sm" id="" name="price" required>
                    </div>
                    
                    <div class="col-12">
                        <button type="submit" class="btn btn-danger btn-sm px-5">Tambahkan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <h6 class="mb-0 text-uppercase">List Paket Gigainternet</h6>
    <hr/>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="example2" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Paket</th>
                            <th>Kecepatan</th>
                            <th>Kategori</th>
                            <th>Harga</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($packages as $p)
                        <tr>
                            <td class="text-center" width="5">{{$loop->iteration}}</td>
                            <td>{{$p->package_name}}</td>
                            <td>{{$p->speeds}} Mbps</td>
                            <td>{{$p->get_categoryName->category_name}}</td>
                            <td>Rp. {{number_format($p->price,0,',','.')}}</td>
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