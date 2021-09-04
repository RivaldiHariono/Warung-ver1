@extends('layouts.admin')

@section('title')
    Product Page Update  
@endsection

@section('content')
    <!-- Page Content -->
    <div
            class="section-content section-dashboard-home"
            data-aos="fade-up"
          >
        <div class="container-fluid">
            <div class="dashboard-heading">
            <h2 class="dashboard-title">Product Dashboard Update</h2>
            </div>
            <div class="dashboard-content">
                <div class="row">
                    <div class="col-md-12">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>
                                            {{ $error }}
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ route('product.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                                    @method('PUT')
                                    @csrf
                                    <div class="row">
                                        
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">Name Product</label>
                                                <input type="text" name="name" class="form-control" value="{{ $item->name }}" required>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                        
                                            <div class="form-group">
                                                    <label for="">Price</label>
                                                    <input type="number" name="price" class="form-control" required value="{{ $item->price }}">
                                                </div>

                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">Stock</label>
                                                <input type="number" name="stock" class="form-control" required value="{{ $item->stock }}">
                                            </div>

                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">Category Product</label>
                                                <select name="categories_id" class="form-control">
                                                    
                                                    @foreach ($categories as $category)
                                                        
                                                        @if ($category->id == $item->categories_id)
                                                            <option value="{{ $item->categories_id }}" selected>{{ $item->category->name }}</option>
                                                        @else
                                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                        @endif
                                                        
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">Product Owner</label>
                                                <select name="users_id" class="form-control">
                                                    
                                                    @foreach ($users as $user)
                                                        @if ($user->id == $item->users_id)
                                                            <option value="{{ $user->id }}" selected>{{ $user->name }}</option>
                                                        @else
                                                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                                                        @endif
                                                    @endforeach

                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-success px-5">
                                                    Save
                                            </button>
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-text-right">
                                            
                                        </div>
                                    </div>


                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection