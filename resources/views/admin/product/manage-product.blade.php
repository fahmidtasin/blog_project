@extends('admin.master')

@section('title')
    Manage Product
@endsection

@section('body')

    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="text-center display-3">Manage Product</h1>
                            <div class="row mt-3">
                                <div class="col-md-12 text-center">
                                    <span class="text-danger">{{Session::has('message') ? Session::get('message') : ""}}</span>
                                </div>
                            </div>

                            <table class="table table-striped table-hover table-bordered text-center dt-responsive nowrap w-100">

                                <thead class="fw-bold text-info bg-gradient">
                                <tr>
                                    <th>#</th>
                                    <th>Category Name</th>
                                    <th>Brand Name</th>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Image</th>
                                    <th>Description</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($products as $product)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$product->name}}</td>
                                        <td>{{$product->name}}</td>
                                        <td>{{$product->name}}</td>
                                        <td>{{$product->price}} Tk</td>
                                        <td><img style="height: 50px;" src="{{asset($product->image)}}" alt=""></td>
                                        <td>{!! \Illuminate\Support\Str::words($product->description, 5,'.....') !!}</td>
                                        <td>{{$product->status == 1 ? 'Published' : 'Unpublished'}}</td>
                                        <td class="col-md-2">
                                            <a class="btn btn-sm btn-success" href="{{route('edit-product', ['id'=>$product->id])}}">Edit</a>
                                            <a class="btn btn-sm btn-danger" href="{{route('delete-product', ['id'=>$product->id])}}" onclick="return confirm('Are You Sure?')">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
            </div>
        </main>
    </div>


@endsection
