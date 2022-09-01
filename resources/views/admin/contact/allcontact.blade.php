@extends('layouts.master')
@section('contents')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">All Contact</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Contact Us</li>
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
                                            <th>UserName</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Location</th>
                                            <th>Subject</th>
                                            <th>Message</th>
                                            <th>Delete</th>

                                        </tr>

                                    </thead>

                                    <tbody>
                                        {{-- fetcgh the data here --}}
                                        @foreach ($contact as $contact)
                                            <tr>
                                                <td>{{ $contact->id }}</td>
                                                <td>{{ $contact->username }}</td>
                                                <td>{{ $contact->email }}</td>
                                                <td>{{ $contact->phone }}</td>
                                                <td>{{ $contact->location }}</td>
                                                <td>{{ $contact->subject }}</td>
                                                <td>{{ $contact->message }}</td>



                                                <td>

                                                    <a href="{{ url('admin/delete_contact',$contact->id) }}"
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
