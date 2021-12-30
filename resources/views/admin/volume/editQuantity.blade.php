@extends('layouts.adminlayout')
@section('content')
<div class="water-type">
                         <div class="page-name">
                            <label>Edit Quantity</label>
                       
                        <div class="close">
                            <a href="waterdrinks.html"><img src="{{ asset('public/assets/images/close.png')}}" alt="Close"></a>
                        </div>
                        <div class="clearFix">
        
                        </div>
                    </div>
                    <div class="type">
                        <input type="text" name="quantity" placeholder="Quantity">
                    </div>
                    <div class="add-drink water-type-btn">
                        <a href="#">SAVE</a>
                    </div>
                    </div>
@endsection