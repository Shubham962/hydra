@extends('layouts.adminlayout')
@section('content')

<div class="water-type">
<form action="{{ URL::to('/admin/volume/store')}}" method="post" enctype="multipart/form-data">
@csrf
    <div class="page-name">
        <label>Add New Quantity</label>

        <div class="close">
            <a href="{{ asset('public/assets/waterquantity.html')}}">
                <img src="{{ asset('public/assets/images/close.png')}}" alt="Close"></a>
        </div>
        <div class="clearFix">

        </div>
    </div>
    <div class="type">
        <input type="text" name="quantity" placeholder="Quantity">
    </div>
    <div class="add-drink water-type-btn">
    <button type="submit">
                ADD
                </button> 
    </div>    
    </form>
</div>
@endsection