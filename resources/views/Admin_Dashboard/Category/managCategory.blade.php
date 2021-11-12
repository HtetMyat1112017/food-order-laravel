@extends('Admin_Dashboard.master')
@section('title','category')

@section('content_header','Category Management')
@section('locat_bar')
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('category.add')}}">category add</a></li>
            <li class="breadcrumb-item active">category management</li>
        </ol>
    </div>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                @if(session('del'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <span>{{session('del')}}</span>
                        <button type="button" class="close text-white" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    @endif
                    @if(session('update'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <span>{{session('update')}}</span>
                            <button type="button" class="close text-white" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                    @endif
               <div class="card">
                   <div class="card-body">
                       <div class="d-flex justify-content-between">
                           <h3>Category Table</h3>
                           <form action="">
                                <div class="form-inline">
                                    <input type="text" class="form-control mr-2" style="width: 200px" placeholder="search category">
                                    <button class="btn btn-dark"><i class="fa fa-search"></i></button>
                                </div>
                           </form>
                       </div>
                       <hr>
                       <table class="table table-hover table-bordered">
                           <thead>
                           <tr>
                               <th>id</th>
                               <th>Category Name</th>
                               <th>Order Number</th>

                               <th>Category state</th>
                               <th>Control</th>

                           </tr>
                           </thead>
                           <tbody>
                           @forelse($category as $categories)
                                <tr>
                                    <td>{{$categories->id}}</td>
                                    <td>{{$categories->category_name}}</td>
                                    <td>{{$categories->order_number}}</td>
                                    <td>{{$categories->category_state}}</td>

                                    <td>

                                        <button  type="button" class="btn btn-outline-success " data-toggle="modal" data-target="#edit{{$categories->id}}" title="click to edit"><i class="fa fa-edit"></i></button>
{{---------------------------------------------------modal start---------------------------------------}}
                                        <div class="modal fade" id="edit{{$categories->id}}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="staticBackdropLabel">Category Edit</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="{{route('category.edit',$categories->id)}}" method="post">
                                                            @csrf

                                                            <div class="form-group">
                                                                <label for="">Category Name</label>
                                                                <input type="text" name="category_name" class="form-control">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="">Order Number</label>
                                                                <input type="number" name="order_number" class="form-control">
                                                            </div>

                                                            <div class="modal-footer">
                                                                <button type="submit" name="up_btn" class="btn btn-outline-primary btn-block">Edit Category</button>
                                                            </div>

                                                        </form>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        {{---------------------------------------------------modal end---------------------------------------}}

                                                <a href="{{route('category.delete',$categories->id)}}" class="btn btn-outline-danger " title="click to delete"><i class="fa fa-trash"></i></a>
                                                @if($categories->category_state == 1)
                                                <a href="{{route('category.active',$categories->id)}}" class="btn btn-outline-info" title="click to active"><i class="fa fa-arrow-up"></i></a>
                                                @else
                                                    <a href="{{route('category.deactivate',$categories->id)}}" class="btn btn-outline-info" title="click to inactive"><i class="fa fa-arrow-down"></i></a>
                                                @endif


                                    </td>

                                </tr>
                           @empty
                               <tr>
                                   <td colspan="8" class="text-center bg-gray-light">No data available in table</td>
                               </tr>
                           @endforelse
                           </tbody>
                       </table>
                   </div>
               </div>
            </div>
        </div>
    </div>
@endsection
