@extends('admin.master')
@section('title')
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                   <h3 class="text-center">Manage Blogs</h3>
                    <h5 class="text-center text-success">{{session('message')}}</h5>
                </div>
                <div class="card-header">
                    <table class="table table-striped table-bordered table-hover">
                        <tr>
                            <th>SL</th>
                            <th>Image</th>
                            <th>Category Name</th>
                            <th>Author Name</th>
                            <th> Blog Title</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        @php $i=1 @endphp
                        @foreach($blogs as $blog)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>
                                    <img src="{{asset($blog->image)}}" alt="" srcset="" class="img-fluid">
                                </td>
                                <td>{{$blog->category_id}}</td>
                                <td>{{$blog->author_id}}</td>
                                <td>{{$blog->blog_title}}</td>
                                <td>{{$blog->description}}</td>
                                <td>{{$blog->status}}</td>
                                <td>
                                    <a href="{{route('edit.blog', ['id'=>$blog->id])}}" class="btn btn-primary">Edit</a>
                                    @if($blog->status == 1)
                                        <a href="{{route('status.blog', ['id'=>$blog->id])}}" class="btn btn-warning">Unpublish</a>
                                    @else
                                        <a href="{{route('status.blog', ['id'=>$blog->id])}}" class="btn btn-success">Publish</a>
                                    @endif

                                    <form action="{{route('delete.blog')}}" method="post">
                                        @csrf
                                        <input type="hidden" value="{{$blog->id}}" name="id">
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach

                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
