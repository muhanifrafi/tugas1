@extends('admin.layout.app')

@section('heading', 'Informasi')

@section('right_top_button')
<a href="{{ route('admin_faq_add') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah</a>
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
                                    <th>Pertanyaan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($faqs as $row)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        {{ $row->question }}
                                    </td>
                                    <td class="pt_10 pb_10">
                                        <a href="{{ route('admin_faq_edit',$row->id) }}" class="btn btn-primary">Sunting</a>
                                        <a href="{{ route('admin_faq_delete',$row->id) }}" class="btn btn-danger" onClick="return confirm('Apakah kamu yakin?');">Hapus</a>
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