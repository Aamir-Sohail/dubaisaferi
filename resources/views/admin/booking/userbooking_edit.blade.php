@extends('layouts.master')
@section('contents')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">All Booking User Edit</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Edit User</li>
                </ol>
                {{-- the main part of the page --}}
                <div class="on_form">
                    <form action="{{ url('admin/update_booking/'.$booking->id) }}" method="post">
                        @csrf
                        @method('PUT')

                        <h3>Make a Booking Now</h3>
                        <div class="banner_form_one">
                            <div class="row mb-3">
                                <label for="name"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ $booking->name }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <!--END OF-->
                            <div class="row mb-3">
                                <label for="name"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Email') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="text"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ $booking->email }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <!--END OF-->
                            <div class="row mb-3">
                                <label for="contact"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Contact') }}</label>
                                <div class="col-md-6">
                                    <input id="name" type="text"
                                        class="form-control @error('contact') is-invalid @enderror" name="contact"
                                        value="{{ $booking->contact }}" required autocomplete="contact" autofocus>

                                    @error('contact')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <!--END OF-->
                        </div>
                        <!--END OF banner_form_one-->
                        <div class="banner_form_two">


                            <div class="row mb-3">
                                <label for="name"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Adults') }}</label>

                                <div class="col-md-6">
                                    <select class="form-control" name="adult">

                                        <option>Adults</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                    </select>

                                    @error('adults')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="name"
                                    class="col-md-4 col-form-label text-md-end">{{ __(' Child') }}</label>

                                <div class="col-md-6">
                                    <select class="form-control" name="child">

                                        <option>Child</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                    </select>

                                    @error('child')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <!--END OF-->
                            <div class="row mb-3">
                                <label for="name"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Interest In') }}</label>

                                <div class="col-md-6">
                                    <input id="Interst In" type="text"
                                        class="form-control @error('interst') is-invalid @enderror" name="interst"
                                        value="{{ $booking->interst }}" required autocomplete="interst" autofocus>

                                    @error('interst')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <!--END OF-->

                            <div class="row mb-3">
                                <label for="name"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Date') }}</label>

                                <div class="col-md-6">
                                    <input id="Interst In" type="text"
                                        class="form-control @error('date') is-invalid @enderror" name="date"
                                        value="{{ $booking->date }}" required autocomplete="date" autofocus>

                                    @error('date')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <!--END OF-->
                        </div>
                        <!--END OF banner_form_two-->

                        <div class="banner_form_three">
                            <div class="row mb-3">
                                <label for="name"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Message/Instruction') }}</label>

                                <div class="col-md-6">
                                    <input id="Interst In" type="text"
                                        class="form-control @error('message') is-invalid @enderror" name="message"
                                        value="{{ $booking->message }}" required autocomplete="message" autofocus>

                                    @error('message')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>


                            </div>
                            <!--END OF-->

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Update') }}
                                    </button>
                                </div>
                            </div>

                        </div>
                        <!--END OF banner_form_two-->
                    </form>
                </div>










            </div>


        </main>
    @endsection
