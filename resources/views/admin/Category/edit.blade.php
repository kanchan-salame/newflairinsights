@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-md-6">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Edit Category</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('category.update', $category) }}" method="post">
                            @method('put')
                            @csrf
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" id="name" class="form-control" value="{{ $category->name }}">
                            </div>
                            <div class="form-group">
                                <label for="show_on_homepage">Show On Homepage</label>
                                <select id="show_on_homepage" name="show_on_homepage" class="form-control custom-select">
                                    <option selected disabled>Select one</option>
                                    <option value="1" {{$category->show_on_homepage == '1' ? 'selected' : ''}}>Yes</option>
                                    <option value="0" {{$category->show_on_homepage == '0' ? 'selected' : ''}}>No</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" name="title" id="title" class="form-control" value="{{ $category->title }}">
                            </div>
                            <div class="form-group">
                                <label for="title_tag">Title Tag</label>
                                <input type="text" name="title_tag" id="title_tag" class="form-control" value="{{ $category->title_tag }}">
                            </div>
                            <div class="form-group">
                                <label for="slug">Slug</label>
                                <input type="text" name="slug" id="slug" class="form-control" value="{{ $category->slug }}">
                            </div>
                            <div class="form-group">
                                <label for="meta_keywords">Meta Keywords</label>
                                <input type="text" name="meta_keywords" id="meta_keywords" class="form-control" value="{{ $category->meta_keywords }}">
                            </div>
                            <div class="form-group">
                                <label for="category_icon">Category Icon</label>
                                <select id="category_icon" name="category_icon" class="form-control custom-select">
                                    <option selected disabled>Select one</option>
                                    <option value="icon1" {{$category->category_icon == 'icon1' ? 'selected' : ''}}>Icon 1</option>
                                    <option value="icon0" {{$category->category_icon == 'icon0' ? 'selected' : ''}}>Icon 0</option>
                                </select>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                  <a href="{{ route('category.index') }}" class="btn btn-secondary">Cancel</a>
                                  <input type="submit" value="Update" class="btn btn-success float-right">
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
