@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">List of Case Studies</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Action</th>
                                </tr>
                            <tbody>
                                @foreach ($caseStudies as $caseStudy)
                                    <tr>
                                        <td>{{ $caseStudy->id }}</td>
                                        <td>{{ $caseStudy->title }}</td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="{{ route('casestudy.edit', $caseStudy->id) }}" type="button"
                                                    class="btn btn-sm btn-info"><i class="fas fa-edit"></i></a>

                                                <form method="post" action="{{ route('casestudy.destroy', $caseStudy->id) }}">
                                                    @method('delete')
                                                    @csrf
                                                    <button type="submit" class="btn btn-danger btn-sm"><i
                                                            class="fas fa-trash"></i></button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- ./col -->
        </div>
        <!-- /.row -->
    </div>
@endsection
