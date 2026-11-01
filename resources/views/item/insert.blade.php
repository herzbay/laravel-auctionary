@extends('admin.app')
@section('title', 'Management Item')
@section('content')

<h1 class="h3 mb-2 text-gray-800">Item</h1>
        <!-- Basic Card Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Form Add Item</h6>
            </div>
            <div class="card-body">
                <form action="{{route('item.add.insert')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label>Item</label>
                        <input type="text" name="item" class="form-control">
                        @error('item')
                            {{$message}}
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Owner</label>
                        <input type="text" name="owner" class="form-control">
                        @error('owner')
                            {{$message}}
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Contact</label>
                        <input type="text" name="phone" class="form-control">
                        @error('phone')
                            {{$message}}
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <input type="text" name="address" class="form-control">
                        @error('address')
                            {{$message}}
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <input type="text" name="description" class="form-control">
                        @error('description')
                            {{$message}}
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Price</label>
                        <input type="number" name="price" class="form-control">
                        @error('price')
                            {{$message}}
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Save</button>
                </form>
            </div>
        </div>
@endsection