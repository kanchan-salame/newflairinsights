@extends('layouts.applayout')
@section('content')
    <style>
        .member-info h3 strong {
            font-weight: normal;
            font-size: 15px;
        }

        .img-fluid {
            max-width: 100%;
            /*height: 210px;*/
        }
        .team .member {
          padding: 20px;
        }
        @media screen and ( max-width: 400px ){

            li.page-item {
        
                display: none;
            }
        
            .page-item:first-child,
            .page-item:nth-child( 2 ),
            .page-item:nth-last-child( 2 ),
            .page-item:last-child,
            .page-item.active,
            .page-item.disabled {
        
                display: block;
            }
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
                                                <a href="{{ route('reports', $category->slug) }}">{{ $category->name }} </a>
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
                            <div class="member d-sm-flex align-items-start aos-init aos-animate" data-aos="zoom-in"
                                data-aos-delay="300">
                                <div class="pic d-flex justify-content-center ">
                                    <img src="{{ $report->category->image ? route('home') . '/storage/' . $report->category->image : route('home') . '/assets/img/team/team-3.jpg' }}"
                                        class="img-fluid w-50" alt="">
                                </div>
                               <div class="member-info">
                                                <h4> <a href="{{ route('reportDescription', $report->slug) }}"> {{ Str::limit($report->title, 100) }}</a></h4>
                                                <p>{!! Str::limit($report->description_one, 300) !!}</p>
                                                <br>
                                               
                                                <div class="justify-content-center justify-content-lg-start mb-5">
                                                    <a href="{{ route('reportDescription', $report->slug) }}" class=" btn-learn-more d-block d-sm-inline-block btn-get-started scrollto">
                                                        <i class="ri-eye-fill"></i></i> View Report
                                                    </a>
                                                    
                                                    <a href="{{ route('rquestSample', $report->slug) }}"
                                                        class=" btn-learn-more d-block d-sm-inline-block btn-get-started scrollto mr-sm-2 ml-sm-2">
                                                        <i class="ri-file-fill"></i> Request A Sample
                                                    </a>
                                                   
                                                    <a href="{{ route('rquestSample', $report->slug) }}" class=" btn-learn-more d-block d-sm-inline-block btn-get-started scrollto">
                                                        <i class="ri-phone-fill"></i> Inquiry Before Buying
                                                    </a>
                                                </div>
                                                
                                            </div>
                            </div>
                        </div>
                                @endforeach
                        </div>
                        <br><br>
                        {{-- Pagination --}}
                        <div class="">
                        <div class="">
                            {!! $reports->links() !!}
                        </div>
                        </div>
                        @endif
                        @if (count($reports) == 0)
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
