@extends('layouts.adminlayout')
@section('content')
<div class="right-content">
    <div class="page-name-label">
        <div class="addbrand">
            <form action="{{ URL::to('/admin/brand/store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="page-label">
                    <label>Add New Brand/Water</label>

                    <div class="clearFix">
                    </div>
                </div>
                <div class="uplode-image">
                    <a>
                        <label>Upload Image (Optional)</label>
                        <div>
                            <input type="file" name="brands_image" id="brands_image" accept="image/gif, image/jpeg, image/png">
                            @error('brands_image')
                            <small class="form-control-feedback">{{ $errors->first('brands_image') }}</small>
                            @enderror
                            <img src="{{ asset('public/assets/images/uplode-image.png')}}" alt="uplode image">
                        </div>

                    </a>
                </div>
                <div class="brand-name">
                    <input type="text" name='brand_name' placeholder="Brand Name">
                    @error('brand_name')
                    <small class="form-control-feedback">{{ $errors->first('brand_name') }}</small>
                    @enderror
                </div>
                <div class="brand-Add">
                    <button type="submit">
                        ADD
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection