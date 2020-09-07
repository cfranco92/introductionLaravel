@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Item</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form 
                        action="{{ route('posts.store') }}"
                        method="POST"
                        encrypt="multipart/form-date"
                    >
                        <div class="form-group">
                            <label>Title *</label>
                            <input type="text" name="Title" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" name="File">
                        </div>
                        <div class="form-group">
                            <label>Content *</label>
                            <textarea name="body" rows="6" class="form-control" required></textarea>
                        </div>
                        <div class="form-group">
                            <label>Embebed Content *</label>
                            <textarea name="iframe" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            @csrf
                            <input type="submit" value="Send" class="btn btn-sm btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
