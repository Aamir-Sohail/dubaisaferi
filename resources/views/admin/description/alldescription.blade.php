@extends('layouts.master')
@section('contents')
    <div id="layoutSidenav_content">

        <div class="container-fluid px-4">
            <h1 class="mt-4">All Description</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Table Description</li>
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
                                        <th>Name</th>
                                        <th>Complet Description</th>
                                        <th>Edit</th>
                                        <th>Delete</th>

                                    </tr>

                                </thead>

                                <tbody>
                                    {{-- fetcgh the data here --}}
                                    @foreach ($descriptions as $description)
                                        <tr>
                                            <td>{{ $description->id }}</td>
                                            <td>{{ $description->description }}</td>
                                            <td>{{ $description->ckeditor }}</td>
                                            <td>
                                                <a href="{{ url('admin/des_edit', $description->id) }}"
                                                    class="btn btn-success">Edit</a>
                                            </td>
                                            <td>

                                                <a href="{{ url('admin/delete_description', $description->id) }}"
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
