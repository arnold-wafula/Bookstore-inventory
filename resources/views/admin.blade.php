@extends('layouts.app')
@section('content')
<div class="container mt-5">
    <form method="POST" action="" class="col-md-6 mx-auto bg-white p-4 rounded">
        @csrf
        <div class="row mb-4">
            <div class="col-md-4">
                <label for="fname">First Name</label>
                <input type="text" name="fname" class="form-control" placeholder="john"/>
            </div>

             <div class="col-md-4">
                <label for="lname">Last Name</label>
                <input type="text" name="lname" class="form-control" placeholder="doe"/>
            </div>

            <div class="col-md-4">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" placeholder="john.doe@groupmfi.com"/>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-md-4">
                <label for="phone">Phone Number</label>
                <input type="tel" name="phone" class="form-control" placeholder="+2547111222">
            </div>

            <div class="col-md-4">
                <label for="address">Address</label>
                <input type="text" name="address" class="form-control" placeholder="34567">
            </div>

            <div class="col-md-4">
                <label for="country">Country</label>
                <select name="country" class="form-control">
                    <option value="">Select Country</option>
                    @foreach($countries as $country)
                    <option value="{{$country->id}}">{{ $country->country_name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        
        <div class="row mt-4">
            <div class="col-md-6">
                <label for="role">Role</label>
                <select name="role" class="form-control">
                    <option value="">Select Role</option>
                    @foreach($roles as $role)
                    <option value="{{$role->id}}">{{ $role->role_name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-6">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" placeholder="*******">
            </div>
        </div>

        <div class="row mt-4">
        <div class="col-md-12">
        <button type="submit" class="btn btn-primary btn-block">Create Customer</button>
            </div>
        </div>
    </form>
</div>    
@endsection