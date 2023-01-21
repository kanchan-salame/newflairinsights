@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-md-6">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Add Category</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('casestudy.update', $caseStudy->id) }}" method="post"
                            enctype="multipart/form-data">
                            @method('put')
                            @csrf
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" name="title" id="title"
                                    class="form-control @error('title') is-invalid @enderror"
                                    value="{{ $caseStudy->title }}">
                                @error('title')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="description_one">Description One</label>
                                <textarea id="description_one" class="form-control @error('description_one') is-invalid @enderror"
                                    value="{{ old('description_one') }}" name="description_one">{{ $caseStudy->description_one }}</textarea>
                                @error('description_one')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="image_one">Image One</label>
                                <input type="file" accept="image/*" id="image_one" name="image_one"
                                    class="form-control @error('image_one') is-invalid @enderror"
                                    value="{{ old('image_one') }}">
                                @error('image_one')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="description_two">Description Two</label>
                                <textarea id="description_two" class="form-control @error('description_two') is-invalid @enderror"
                                    value="{{ old('description_two') }}" name="description_two">{{ $caseStudy->description_two }}</textarea>
                                @error('description_two')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="image_two">Image Two</label>
                                <input type="file" accept="image/*" id="image_two" name="image_two"
                                    class="form-control @error('image_two') is-invalid @enderror"
                                    value="{{ old('image_two') }}">
                                @error('image_two')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="description_three">Description Three</label>
                                <textarea id="description_three" class="form-control @error('description_three') is-invalid @enderror"
                                    value="{{ old('description_three') }}" name="description_three">{{ $caseStudy->description_three }}</textarea>
                                @error('description_three')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="image_three">Image Three</label>
                                <input type="file" accept="image/*" id="image_three" name="image_three"
                                    class="form-control @error('image_three') is-invalid @enderror"
                                    value="{{ old('image_three') }}">
                                @error('image_three')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="slug">Slug</label>
                                <input type="text" name="slug" id="slug"
                                    class="form-control @error('slug') is-invalid @enderror"
                                    value="{{ $caseStudy->slug }}">
                                @error('slug')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <a href="{{ route('casestudy.index') }}" class="btn btn-secondary">Cancel</a>
                                    <input type="submit" value="Save" class="btn btn-success float-right">
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
    <script type="text/javascript">
        $('#description_one').summernote({
            height: 300
        });

        $('#description_two').summernote({
            height: 300
        });

        $('#description_three').summernote({
            height: 300
        });
    </script>
    <!-- Summernote -->
@endsection
