@extends('Admin_Dashboard.master')

@section('title','category')

@section('content_header','Add Category')

@section('locat_bar')
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">category</a></li>
            <li class="breadcrumb-item active">category add</li>
        </ol>
    </div>
@endsection
@section('content')

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                @if(session('add_success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <span>{{session('add_success')}}</span>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                <div class="card">
                    <div class="text-center mt-3">
                        <h4 class="text-black-50 font-weight-bold">Category</h4>
                    </div>
                    <hr>
                    <div class="card-body">
                        <form action="{{route('category.store')}}" method="post">
                            @csrf

                            <div class="form-group">
                                <label for="">Category Name</label>
                                <input type="text" name="category_name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Order Number</label>
                                <input type="number" name="order_number" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Added On</label>
                                <input type="date" name="added_on" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Category State</label>
                                <div class="radio">
                                    <input type="radio" name="category_state" class="mr-2" value="1">Active
                                    <input type="radio" name="category_state" class="mx-2" value="0">Inactive
                                </div>
                            </div>
                            <button type="submit" name="add_btn" class="btn btn-outline-primary btn-block">Add Category</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
