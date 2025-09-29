@extends('admin.master')

@section('title')
    Add Product
@endsection

@section('body')

    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="text-center">Add Product</h3>
                        </div>
                        <div class="card-body">

                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <span class="text-success">{{Session::has('message') ? Session::get('message') : ""}}</span>
                                </div>
                            </div>

                            <form action="{{route('new-product')}}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="row mt-3">
                                    <div class="col-md-4">
                                        <label for="">Category Name:</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" name="category_name" class="form-control">
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="col-md-4">
                                        <label for="">Brand Name:</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" name="brand_name" class="form-control">
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="col-md-4">
                                        <label for="">Product Name:</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input class="form-control" type="text" name="name" placeholder="Enter Product Name" required>
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="col-md-4">
                                        <label for="">Price:</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input class="form-control" min="0" type="number" name="price" placeholder="Enter Price" required>
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="col-md-4">
                                        <label for="">Image:</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input class="form-control" type="file" name="image" accept="image/*">
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="col-md-4">
                                        <label for="">Description:</label>
                                    </div>
                                    <div class="col-md-8">
                                        <textarea id="productDescription" class="form-control" type="text" name="description" placeholder="Type Description"></textarea>
                                    </div>
                                </div>


                                <div class="row mt-3">
                                    <div class="col-md-4">
                                        <label for="">Status:</label>
                                    </div>
                                    <div class="col-md-8">
                                        <label class="mx-1" for=""><input type="radio" name="status" value="1" checked> Published</label>
                                        <label class="mx-1" for=""><input type="radio" name="status" value="0"> Unpublished</label>
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="col-md-12 text-center">
                                        <input type="submit" class="btn btn-outline-success btn-sm" value="Add Product">
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>


@endsection
