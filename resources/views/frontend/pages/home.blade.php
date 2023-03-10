@extends('frontend.layouts.master')

@section('front_title')
    Blog| Home
@endsection


@section('user_content')
    <div class="container">



        <div class="col-lg-12">
            <div class="section-title  text-center">
                <h2>Latest Blogs</h2>
                <img src="{{ asset('assets/frontend') }}/images/section-title.png" alt="">
            </div>
        </div>
        <div class="row">

            @foreach ($posts as $post)
                <div class="col-lg-4  col-md-6 col-12">
                    <div class="blog-wrap">
                        <div class="blog-image">
                            <img src="{{ asset('uploads/post') }}/{{ $post->image }}" alt="">
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <ul>
                                    <li><a href="#"><i class="fa fa-user"></i> {{ $post->creator_name }}</a></li>
                                    <li class="pull-right"><a href="#"><i
                                                class="fa fa-clock-o"></i> {{ $post->created_at->format('d/M/Y') }}</a></li>
                                </ul>
                            </div>
                            <h3><a href="{{ route('detailes.show', $post->id) }}">{{ $post->title }}</a></h3>
                            <p>{{ substr($post->description, 0, 195) }}</p>
                        </div>
                    </div>
                </div>
            @endforeach

            {{-- <div class="col-lg-4 col-md-6 col-12">
                <div class="blog-wrap">
                    <div class="blog-image">
                        <img src="{{ asset('assets/frontend') }}/images/blog/2.jpg" alt="">
                        <ul>
                            <li>20</li>
                            <li>Janu</li>
                        </ul>
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <ul>
                                <li><a href="#"><i class="fa fa-user"></i> Admin</a></li>
                                <li class="pull-right"><a href="#"><i class="fa fa-clock-o"></i> 14/06/2019</a></li>
                            </ul>
                        </div>
                        <h3><a href="blog-gallary.html">South korea???s moon jae in sworn vowing to address north...</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati nulla veniam autem veritatis,
                            adipisci officia? Tempora necessitatibus, iusto minima maxime ipsum quae dolore repellat
                            quaerat.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="blog-wrap">
                    <div class="blog-image">
                        <img src="{{ asset('assets/frontend') }}/images/blog/3.jpg" alt="">
                        <ul>
                            <li>25</li>
                            <li>Jun</li>
                        </ul>
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <ul>
                                <li><a href="#"><i class="fa fa-user"></i> Admin</a></li>
                                <li class="pull-right"><a href="#"><i class="fa fa-clock-o"></i> 25/06/2019</a></li>
                            </ul>
                        </div>
                        <h3><a href="blog-details.html">Man looking at his note remember to daily tasks...</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati nulla veniam autem veritatis,
                            adipisci officia? Tempora necessitatibus, iusto minima maxime ipsum quae dolore repellat
                            quaerat.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="blog-wrap">
                    <div class="blog-image">
                        <img src="{{ asset('assets/frontend') }}/images/blog/8.jpg" alt="">
                        <ul>
                            <li>15</li>
                            <li>April</li>
                        </ul>
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <ul>
                                <li><a href="#"><i class="fa fa-user"></i> Admin</a></li>
                                <li class="pull-right"><a href="#"><i class="fa fa-clock-o"></i> 25/06/2019</a></li>
                            </ul>
                        </div>
                        <h3><a href="blog-video.html">Robots helped inspire and deep learning might become...</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati nulla veniam autem veritatis,
                            adipisci officia? Tempora necessitatibus, iusto minima maxime ipsum quae dolore repellat
                            quaerat.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="blog-wrap">
                    <div class="blog-image">
                        <img src="{{ asset('assets/frontend') }}/images/blog/9.jpg" alt="">
                        <ul>
                            <li>25</li>
                            <li>May</li>
                        </ul>
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <ul>
                                <li><a href="#"><i class="fa fa-user"></i> Admin</a></li>
                                <li class="pull-right"><a href="#"><i class="fa fa-clock-o"></i> 25/06/2019</a></li>
                            </ul>
                        </div>
                        <h3><a href="blog-details.html">Defying the traditional and mainstream parties...</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati nulla veniam autem veritatis,
                            adipisci officia? Tempora necessitatibus, iusto minima maxime ipsum quae dolore repellat
                            quaerat.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="blog-wrap">
                    <div class="blog-image">
                        <img src="{{ asset('assets/frontend') }}/images/blog/12.jpg" alt="">
                        <ul>
                            <li>01</li>
                            <li>Feb</li>
                        </ul>
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <ul>
                                <li><a href="#"><i class="fa fa-user"></i> Admin</a></li>
                                <li class="pull-right"><a href="#"><i class="fa fa-clock-o"></i> 25/06/2019</a></li>
                            </ul>
                        </div>
                        <h3><a href="blog-audio.html">Packing macron anddis insted about vote against chat...</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati nulla veniam autem veritatis,
                            adipisci officia? Tempora necessitatibus, iusto minima maxime ipsum quae dolore repellat
                            quaerat.</p>
                    </div>
                </div>
            </div> --}}
            <div class="col-12">
                <div class="pagination-wrapper text-center mb-30">
                    <ul class="page-numbers">
                        <li><a class="prev page-numbers" href="#"><i class="fa fa-arrow-left"></i></a></li>
                        <li><span class="page-numbers current">1</span></li>
                        <li><a class="page-numbers" href="#">2</a></li>
                        <li><a class="page-numbers" href="#">3</a></li>
                        <li><a class="next page-numbers" href="#"><i class="fa fa-arrow-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
