@extends('layouts.app')

@section('content')
            <div class="page-wrapper">
                <section>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="page-title">
                                    <div class="row">
                                        <div class="col-md-9 col-xs-12">
                                            <h2><span>News and Stories</span></h2>

                                            <p class="subtitle text-muted">Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Proin gravida nibh vel velit auctor Aenean sollicitudin, adipisicing elit sed lorem quis bibendum auctor.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="mt-5 pb-5">
                    <div class="container">

                        <div class="row">
                            <!-- Content-->
                            <div class="col-xl-8">

                                <!-- Post-->
                            @foreach($posts as $post)
                                <article class="post">
                                    <div class="post-header">
                                        <h2 class="post-title"><a href="#">{{$post->title}}</a></h2>
                                        <ul class="post-meta">
                                            <li><i class="mdi mdi-calendar"></i>{{ date('d-m-Y', strtotime($post->create_at)) }}</li>
                                            <li><i class="mdi mdi-tag-text-outline"></i> <a href="#">{ $post->category->name }</a> </li>
                                            <li><i class="mdi mdi-comment-multiple-outline"></i> <a href="#">3 Comments</a></li>
                                        </ul>
                                    </div>

                                    <!-- <div class="post-preview">
                                        <a href="#"><img src="images/blog/blog-1.jpg" alt="" class="img-fluid rounded"></a>
                                    </div> -->

                                    <div class="post-content">
                                        <p>{{ $post->excerpt }}</p>
                                    </div>

                                    <div><a href="{{ route('articale',['slug'=> $post->slug])}}" class="btn btn-outline-custom">Read More <i class="mdi mdi-arrow-right"></i></a></div>

                                </article>
                            @endforeach
                                <!-- Post end-->

                                <!-- Post-->
                               <!--  <article class="post">

                                    <div class="post-header">
                                        <h2 class="post-title"><a href="#">Nature valley with cooling environment</a></h2>
                                        <ul class="post-meta">
                                            <li><i class="mdi mdi-calendar"></i> July 07, 2019</li>
                                            <li><i class="mdi mdi-tag-text-outline"></i> <a href="#">Branding</a>, <a href="#">Design</a></li>
                                            <li><i class="mdi mdi-comment-multiple-outline"></i> <a href="#">3 Comments</a></li>
                                        </ul>
                                    </div>

                                    <div class="post-preview">
                                        <a href="#"><img src="images/blog/blog-2.jpg" alt="" class="img-fluid rounded"></a>
                                    </div>

                                    <div class="post-content">
                                        <p>Whether an identity or campaign, we make your brand visible, relevant and effective by placing the digital at the center of its ecosystem, without underestimating the power of traditional media. Whether an identity or campaign, we make your brand visible.</p>
                                    </div>

                                    <div><a href="#" class="btn btn-outline-custom">Read More <i class="mdi mdi-arrow-right"></i></a></div>

                                </article> -->
                                <!-- Post end-->

                                <!-- Post-->
                                
                                <!-- Pagination-->
                                <div class="row">
                                    <div class="col-lg-12">
                                        <ul class="pagination">
                                            <li class="next"><a href="#"><i class="mdi mdi-chevron-left"></i></a></li>
                                            <li class="active"><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#">4</a></li>
                                            <li><a href="#">5</a></li>
                                            <li class="prev"><a href="#"><i class="mdi mdi-chevron-right"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Pagination end-->
                            </div>
                            <!-- Content end-->

                           @include('sidebar')
                        </div>

                    </div>
                    <!-- end container -->
                </section>
            </div>

            @endsection