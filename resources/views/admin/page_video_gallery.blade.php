@extends('admin.layout.app')

@section('heading', 'Sunting Halaman Galeri Video')

@section('main_content')
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin_page_video_gallery_update') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-4">
                                    <label class="form-label">Heading *</label>
                                    <input type="text" class="form-control" name="video_gallery_heading" value="{{ $page_data->video_gallery_heading }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Status *</label>
                                    <select name="video_gallery_status" class="form-control">
                                        <option value="1" @if($page_data->video_gallery_status == 1) selected @endif>Tunjukan</option>
                                        <option value="0" @if($page_data->video_gallery_status == 0) selected @endif>Sembunyikan</option>
                                    </select>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label"></label>
                                    <button type="submit" class="btn btn-primary">Perbaharui</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection