@extends('admin.master')
@section('content')
    <div class="row add-category-section">
        <div class="col-md-8 offset-2">
            <div class="card">
                <div class="card-body">
                    <div class="border p-3 rounded">
                        <h3 class="mb-0 text-uppercase text-center">Add Category Form</h3>
                        <h6 class="text-center text-success">{{session('message')}}</h6>
                        <hr/>
                        <form class="row g-3" action="{{route('new.category')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="col-12">
                                <label class="form-label">Category Name</label>
                                <input type="text" class="form-control" name="category_name">
                            </div>
                            <div class="col-12">
                                <label class="form-label">About Category</label>
                                <textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Image</label>
                                <input type="file" class="form-control" name="image">
                            </div>
                            <div class="col-12">
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary">Add to Category</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
