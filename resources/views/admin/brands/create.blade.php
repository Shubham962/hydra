@extends('layouts.adminlayout')
@section('content')
<div class="right-content">
    <div class="page-name-label">
        <div class="addbrand">
            <form action="{{ URL::to('/admin/brand/store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="page-label">
                <label>Add New Brand/Water</label>
                <div class="close">
                    <figure>
                        <a href="brands.html">
                            <img src="{{ asset('public/assets/images/close.png')}}" alt="close">
                        </a>
                    </figure>
                </div>
                <div class="clearFix">
                </div>
            </div>
            <div class="uplode-image">
                <a>
                    <div>
                        <input type="file" name="brand_image" id="brand_image">
                        <img src="{{ asset('public/assets/images/uplode-image.png')}}" alt="uplode image">
                    </div>
                    <label>Upload Image (Optional)</label>
                </a>
            </div>
            <div class="brand-name">
                <input type="text" name='brand_name' placeholder="Brand Name">
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