@extends('layouts.adminlayout')
@section('content')
@php $mineralsData = DB::table('minerals')->get(); @endphp
<div class="right-content">
    <div class="page-name-label">
    <div class="labelpageloc">
                <label>Dashboard > My Account</label>
            </div>
            <div class="page-name-label">
                <label>My Account</label>
            </div>
            <div class="profile-details">
                <div class="profile-pic">
                   <a href="#"><img src="{{ asset('public/assets/images/profile-img.png')}}" alt="profile-img"></a>
                </div>
                <div class="profile-name">
                   <label>Cherry Blossom</label>
                </div>
                <div class="profile-email">
                    <img src="{{ asset('public/assets/images/email.png')}}" alt="email">
                   <label>cherryblossom@dummyemail.com</label>
                </div>
            </div>
            <div class="Update-Password profile-details">
                <div class="password-label">
                    <label>Update Password</label>
                </div>
                <div class="Current-Password-label">
                   <input type="password" name="Current Password" placeholder="Current Password">
                </div>
                <div class="new-Password-label">
                   <input type="password" name="New Password" placeholder="New Password">
                   <input type="password" name="Confirm New Password" placeholder="Confirm New Password">
                   <div class="clearFix">
                   </div>
                </div>
                <div class="save-btn">
                    <a href="#">SAVE</a>
                </div>
                
            </div>
    </div>
</div>
@endsection