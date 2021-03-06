@extends('adminlte.page')

@section('header')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit Blogs</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Our Blogs</li>
                <li class="breadcrumb-item active">Edit</li>
            </ol>
        </div>
    </div>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    {!! Form::model($blog, ['route' => ['blogs.update', $blog->id], 'enctype' => 'multipart/form-data',
                    'method' => 'patch']) !!}
                    @include('blogs.fields')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $('.summernote').summernote({
                placeholder: 'Discussion Points',
                tabsize: 2,
                height: 200
            }).summernote('code', `{!!  $blog->body !!}`);
        });

    </script>
@endsection
