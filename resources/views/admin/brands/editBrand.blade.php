@extends('layouts.adminlayout')
@section('content')
<?php
//dd($brandData);
?>
<div class="addbrand">
    <form action="{{ URL::to('/admin/brand/update')}}/{{ $brandData->id }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="brand_id" value="{{$brandData->id}}">
        <div class="page-label">
            <label>Edit Brand</label>
            <div class="close">
                <figure>
                    <img src="{{ asset('public/assets/images/close.png')}}" alt="close">
                </figure>
            </div>
            <div class="clearFix">
            </div>
        </div>
        <div class="uplode-image">
            <a href="#">
                <div>
                    @if($brandData->brands_image !='')
                    <img src="{{ asset('public/uploads')}}/{{ $brandData->brands_image }}" alt="close">
                    @else
                    <input type="file" name="brands_image" id="brands_image">
                    @endif
                    <!-- <img src="{{ asset('public/assets/images/A-uafine.png')}}" alt="uplode image"> -->

                </div>
                <label>Change Image (Optional)</label>
            </a>
        </div>
        <div class="brand-name">
            <input type="text" value="{{ $brandData->brand_name }}" name='brand_name' placeholder="Brand/Water">
        </div>
        <div class="brand-Add">
            <button type="submit">
                UPDATE
            </button>
        </div>
    </form>
</div>
@endsection