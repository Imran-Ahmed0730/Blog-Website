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
                    <form class="row g-3" action="{{route('update.blog')}}" enctype="multipart/form-data" method="post">
                        @csrf
                        <input type="hidden" value="{{$blog->id}}" name="id">
                        <div class="col-12">
                            <label class="form-label">Category Name</label>
                            <input type="text" class="form-control" name="author_id" value="{{$blog->category->category_name}}" readonly>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Author Name</label>
                            <input type="text" class="form-control" name="category_id" value="{{$blog->author->name}}" readonly>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Blog Title</label>
                            <input type="text" class="form-control" name="blog_title" value="{{$blog->blog_title}}">
                        </div>
                        <div class="col-12">
                            <label class="form-label">Slug</label>
                            <input type="text" class="form-control" name="slug" value="{{$blog->slug}}">
                        </div>
                        <div class="col-12">
                            <label class="form-label">Desciption</label>
                            <textarea class="form-control" rows="4" cols="4" name="description" >{{$blog->description}}</textarea>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Date</label>
                            <input type="date" class="form-control" name="date" value="{{$blog->date}}">
                        </div>
                        <div class="col-12">
                            <label class="form-label">Image</label>
                            <img src="{{asset($blog->image)}}" alt="" srcset="" class="img-fluid">
                            <input type="file" class="form-control" name="image">
                        </div>

                        <div class="col-12">
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Update Blog</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

