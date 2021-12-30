@extends('layouts.adminlayout')
@section('content')
<div class="addbrand">
                        <div class="page-label">
                            <label>Edit Brand/Water</label>
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
                                <img src="{{ asset('public/assets/images/A-uafine.png')}}" alt="uplode image">
                            </div>
                            <label>Change Image (Optional)</label>
                        </a>
                        </div>
                        <div class="brand-name">
                            <input type="text" name='brand_name' placeholder="Brand/Water">
                        </div>
                        <div class="brand-Add">
                            <a href="#">SAVE</a>
                        </div>
                    </div>
@endsection