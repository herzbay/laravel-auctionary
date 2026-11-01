@extends('admin.app')
@section('title', 'Management User')
@section('content')

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Data User</h1>

@if (session('message'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
    {{session('message')}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    </div>
@endif
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <a href="{{route('user.insert')}}" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Add User</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr class="text-center">
                                            <th>No</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Password</th>
                                            <th>Usertype</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no =1; ?>
                                        @foreach ($user as $row)
                                        <tr class="text-center">
                                            <td>{{$no++ }}</td>
                                            <td>{{$row->name }}</td>
                                            <td>{{$row->email }}</td>
                                            <td>{{$row->password }}</td>
                                            <td>{{$row->usertype }}</td>
                                            <td>
                                <a href="" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Edit</a>
                                <form id="delete-form-{{ $row->id }}" action="{{ route('item.delete.user', $row->id) }}" method="POST" style="display: none;">
    @csrf
</form>
<a href="#" class="btn btn-danger btn-sm"
   onclick="event.preventDefault(); if(confirm('Are you sure you want to delete this item?')) document.getElementById('delete-form-{{ $row->id }}').submit();">
   <i class="fas fa-trash"></i> Delete
</a>
                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
@endsection