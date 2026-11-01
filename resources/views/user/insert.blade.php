@extends('admin.app')
@section('title', 'Management Item')
@section('content')

<h1 class="h3 mb-2 text-gray-800">User</h1>
        <!-- Basic Card Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Form Add User</h6>
            </div>
            <div class="card-body">
                <form action="{{route('user.add.insert')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control">
                        @error('name')
                            {{$message}}
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email" class="form-control">
                        @error('email')
                            {{$message}}
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="text" name="password" class="form-control">
                        @error('password')
                            {{$message}}
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Usertype</label>
                        <input type="text" name="usertype" class="form-control">
                        @error('usertype')
                            {{$message}}
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Save</button>
                </form>
            </div>
        </div>
@endsection