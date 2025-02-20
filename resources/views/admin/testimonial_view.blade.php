@extends('admin.layout.app')

@section('heading', 'Lihat Testimoni')

@section('right_top_button')
<a href="{{ route('admin_testimonial_add') }}" class="btn btn-primary"><i class="fa fa-plus"></i>Tambah</a>
@endsection

@section('main_content')
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="example1">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Foto</th>
                                    <th>Nama</th>
                                    <th>Penamaan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($testimonials as $row)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        <img src="{{ asset('uploads/'.$row->photo) }}" alt="" class="w_100">
                                    </td>
                                    <td>{{ $row->name }}</td>
                                    <td>{{ $row->designation }}</td>
                                    <td class="pt_10 pb_10">
                                        <a href="{{ route('admin_testimonial_edit',$row->id) }}" class="btn btn-primary">Sunting</a>
                                        <a href="{{ route('admin_testimonial_delete',$row->id) }}" class="btn btn-danger" onClick="return confirm('Apakah kamu yakin?');">Hapus</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection