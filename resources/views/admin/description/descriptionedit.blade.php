@extends('layouts.master')
@section('contents')
    <div id="layoutSidenav_content">

        <div class="container-fluid px-4">
            <h1 class="mt-4">Description Update</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">New Description</li>
            </ol>

            <main>
                <!-- write here -->
                <form action="{{ url('admin/update_description') }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="banner_form_three">
                        <div class="row mb-3">
                            <label for="Description"
                                class="col-md-4 col-form-label text-md-end">{{ __('Description') }}</label>

                            <input type="hidden" name="id" value="{{ $description->id }}">

                            <div class="col-md-6">
                                <input id="Description" type="text-field"
                                    class="form-control @error('description') is-invalid @enderror" name="description"
                                    value="{{ $description->description }}" required autocomplete="Description" autofocus>

                                @error('message')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                        </div>
                        <!--END OF-->


                        <div class="row mb-3">
                            <label for="Description"
                                class="col-md-4 col-form-label text-md-end">{{ __('Description') }}</label>

                            <div class="col-md-6">
                                <textarea name="ckeditor" id="ckeditor" class="form-control" value="{{ $description->ckeditor }}" >
                    </textarea>


                                @error('message')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                        </div>



                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update') }}
                                </button>
                            </div>
                        </div>

                    </div>





                </form>

            </main>
        </div>
    @endsection
