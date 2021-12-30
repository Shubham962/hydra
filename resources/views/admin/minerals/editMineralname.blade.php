@extends('layouts.adminlayout')
@section('content')
<div class="water-type">
                         <div class="page-name">
                            <label>Edit Mineral</label>
                       
                        <div class="close">
                            <a href="waterdrinks.html"><img src="{{ asset('public/assets/images/close.png')}}" alt="Close"></a>
                        </div>
                        <div class="clearFix">
        
                        </div>
                    </div>
                    <div class="type">
                        <input type="text" name="minerals_name" placeholder="Mineral Name">
                    </div>
                    <div class="add-drink water-type-btn">
                        <a href="#">SAVE</a>
                    </div>
                    </div>
@endsection