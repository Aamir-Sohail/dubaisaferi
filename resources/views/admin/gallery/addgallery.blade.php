@extends('layouts.master')
@section('contents')
    <div id="layoutSidenav_content">

        <div class="container-fluid px-4">
            <h1 class="mt-4">Gallery</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">New Gallery Inseration</li>
            </ol>

            <main>
                <!-- write here -->
                <form action="{{ url('admin/storegallery') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="banner_form_three">
                        <div class="row mb-3">
                            <label for="Description Heading"
                                class="col-md-4 col-form-label text-md-end">{{ __('Price of Tour') }}</label>

                            <div class="col-md-6">
                                <input id="Price" type="text-field"
                                    class="form-control @error('Price') is-invalid @enderror" name="price" value=""
                                    required autocomplete="Price" autofocus>

                                @error('message')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        {{-- 2 --}}

                        <div class="row mb-3">
                            <label for="Description Heading"
                                class="col-md-4 col-form-label text-md-end">{{ __('Title ') }}</label>

                            <div class="col-md-6">
                                <input id="Title" type="text-field"
                                    class="form-control @error('title') is-invalid @enderror" name="title" value=""
                                    required autocomplete="Title" autofocus>

                                @error('message')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        {{-- 3 --}}

                        <div class="row mb-3">
                            <label for="Description Heading"
                                class="col-md-4 col-form-label text-md-end">{{ __('Country Tour') }}</label>

                            <div class="col-md-6">
                                <input id="Country" type="text-field"
                                    class="form-control @error('country') is-invalid @enderror" name="country"
                                    value="" required autocomplete="Country" autofocus>

                                @error('message')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        {{-- 4 --}}
                        <div class="row mb-3">
                            <label for="Description Heading"
                                class="col-md-4 col-form-label text-md-end">{{ __('Description ') }}</label>

                            <div class="col-md-6">
                                <input id="Description" type="text-field"
                                    class="form-control @error('description') is-invalid @enderror" name="description"
                                    value="" required autocomplete="Description" autofocus>

                                @error('message')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        {{-- 5 --}}


                        <div class="row mb-3">
                            <label for="Description Heading"
                                class="col-md-4 col-form-label text-md-end">{{ __('File Upload ') }}</label>

                            <div class="col-md-6">
                                <input id="File Upload" type="file"
                                    class="form-control @error('file') is-invalid @enderror" name="file" value=""
                                    required autocomplete="File Upload" autofocus>

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
                                    {{ __('Submit') }}
                                </button>
                            </div>
                        </div>

                    </div>





                </form>

            </main>
        </div>
    @endsection
