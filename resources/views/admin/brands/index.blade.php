@extends('layouts.adminlayout')
@section('content')
@php $brandsData = DB::table('brands')->get(); @endphp
<div class="right-content">
    <div class="page-name-label">
        <label>Brands</label>
        <div class="search">
            <select title="All">
                <option value="All">All</option>
                <option value="5">5</option>
                <option value="10">10</option>
                <option value="15">15</option>

            </select>
            <a href="{{ URL::to('/admin/brand/create')}}">ADD NEW BRAND/WATER</a>
        </div>
        <table class="user-tabel brand-tabel">
            <thead>
                <tr>
                    <th>Brand/Water</th>
                    <th>Action</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @if($brandsData)
                @foreach($brandsData as $key =>$brands)
                <tr>
                    <td>
                        @if($brands->brands_image)
                        <img src="{{ URL::asset('/public/uploads/') }}/{{ $brands->brands_image }}" alt="profilepic">
                        @else
                        <img src="{{ asset('public/assets/images/profile-img.png')}}" alt="profilepic">
                        @endif
                        {{$brands->brand_name}}
                    </td>
                    <td class="edit-delete">
                        <a href="{{ URL::to('/admin/brand/edit')}}/{{ $brands->id}}">
                            <img src="{{ asset('public/assets/images/edit.png')}}" alt="edit">
                            Edit
                        </a>
                        <a href="{{ URL::to('/admin/brand/delete')}}/{{ $brands->id}}">
                            <img src="{{ asset('public/assets/images/delete.png')}}" alt="delete">
                            Delete
                        </a>
                    </td>
                    <td>Active</td>
                </tr>
                @endforeach
                @endif
                <!-- <tr>
                    <td><img src="{{ asset('public/assets/images/profile-img.png')}}" alt="profilepic">Dasani</td>
                    <td  class="edit-delete"><a href="#"><img src="{{ asset('public/assets/images/edit.png')}}" alt="edit">Edit</a><a href="#"><img src="{{ asset('public/assets/images/delete.png')}}" alt="delete">Delete</a></td>
                    <td>Active</td>
                </tr>
                <tr>
                    <td><img src="{{ asset('public/assets/images/profile-img.png')}}" alt="profilepic">Nestle</td>
                    <td  class="edit-delete"><a href="#"><img src="{{ asset('public/assets/images/edit.png')}}" alt="edit">Edit</a><a href="#"><img src="{{ asset('public/assets/images/delete.png')}}" alt="delete">Delete</a></td>
                    <td>Active</td>
                </tr>
                <tr>
                    <td><img src="{{ asset('public/assets/images/profile-img.png')}}" alt="profilepic">Glaceau SmartWater</td>
                    <td  class="edit-delete"><a href="#"><img src="{{ asset('public/assets/images/edit.png')}}" alt="edit">Edit</a><a href="#"><img src="{{ asset('public/assets/images/delete.png')}}" alt="delete">Delete</a></td>
                    <td>Active</td>
                </tr>
                <tr>
                    <td><img src="{{ asset('public/assets/images/profile-img.png')}}" alt="profilepic">Tap Water</td>
                    <td  class="edit-delete"><a href="#"><img src="{{ asset('public/assets/images/edit.png')}}" alt="edit">Edit</a><a href="#"><img src="{{ asset('public/assets/images/delete.png')}}" alt="delete">Delete</a></td>
                    <td>Active</td>
                </tr>
                <tr>
                    <td><img src="{{ asset('public/assets/images/profile-img.png')}}" alt="profilepic">RO Water</td>
                    <td  class="edit-delete"><a href="#"><img src="{{ asset('public/assets/images/edit.png')}}" alt="edit">Edit</a><a href="#"><img src="{{ asset('public/assets/images/delete.png')}}" alt="delete">Delete</a></td>
                    <td>Active</td>
                </tr>  -->
            </tbody>
        </table>

    </div>
</div>
@endsection