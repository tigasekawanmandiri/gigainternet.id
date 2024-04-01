@extends('layouts.admin.app')

@push('style')
    <link href="{{ asset('admin/assets/plugins/datatable/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" />
@endpush

@section('content-admin')
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Permintaan</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Data Permintaan Pemasangan</li>
                </ol>
            </nav>
        </div>
    </div>
    <hr>
    <!--end breadcrumb-->
    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
        <div class="card border-top border-0 border-4 border-danger">
            <div class="card-body p-5">
                <div class="card-title d-flex align-items-center">
                    <div><i class="bx bxs-box me-1 font-22 text-danger"></i>
                    </div>
                    
                    <h5 class="mb-0 text-danger">Permintaan Pemasangan</h5>
                   
                </div>
                <hr>
                <div class="col-12">

                    @if (count($errors) > 0)
                    <div class="alert alert-danger border-0 bg-danger alert-dismissible fade show py-2">
                        <div class="d-flex align-items-center">
                            <div class="font-35 text-white"><i class="bx bxs-message-square-x"></i>
                            </div>
                            <div class="ms-3">
                                <h6 class="mb-0 mt-3 text-white"><strong>Whoops!</strong> There were some problems with your input.</h6>
                                <br>
                                <div class="text-white">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif

                    @if(session('success'))
                    <div class="alert alert-success border-0 bg-success alert-dismissible fade show py-2">
                        <div class="d-flex align-items-center">
                            <div class="font-35 text-white"><i class="bx bxs-check-circle"></i>
                            </div>
                            <div class="ms-3">
                                <h6 class="mb-0 text-white">OK !</h6>
                                <div class="text-white">{{ session('success') }}</div>
                            </div>
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif

                </div>
                <form class="row g-3" method="post" action="{{ route('client.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-12">
                        <label for="paketInternet" class="form-label">Paket Internet</label>
                        <select class="form-control form-control-sm" name="package_id" id="" required>
                            <option > Pilih Paket </option>
                            @foreach ($packages as $p)
                                <option value="{{$p->id}}" @selected(old('package_id') == $p->id)>{{$p->package_name}} {{$p->speeds}}Mbps | Rp{{number_format($p->price,0,',','.')}}</option>    
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="namaKTP" class="form-label">Nama Sesuai KTP</label>
                        <input type="text" class="form-control form-control-sm" id="" name="name" value="{{old('name')}}" required>
                    </div>
                    <div class="col-md-6">
                        <label for="noNIK" class="form-label">NIK</label>
                        <input type="number" class="form-control form-control-sm" id="" name="nik" value="{{old('nik')}}" required pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==16) return false;">
                    </div>
                    <div class="col-md-6">
                        <label for="documentsKTP" class="form-label">Dokumen KTP</label>
                        <input type="file" class="form-control form-control-sm" id="" name="documents" required>
                    </div>
                    <div class="col-md-6">
                        <label for="email" class="form-label">Email Aktif</label>
                        <input type="email" class="form-control form-control-sm" id="" name="email" value="{{old('email')}}" required>
                    </div>
                    <div class="col-md-6">
                        <label for="phone1" class="form-label">Telepon 1</label>
                        <input type="number" class="form-control form-control-sm" id="" name="phone_1" value="{{old('phone_1')}}" required pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==13) return false;">
                    </div>
                    <div class="col-md-6">
                        <label for="phone2" class="form-label">Telepon 2 Aktif</label>
                        <input type="number" class="form-control form-control-sm" id="" name="phone_2" value="{{old('phone_2')}}" required pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==13) return false;">
                    </div>
                    <div class="col-md-12">
                        <label for="alamatPemasangan" class="form-label">Alamat Pemasangan</label>
                        <textarea type="text" class="form-control form-control-sm" id="" name="address" required>{{old('address')}}</textarea>
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
                            <th>Nama Lengkap</th>
                            <th>NIK</th>
                            <th>Telepon 1</th>
                            <th>Telepon 2</th>
                            <th>Email</th>
                            <th>Alamat</th>
                            <th>Lampiran</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($clients as $c)
                        <tr>
                            <td class="text-center" width="5">{{$loop->iteration}}</td>
                            <td>{{$c->name}}</td>
                            <td>{{$c->nik}}</td>
                            <td>{{$c->phone_1}}</td>
                            <td>{{$c->phone_2}}</td>
                            <td>{{$c->email}}</td>
                            <td>{{$c->address}}</td>
                            <td class="text-center">
                                <a href="{{ asset('/files/img/dokumen_lampiran/'.$c->documents)}}" target="_blank">
                                    <img class="product-img-2" src="{{ asset('/files/img/dokumen_lampiran/'.$c->documents)}}" alt="">
                                </a>
                            </td>
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