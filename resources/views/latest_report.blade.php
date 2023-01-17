@extends('layouts.applayout')
@section('content')
<style>
    .member-info h3 strong {
        font-weight: normal;
        font-size: 15px;
    }
</style>
    <main id="main">
{{-- {{ dd($reports) }} --}}
        <section id="team" class="team section-bg mt-5">
            <div class="container aos-init aos-animate" data-aos="fade-up">
                <div class="row">
                    <div class="col-md-3">
                        <div class="row">
                            <div class="col-lg-12">
                                {{-- <div class="text-center">
                                    <h4>Categories</h4>
                                </div> --}}
                                <div class="categories d-flex align-items-start aos-init aos-animate" data-aos="zoom-in"
                                    data-aos-delay="300">
                                    <div class="categories-info">
                                        <h4>Categories</h4>
                                        @foreach ($categories as $category)
                                            <div class="btn btn-light customBtn">
                                                <a href="{{ route('reports', $category->id) }}">{{ $category->name }} </a>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="row">
                            @if ($reports)
                            @foreach ($reports as $report)
                                <div class="col-lg-12 mt-4">
                                    <div class="member d-flex align-items-start aos-init aos-animate" data-aos="zoom-in"
                                        data-aos-delay="300">
                                        <div class="pic"><img src="{{ route('home') }}/assets/img/team/team-3.jpg"
                                                class="img-fluid" alt="">
                                        </div>
                                        <div class="member-info">
                                            <h4>{{ Str::limit($report->title, 100) }}</h4>
                                            <p>{!! Str::limit($report->description_one, 300) !!}</p>
                                            <br>
                                            <div class="d-flex">
                                                <a href="{{ route('reportDescription', $report->id) }}" class="btn-learn-more"><i class="ri-eye-fill"></i>
                                                    View Report</a>&nbsp;&nbsp;&nbsp;
                                                <a href="#" class="btn-learn-more"><i class="ri-file-fill"></i>
                                                    Request A Sample</a>&nbsp;&nbsp;&nbsp;
                                                <a href="#" class="btn-learn-more"><i class="ri-phone-fill"></i>
                                                    Inquiry Before Buying</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <br><br>
                        {{-- Pagination --}}
                        <div class="d-flex justify-content-center">
                            {!! $reports->links() !!}
                        </div>
                        @endif
                        @if(count($reports) == 0)
                            <div class="col-lg-12 mt-4">
                                <h1 class="text-center">No Reports Found....!</h1>
                            </div>
                        @endif

                    </div>
                </div>

            </div>
        </section>
    </main><!-- End #main -->
@endsection
