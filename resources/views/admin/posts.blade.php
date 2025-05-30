@extends('admin.layouts.master')

@section('content')

    <div class="container-fluid px-4">
        <h1 class="mt-4">Posts</h1>
    </div>

    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Add New Post
    </button>

    <div>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Post</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form method="POST" action="/postsStore" enctype="multipart/form-data">
                    @csrf

                    <div class="modal-body">
                        <div class='mb-3'>
                            <label for="title">Title</label>
                            <input type="title" class="form-control" id="title" name="title" placeholder="Title">
                        </div>
                        <div class="mb-3">
                            <label for="content">Content</label>
                            <textarea class="form-control" id="content" name="content" rows="3" ></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="image">Image</label>
                            <input type="file" class="form-control-file" id="image" name="image">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
                
            </div>
        </div>
        
    </div>


    <div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Content</th>
                        <th>Image</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                
                <tbody>
                    @foreach ($posts as $post)
                     <tr>
                        <td>{{$post->title}}</td>
                        <td>{{$post->content}}</td>
                        <td><img width="100" src="{{asset('storage/'.$post->image)}}"></td>
                        <td>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{ $post->id }}">
                                Edit
                            </button>
                            <a href="/postsDelete/{{ $post->id }}" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this slide?')">Delete</a>
                        </td>
                    </tr>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal{{ $post->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Edit Post</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>

                                

                                <form method="POST" action="/postsUpdate" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $post->id }}">
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label for="heading">Title</label>
                                            <input type="title" class="form-control" id="title" name="title" value= "{{$post->title }}" >
                                        </div>
                                        <div class="mb-3">
                                            <label for="subheading">Content</label>
                                            <input type="text" class="form-control" id="content" name="content" value="{{ $post->content }}" >
                                        </div>
                                        
                                        <div class="mb-3">
                                            <label for="image">Image</label>
                                            <input type="file" class="form-control" id="image" name="image" placeholder="Image">
                                        </div>
                                    </div>
                                    
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Update Post</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- EndModal -->


                        
                    @endforeach
                    
                </tbody>
            </table>
        </div>
        

    </div>
        
@endsection