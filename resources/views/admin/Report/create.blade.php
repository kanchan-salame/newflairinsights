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
                        <form action="{{ route('category.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" id="name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="show_on_homepage">Show On Homepage</label>
                                <select id="show_on_homepage" name="show_on_homepage" class="form-control custom-select">
                                    <option selected disabled>Select one</option>
                                    <option value="1">Yes</option>
                                    <option value="0">No</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" name="title" id="title" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="title_tag">Title Tag</label>
                                <input type="text" name="title_tag" id="title_tag" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="slug">Slug</label>
                                <input type="text" name="slug" id="slug" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="meta_keywords">Meta Keywords</label>
                                <input type="text" name="meta_keywords" id="meta_keywords" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="category_icon">Category Icon</label>
                                <select id="category_icon" name="category_icon" class="form-control custom-select">
                                    <option selected disabled>Select one</option>
                                    <option value="icon1">Icon 1</option>
                                    <option value="icon0">Icon 0</option>
                                </select>
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
    <!-- Toastr -->
    <!-- jQuery -->
<script src="{{  route('home') }}/adminltejs/jquery/jquery.min.js"></script>
<script src="{{  route('home') }}/adminltejs/toastr/toastr.min.js"></script>
    <script>

        toastr.success('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
    </script>
@endsection
