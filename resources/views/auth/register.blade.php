@extends('layouts.app')
@section('title')
    Registration
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-mb-8"></div>
            <div class="col-md-4">
                <h2>Create Account</h2>
                <form action="{{ route('register') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Full Name</label>
                        <input type="text" class="form-control {{ ($errors->has('name')) ? 'is-invalid' : '' }}" id="name" placeholder="Jack Brown" name="name">
                        <span class="invalid-feedback">
                            {{ $errors->first('name') }}
                        </span>
                    </div>

                    <div class="mb-3">
                        <label for="birth_date" class="form-label">Birth Date</label>
                        <input type="date" class="form-control {{ ($errors->has('birth_date')) ? 'is-invalid' : '' }}" id="birth_date"  name="birth_date">
                        <span class="invalid-feedback">
                            {{ $errors->first('birth_date') }}
                        </span>
                    </div>

                    <div class="mb-3">
                        <label for="avatar" class="form-label">Avatar</label>
                        <input type="file" class="form-control {{ ($errors->has('avatar')) ? 'is-invalid' : '' }}" id="avatar"  name="avatar">
                        <span class="invalid-feedback">
                            {{ $errors->first('avatar') }}
                        </span>
                    </div>

                    <div class="mb-3">
                        <label for="phone_num" class="form-label">Phone Number</label>
                        <input type="text" class="form-control {{ ($errors->has('phone_num')) ? 'is-invalid' : '' }}" id="phone_num" placeholder="+374123456789" name="phone_num">
                        <span class="invalid-feedback">
                            {{ $errors->first('phone_num') }}
                        </span>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control {{ ($errors->has('email')) ? 'is-invalid' : '' }}" id="email" placeholder="example@mail.com" name="email">
                        <span class="invalid-feedback">
                            {{ $errors->first('email') }}
                        </span>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control {{ ($errors->has('password')) ? 'is-invalid' : '' }}" id="password" placeholder="****" name="password">
                        <span class="invalid-feedback">
                            {{ $errors->first('password') }}
                        </span>
                    </div>

                    <button class="btn btn-success">Create</button>
                    <p class="btn btn-link"><a href="{{ route('login_view') }}">Sign In</a></p>
            </div>
        </div>
    </div>
@endsection
