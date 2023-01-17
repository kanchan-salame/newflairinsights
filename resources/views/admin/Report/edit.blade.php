@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-md-6">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Edit Report</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('report.update', $report) }}" method="post" enctype="multipart/form-data">
                            @method('put')
                            @csrf
                            <div class="form-group">
                                <label for="category_id">Category</label>
                                <select id="category_id" name="category_id" class="form-control custom-select @error('category_id') is-invalid @enderror">
                                    <option selected disabled>Select one</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}" {{ $category->id == $report->category_id ? 'selected' : '' }}>{{ $category->name }}</option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="show_on_homepage">Show On Homepage</label>
                                <select id="show_on_homepage" name="show_on_homepage" class="form-control custom-select @error('show_on_homepage') is-invalid @enderror">
                                    <option selected disabled>Select one</option>
                                    <option value="1" {{ $report->show_on_homepage == '1' ? 'selected' : '' }}>Yes</option>
                                    <option value="0" {{ $report->show_on_homepage == '0' ? 'selected' : '' }}>No</option>
                                </select>
                                @error('show_on_homepage')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" name="title" id="title"
                                    class="form-control @error('title') is-invalid @enderror" value="{{ $report->title }}">
                                @error('title')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="pages">Pages</label>
                                <input type="text" name="pages" id="pages" class="form-control
                                @error('pages') is-invalid @enderror" value="{{ $report->pages }}">
                                @error('pages')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="description_one">Description One</label>
                                <textarea id="description_one" class="form-control @error('description_one') is-invalid @enderror" value="{{ $report->description_one }}" name="description_one">{{ $report->description_one }}</textarea>
                                @error('description_one')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="image_one">Image One</label>
                                <input type="file" accept="image/*" id="image_one" name="image_one" value="{{ $report->image_one }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="description_two">Description Two</label>
                                <textarea id="description_two" class="form-control @error('description_two') is-invalid @enderror" value="{{ $report->description_two }}" name="description_two">{{ $report->description_two }}</textarea>
                                @error('description_two')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="image_two">Image Two</label>
                                <input type="file" accept="image/*" id="image_two" name="image_two" value="{{ $report->image_two }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="description_three">Description Three</label>
                                <textarea id="description_three" class="form-control @error('description_three') is-invalid @enderror" value="{{ $report->description_three }}" name="description_three">{{ $report->description_three }}</textarea>
                                @error('description_three')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="image_three">Image Three</label>
                                <input type="file" accept="image/*" id="image_three" name="image_three" value="{{ $report->image_three }}"
                                    class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="content">Table Of Content</label>
                                <textarea id="content" class="form-control @error('content') is-invalid @enderror" value="{{ $report->content }}" name="content">{{ $report->content }}</textarea>
                                @error('content')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="publisher_id">Publisher</label>
                                <select id="publisher_id" name="publisher_id" class="form-control custom-select @error('publisher_id') is-invalid @enderror">
                                    <option selected disabled>Select Publisher</option>
                                    <option value="4" {{ $report->publisher_id == '4' ? 'selected' : '' }}>John Wick</option>
                                    <option value="5" {{ $report->publisher_id == '5' ? 'selected' : '' }}>ICRWorld Research
                                    </option>
                                    <option value="6" {{ $report->publisher_id == '6' ? 'selected' : '' }}>ICRWorld Research</option>
                                    <option value="9" {{ $report->publisher_id == '9' ? 'selected' : '' }}>Prof Research</option>
                                    <option value="10" {{ $report->publisher_id == '10' ? 'selected' : '' }}>USA
                                        Germany
                                        Japan
                                        China
                                        India</option>
                                    <option value="12" {{ $report->publisher_id == '12' ? 'selected' : '' }}>Verified Market Research</option>
                                    <option value="13" {{ $report->publisher_id == '13' ? 'selected' : '' }}>BisReport</option>
                                    <option value="14" {{ $report->publisher_id == '14' ? 'selected' : '' }}>Gen Consulting Company</option>
                                    <option value="15" {{ $report->publisher_id == '15' ? 'selected' : '' }}>Agri &amp; Food</option>
                                    <option value="16" {{ $report->publisher_id == '16' ? 'selected' : '' }}>Flair Insights</option>
                                    <option value="17" {{ $report->publisher_id == '17' ? 'selected' : '' }}>CmaxInsight</option>
                                    <option value="20" {{ $report->publisher_id == '20' ? 'selected' : '' }}>MIReports</option>
                                    <option value="22" {{ $report->publisher_id == '22' ? 'selected' : '' }}>MIR</option>
                                    <option value="23" {{ $report->publisher_id == '23' ? 'selected' : '' }}>Publisher</option>
                                    <option value="24" {{ $report->publisher_id == '24' ? 'selected' : '' }}>North America
                                        Europe
                                        China
                                        Asia (Ex China)</option>
                                    <option value="25" {{ $report->publisher_id == '25' ? 'selected' : '' }}>USA
                                        Europe
                                        China
                                        India
                                        Japan
                                        Australia</option>
                                </select>
                                @error('publisher_id')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="delivery_format_id">Delivery Format ID</label>
                                <input type="text" name="delivery_format_id" id="delivery_format_id"
                                    class="form-control @error('delivery_format_id') is-invalid @enderror" value="{{ $report->delivery_format_id }}">
                                    @error('delivery_format_id')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="list_of_figures">List of figure</label>
                                <input type="text" name="list_of_figures" id="list_of_figures" class="form-control @error('list_of_figures') is-invalid @enderror" value="{{ $report->list_of_figures }}">
                                @error('list_of_figures')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="single_user_price">Single user price</label>
                                <input type="text" name="single_user_price" id="single_user_price"
                                    class="form-control @error('single_user_price') is-invalid @enderror" value="{{ $report->single_user_price }}">
                                    @error('single_user_price')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="multi_user_price">Multi user price</label>
                                <input type="text" name="multi_user_price" id="multi_user_price"
                                    class="form-control @error('multi_user_price') is-invalid @enderror" value="{{ $report->multi_user_price }}">
                                    @error('multi_user_price')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="corp_user_price">Corporate user price</label>
                                <input type="text" name="corp_user_price" id="corp_user_price" class="form-control @error('corp_user_price') is-invalid @enderror" value="{{ $report->corp_user_price }}">
                                @error('corp_user_price')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="meta_title">Meta Title</label>
                                <input type="text" name="meta_title" id="meta_title" class="form-control @error('meta_title') is-invalid @enderror" value="{{ $report->meta_title }}">
                                @error('meta_title')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="meta_keywords">Meta Keywords</label>
                                <input type="text" name="meta_keywords" id="meta_keywords" class="form-control @error('meta_keywords') is-invalid @enderror" value="{{ $report->meta_keywords }}">
                                @error('meta_keywords')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="meta_description">Meta Description</label>
                                <input type="text" name="meta_description" id="meta_description"
                                    class="form-control @error('meta_description') is-invalid @enderror" value="{{ $report->meta_description }}">
                                    @error('meta_description')
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
    <!-- jQuery -->
    {{-- <script src="{{ route('home') }}/plugins/jquery/jquery.min.js"></script> --}}
    {{-- <script src="https://code.jquery.com/jquery-3.2.0.min.js" crossorigin="anonymous"></script> --}}
    <!-- Bootstrap 4 -->
    {{-- <script src="{{ route('home') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script> --}}
    <!-- Summernote -->
    {{-- <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.js"></script> --}}
    <!-- Summernote -->
@endsection
@section('third_party_scripts')
    <script type="text/javascript">
        // alert('hi')
        $(function() {
            // Summernote
            var sum = $("#summernote");
            sum[0].summernote({
                toolbar: [

                    // This is a Custom Button in a new Toolbar Area
                    ['custom', ['examplePlugin']],

                    // You can also add Interaction to an existing Toolbar Area
                    ['style', ['style', 'examplePlugin']]
                ]
            });
            console.log(sum[0]);

            // CodeMirror
            //   CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
            //     mode: "htmlmixed",
            //     theme: "monokai"
            //   });
        });
    </script>
@endsection
