@extends('layouts.applayout')
@section('content')
<style>
    .member-info h3 strong {
        font-weight: normal;
        font-size: 15px;
    }
    .img-fluid {
        max-width: 100%;
        height: 210px;
    }
</style>
    <main id="main">
{{-- {{ dd($reports) }} --}}
        <section id="team" class="team section-bg mt-5">
            <div class="container aos-init aos-animate" data-aos="fade-up">
                <div class="row mt-5">
                    
                    
                    <div class="col-md-12">
                        <div class="row">
                            @if ($blogs)
                            @foreach ($blogs as $blog)
                                <div class="col-lg-12 mt-4">
                                    <div class="member d-flex align-items-start aos-init aos-animate" data-aos="zoom-in"
                                        data-aos-delay="300">
                                        <div class="member-info">
                                            <h4><a href="{{ route('blogDetail', $blog->slug) }}" class="">{{ Str::limit($blog->title, 100) }}</a></h4>
                                            <p>{!! Str::limit($blog->long_description, 300) !!}</p>
                                            <br>
                                            <div class="d-flex">
                                                <a href="{{ route('blogDetail', $blog->slug) }}" class="btn-learn-more"><i class="ri-eye-fill"></i>
                                                    Read More</a>&nbsp;&nbsp;&nbsp;
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <br><br>
                        {{-- Pagination --}}
                        <div class="d-flex justify-content-center">
                            {!! $blogs->links() !!}
                        </div>
                        @endif
                        @if(count($blogs) == 0)
                            <div class="col-lg-12 mt-4">
                                <h1 class="text-center">No Blogs Found....!</h1>
                            </div>
                        @endif

                    </div>
                    
                </div>

            </div>
        </section>
    </main><!-- End #main -->
@endsection
