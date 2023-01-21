@extends('layouts.app')

@section('content')
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
                        <form action="{{ route('category.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror">
                                @error('name')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="show_on_homepage">Show On Homepage</label>
                                <select id="show_on_homepage" name="show_on_homepage" class="form-control custom-select @error('show_on_homepage') is-invalid @enderror">
                                    <option selected disabled>Select one</option>
                                    <option value="1">Yes</option>
                                    <option value="0">No</option>
                                </select>
                                @error('show_on_homepage')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror">
                                @error('title')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="title_tag">Title Tag</label>
                                <input type="text" name="title_tag" id="title_tag" class="form-control @error('title_tag') is-invalid @enderror">
                                @error('title_tag')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="slug">Slug</label>
                                <input type="text" name="slug" id="slug" class="form-control @error('slug') is-invalid @enderror">
                                @error('slug')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="meta_keywords">Meta Keywords</label>
                                <input type="text" name="meta_keywords" id="meta_keywords" class="form-control @error('meta_keywords') is-invalid @enderror">
                                @error('meta_keywords')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="category_icon">Category Icon</label>
                                <input type="text" name="category_icon" id="category_icon" class="form-control @error('category_icon') is-invalid @enderror">
                                @error('category_icon')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="image">Image</label>
                                <input type="file" accept="image/*" id="image" name="image"
                                    class="form-control @error('image') is-invalid @enderror"
                                    value="{{ old('image') }}">
                                @error('image')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <a href="{{ route('category.index') }}" class="btn btn-secondary">Cancel</a>
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
@endsection
