@extends('layouts.master')
@section('contents')
    <div id="layoutSidenav_content">

        <div class="container-fluid px-4">
            <h1 class="mt-4">All Gallery</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Table Gallery</li>
            </ol>

            <main>
                {{-- write there --}}
                <div class="container-fluid px-4">

                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            DataTable Example
                        </div>
                        <div class="card-body">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>Price</th>
                                        <th>Country</th>
                                        <th>Description</th>
                                        <th>Title</th>
                                        <th>File/Image</th>
                                        <th>Edit</th>
                                        <th>Delete</th>

                                    </tr>

                                </thead>

                                <tbody>
                                    {{-- fetcgh the data here --}}
                                    @foreach ($gallerys as $gallery)
                                        <tr>
                                            <td>{{ $gallery->id }}</td>
                                            <td>{{ $gallery->price }}</td>
                                            <td>{{$gallery->country }}</td>
                                            <td>{{$gallery->description }}</td>
                                            <td>{{$gallery->title }}</td>
                                            <td> <img src ="{{ asset('uploads/gallery/' .$gallery->file) }}" width="70px" height ="70px" alt="image">

                                            </td>
                                            <td>
                                                <a href="{{ url('admin/gall_edit', $gallery->id) }}"
                                                    class="btn btn-success">Edit</a>
                                            </td>
                                            <td>

                                                <a href="{{ url('admin/gall_del', $gallery->id) }}"
                                                    class="btn btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>





            </main>
        </div>
    @endsection
