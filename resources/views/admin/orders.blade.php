@extends('admin.layout.app')

@section('heading', 'Daftar Pesanan')

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
                                    <th>Nomor</th>
                                    <th>No Pesanan</th>
                                    <th>Metode Pembayaran</th>
                                    <th>Tanggal Pemesanan</th>
                                    <th>Jumlah Pembayaran</th>
                                    <th>Tindakan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($orders as $row)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $row->order_no }}</td>
                                    <td>{{ $row->payment_method }}</td>
                                    <td>{{ $row->booking_date }}</td>
                                    @if($row->payment_method == "Midtrans")
                                    <td>Rp {{ $row->paid_amount }}</td>
                                    @else
                                    <td>$ {{ $row->paid_amount }}</td>
                                    @endif
                                    <td class="pt_10 pb_10">
                                        <a href="{{ route('admin_invoice',$row->id) }}" class="btn btn-primary">Detail</a>
                                        <a href="{{ route('admin_order_delete',$row->id) }}" class="btn btn-danger" onClick="return confirm('Are you sure?');">Hapus</a>
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