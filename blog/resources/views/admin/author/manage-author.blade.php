@extends('admin.master')
@section('content')
    <div class="row">
        <div class="col-md-10 offset-1" >
            <div class="card">
                <div class="card-header">
                    <h3 class="mb-0 text-uppercase text-center">Manage Author</h3>
                    <h6 class="text-center text-success">{{session('message')}}</h6>
                </div>
                <div class="card-header">
                    <table class="table table-hovered table-striped">
                        <tr>
                            <th>SL</th>
                            <th>Category Name</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        @php $i=1 @endphp
                        @foreach($authors as $author)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$author->name}}</td>
                                <td>
                                    <img src="{{asset($author->image)}}" alt="" style="height: 100px; width: 100px;">
                                </td>
                                <td>
                                    @if($author->status == 1)
                                        Published
                                    @else
                                        Unpublished
                                    @endif
                                </td>
                                <td class="btn-group my-4 mx-2">
                                    <a href="{{ route('edit.author', ['id'=>$author->id]) }}" class="btn btn-primary">Edit</a>
                                    @if($author->status == 1)
                                        <a href="{{route('status.author', ['id'=>$author->id])}}" class="btn btn-warning mx-2">Unpublish</a>
                                    @else
                                        <a href="{{route('status.author', ['id'=>$author->id])}}" class="btn btn-success mx-2">Publish</a>
                                    @endif
                                    <form action="{{route('delete.author')}}" method="post">
                                        @csrf
                                        <input type="hidden" name="id" value="{{$author->id}}">
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

