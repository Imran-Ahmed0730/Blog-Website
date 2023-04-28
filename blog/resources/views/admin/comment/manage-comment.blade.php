@extends('admin.master')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center">Manage Blogs</h3>
{{--                    <h5 class="text-center text-success">{{session('message')}}</h5>--}}
                </div>
                <div class="card-header">
                    <table class="table table-striped table-bordered table-hover">
                        <tr>
                            <th>SL</th>
                            <th>Blog Image</th>
                            <th>Author Name</th>
                            <th> Blog Title</th>
                            <th>Comments</th>
                            <th>User Name</th>
                            <th>Action</th>
                        </tr>
                        @php $i=1 @endphp
                        @foreach($blogComment as $comment)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>
                                    <img src="{{asset($comment->blog->image)}}" alt="" srcset="" class="img-fluid" width="200px">
                                </td>
                                <td>{{$comment->blog->author->name}}</td>
                                <td>{{$comment->blog->blog_title}}</td>
                                <td>{{$comment->comment}}</td>
                                <td>{{$comment->user->name}}</td>
                                <td>
                                    @if($comment->status == 1)
                                        <a href="{{route('status.comment', ['id'=>$comment->id])}}" class="btn btn-warning">Unpublish</a>
                                    @else
                                        <a href="{{route('status.comment', ['id'=>$comment->id])}}" class="btn btn-success">Publish</a>
                                    @endif

                                    <form action="{{route('delete.comment')}}" method="post">
                                        @csrf
                                        <input type="hidden" value="{{$comment->id}}" name="id">
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
