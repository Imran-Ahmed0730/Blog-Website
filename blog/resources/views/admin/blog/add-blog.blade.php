@extends('admin.master')
@section('title')
@endsection
@section('content')
    <section class="col-md-10 offset-1 my-5">
        <div class="card">
            <div class="card-body">
                <div class="border p-3 rounded">
                    <h3 class="mb-0 text-uppercase text-center">Add Blogs</h3>
                    <h5 class="text-center text-success">{{session('message')}}</h5>
                    <hr/>
                    <form class="row g-3" action="{{route('new.blog')}}" enctype="multipart/form-data" method="post">
                        @csrf
                        <div class="col-12">
                            <label class="form-label">Author Name</label>
                            <select name="author_id" id="" class="form-control">
                                <option value="">Select Author</option>
                                @foreach($authors as $author)
                                    <option value="{{$author->id}}">{{$author->name}}</option>
                                @endforeach

                            </select>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Category Name</label>
                            <select name="category_id" id="" class="form-control">
                                <option value="">Select Category</option>
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->category_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Blog Title</label>
                            <input type="text" class="form-control" name="blog_title">
                        </div>
                        <div class="col-12">
                            <label class="form-label">Slug</label>
                            <input type="text" class="form-control" name="slug">
                        </div>
                        <div class="col-12">
                            <label class="form-label">Desciption</label>
                            <textarea class="form-control" rows="4" cols="4" name="description"></textarea>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Date</label>
                            <input type="date" class="form-control" name="date">
                        </div>
                        <div class="col-12">
                            <label class="form-label">Image</label>
                            <input type="file" class="form-control" name="image">
                        </div>

                        <div class="col-12">
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Create Blog</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

