@extends('layouts.master')
@section('contents')
    <div id="layoutSidenav_content">
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card-header">{{ __('Edit User') }}</div>

                        <div class="card-body">
                            <form method="post" action="{{ url('admin/update_user/' . $user->id) }}">
                                @csrf
                                @method('PUT')

                                <div class="row mb-3">
                                    <label for="name"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text"
                                            class="form-control @error('name') is-invalid @enderror" name="name"
                                            value="{{ $user->name }}" required autocomplete="name" autofocus>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="email"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ $user->email }}" required autocomplete="email">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                </div>


                                <div class="row mb-3">
                                    <label for="Status"
                                        class="col-md-4 col-form-label text-md-end">{{ __('Status') }}</label>

                                    <div class="col-md-6">
                                        <input id="role_as" type="text"
                                            class="form-control @error('role_as') is-invalid @enderror" name="role_as"
                                            value="{{ $user->role_as }}" required autocomplete="role_as">

                                        @error('role_as')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                {{-- <div class="row mb-3">
                                    <label for="role_as" class="col-md-4 col-form-label text-md-end">Role</label>

                                    <div class="col-md-6">
                                        <select class="form-select" value="{{ $user->role_as }}" name="role_as">

                                            <option value="1">Admin</option>
                                            <option value="0">User</option>

                                        </select>
                                        @error('role_as')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div> --}}


                                <div class="row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Update') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>









                </div>
            </div>

    </div>

    </main>
@endsection
