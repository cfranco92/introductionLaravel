@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Items
                    <a href="{{ route('posts.index') }}" class="btn btn-sm btn-primary float-right">Create</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th colspan="2">&nbsp;</th>
                            </tr>
                            <tbody>
                                @foreach ($posts as $post)
                                    <tr>
                                        <td>{{ $post->id }}</td>    
                                        <td>{{ $post->title }}</td>
                                        <td>
                                            <a href="{{ route('posts.edit', $post) }}" class="btn btn-primary btn-sm">
                                                Edit
                                            </a>
                                        </td>
                                        <td>
                                            <form action="{{ route('posts.destroy', $post) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <input 
                                                    type="submit" 
                                                    value="Delete" 
                                                    class="btn btn-sm btn-danger"
                                                    onclick="return confirm('Do you want to delete...?')"
                                                >
                                            </form>
                                        </td>
                                    </tr>    
                                @endforeach
                            </tbody>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
