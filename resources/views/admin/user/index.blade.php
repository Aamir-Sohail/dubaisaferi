@extends('layouts.master')
@section('contents')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">All User</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Register User</li>
                </ol>

                {{-- table of all user --}}

                <main>
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
                                            <th>Email</th>


                                            <th>Role-as</th> 
                                            <th>Edit</th>
                                            <th>Delete</th>

                                        </tr>

                                    </thead>

                                    <tbody>
                                        {{-- fetcgh the data here --}}
                                        @foreach ($users as $user)
                                            <tr>
                                                <td>{{ $user->id }}</td>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->email }}</td>

                                                <td>{{ $user->role_as == '1' ? 'Admin' : 'User' }}</td>


                                                <td>
                                                    <a href="{{ url('admin/edit_user/' . $user->id) }}"
                                                        class="btn btn-success">Edit</a>
                                                </td>
                                                <td>
                                                    {{-- @if (auth()->role_as == '1')
                                                     <h5>Admin</h5>
                                                    @else

                                                    @endif --}}
                                                    <a href="{{ url('admin/delete_user/' . $user->id) }}"
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

        </main>
    </div>
@endsection
