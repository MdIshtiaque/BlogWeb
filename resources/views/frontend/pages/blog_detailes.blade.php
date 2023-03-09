@extends('frontend.layouts.master')

@section('front_title')
    Blog| Detailes
@endsection

@section('user_content')
    <div class="blog-details-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-12">
                    <div class="blog-details-wrap">
                        <img src="{{ asset('uploads/post') }}/{{ $posts->image }}" alt="" height="300" width="300">
                        <h3>{{ $posts->title }}</h3>
                        <ul class="meta">
                            <li>{{ $posts->created_at->format('d M Y') }}</a></li>
                            </li>
                            <li>{{ $posts->creator_name }}</li>
                        </ul>
                        <p>{{ $posts->description }}</p>
                        <div class="share-wrap">
                            <div class="row">
                                <div class="col-sm-7 ">
                                    <ul class="socil-icon d-flex">
                                        <li>share it on :</li>
                                        <li><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="javascript:void(0);"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="javascript:void(0);"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="javascript:void(0);"><i class="fa fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                                {{-- <div class="col-sm-5 text-right">
                                    <a href="javascript:void(0);">Next Post <i class="fa fa-long-arrow-right"></i></a>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    <div class="comment-form-area">
                        <div class="comment-main">
                            <h3 class="blog-title"><span>(03)</span>Comments:</h3>
                            <ol class="comments">
                                <li class="comment even thread-even depth-1">
                                    <div class="comment-wrap">
                                        <div class="comment-theme">
                                            <div class="comment-image">
                                                <img src="assets/images/comment/1.png" alt="Jhon">
                                            </div>
                                        </div>
                                        @foreach ($comments as $comment)


                                        <div class="comment-main-area">
                                            <div class="comment-wrapper">
                                                <div class="sewl-comments-meta">

                                                    @if ($comment->user_id === $users->id)

                                                    <h4>{{ $users->name }} </h4>
                                                    @endif


                                                    <span>{{ $comment->created_at->format('d M Y') }}</span>
                                                </div>
                                                <div class="comment-area">
                                                    <p>{{ $comment->comment_des }}</p>
                                                </div>
                                            </div>
                                        </div>

                                        @endforeach
                                    </div>

                                </li>
                            </ol>
                        </div>
                        <div id="respond" class="sewl-comment-form comment-respond form-style">
                            <h3 id="reply-title" class="blog-title">Leave a <span>comment</span></h3>
                            <form novalidate="" method="post" id="commentform" class="comment-form" action="{{ route('detailes.store') }}">
                                @csrf
                                    <div class="col-12">
                                        <div class="sewl-form-textarea no-padding-right">
                                            <textarea name="comment_des" tabindex="4" rows="3" cols="30"
                                                placeholder="Write Your Comments..."></textarea>
                                        </div>
                                    </div>
                                    <input type="text" name="user_id" hidden value="{{ Auth::user()->id }}" id="">
                                    <input type="text" name="post_id" value="{{ $posts->id }}" hidden id="">
                                    <div class="col-12">
                                        <div class="form-submit">
                                            <input name="submit" id="submit" value="Send" type="submit">


                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- blog-details-area end -->
@endsection
