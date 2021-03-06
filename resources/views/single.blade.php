@extends('layouts.app')

@section('content')
<div class="page-wrapper">
   <section class="pb-5">
      <div class="container">
         <div class="row pt-5">
            <!-- Content-->
            <div class="col-xl-8">
               <!-- Post-->
               <article class="post">
                  <div class="post-header">
                     <h2 class="post-title"><a href="#">{{ $post->title}}</a></h2>
                     <ul class="post-meta">
                        <li><i class="mdi mdi-calendar"></i> {{ date('d-m-Y', strtotime($post->create_at)) }}</li>
                        <li><i class="mdi mdi-tag-text-outline"></i> <a href="#">{{ $post->category->name }}</a> </li>
                        <!-- <li><i class="mdi mdi-comment-multiple-outline"></i> <a href="#">3 Comments</a></li> -->
                     </ul>
                  </div>
                  <div class="post-preview">
                     <a href="blog-single.html"><img src="images/blog/blog-1.jpg" alt="" class="img-fluid rounded"></a>
                  </div>
                  <div class="blog-detail-description">
                    <div>
                      <iframe src="{{ url('content/slug') }}"></iframe>
                    </div>
                     <div class="mt-5">
                        <h6>Tags:</h6>
                        <div class="tagcloud">
                           <a href="#">logo</a>
                           <a href="#">business</a>
                           <a href="#">agency</a>
                        </div>
                     </div>
                     <div class="media post-author-box">
                        <img class="d-flex mr-3 rounded-circle" src="images/user/user-5.png" alt="Generic placeholder image">
                        <div class="media-body">
                           <h4 class="media-heading"><a href="#">Michelle Durant</a></h4>
                           <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim.</p>
                           <ul class="socials list-unstyled mb-0 mt-3">
                              <li><a href="http://facebook.com/"><i class="mdi mdi-facebook"></i></a></li>
                              <li><a href="http://twitter.com/"><i class="mdi mdi-twitter"></i></a></li>
                              <li><a href="http://instagram.com/"><i class="mdi mdi-instagram"></i></a></li>
                              <li><a href="http://pinterest.com/"><i class="mdi mdi-pinterest"></i></a></li>
                           </ul>
                        </div>
                     </div>
                     <div class="mt-5 text-center">
                        <h5 class="page-title-alt"><span>You Might Also Like</span></h5>
                     </div>
                     <div class="row">
                        <div class="col-sm-4">
                           <article class="related-post">
                              <div class="post-preview">
                                 <a href="blog-single.html"><img src="images/blog/blog-2.jpg" alt="" class="img-fluid rounded"></a>
                              </div>
                              <div class="post-header">
                                 <h6><a href="single-post2.html" title="">15 Best Healthy and Easy Salad Recipes</a></h6>
                                 <p class="post-date">August 12, 2019</p>
                              </div>
                           </article>
                        </div>
                        <div class="col-sm-4">
                           <article class="related-post">
                              <div class="post-preview">
                                 <a href="blog-single.html"><img src="images/blog/blog-3.jpg" alt="" class="img-fluid rounded"></a>
                              </div>
                              <div class="post-header">
                                 <h6><a href="single-post2.html" title="">The planet doesn’t need saving. We do.</a></h6>
                                 <p class="post-date">August 17, 2019</p>
                              </div>
                           </article>
                        </div>
                        <div class="col-sm-4">
                           <article class="related-post">
                              <div class="post-preview">
                                 <a href="blog-single.html"><img src="images/blog/blog-4.jpg" alt="" class="img-fluid rounded"></a>
                              </div>
                              <div class="post-header">
                                 <h6><a href="single-post2.html" title="">Modern City With Amazing Dark Blue Sea</a></h6>
                                 <p class="post-date">August 20, 2019</p>
                              </div>
                           </article>
                        </div>
                     </div>
                     <div class="mt-5">
                        <h5 class="page-title-alt"><span>Comments</span></h5>
                     </div>
                     <ul class="media-list list-unstyled">
                        <li class="media">
                           <img class="d-flex mr-3 rounded-circle" src="images/user/user-5.png" alt="Generic placeholder image">
                           <div class="media-body">
                              <a href="#" class="text-custom reply-btn"><i class="mdi mdi-reply"></i>&nbsp; Reply</a>
                              <h4 class="media-heading"><a href="#">Michelle Durant</a></h4>
                              <p class="text-muted post-date">Jun 23, 2019, 11:45 am</p>
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim.</p>
                           </div>
                        </li>
                        <li class="media">
                           <img class="d-flex mr-3 rounded-circle" src="images/user/user-2.png" alt="Generic placeholder image">
                           <div class="media-body">
                              <a href="#" class="text-custom reply-btn"><i class="mdi mdi-reply"></i>&nbsp; Reply</a>
                              <h4 class="media-heading"><a href="#">Ronda Otoole</a></h4>
                              <p class="text-muted post-date">Jun 23, 2019, 11:45 am</p>
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim.</p>
                              <div class="media">
                                 <img class="d-flex mr-3 rounded-circle" src="images/user/user-3.png" alt="Generic placeholder image">
                                 <div class="media-body">
                                    <a href="#" class="text-custom reply-btn"><i class="mdi mdi-reply"></i>&nbsp; Reply</a>
                                    <h4 class="media-heading"><a href="#">James Whitley</a></h4>
                                    <p class="text-muted post-date">Jun 23, 2019, 11:45 am</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim.</p>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li class="media">
                           <img class="d-flex mr-3 rounded-circle" src="images/user/user-4.png" alt="Generic placeholder image">
                           <div class="media-body">
                              <a href="#" class="text-custom reply-btn"><i class="mdi mdi-reply"></i>&nbsp; Reply</a>
                              <h4 class="media-heading"><a href="#">Kimberly Chretien</a></h4>
                              <p class="text-muted post-date">Jun 23, 2019, 11:45 am</p>
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim.</p>
                           </div>
                        </li>
                        <li class="media">
                           <img class="d-flex mr-3 rounded-circle" src="images/user/user-6.png" alt="Generic placeholder image">
                           <div class="media-body">
                              <a href="#" class="text-custom reply-btn"><i class="mdi mdi-reply"></i>&nbsp; Reply</a>
                              <h4 class="media-heading"><a href="#">Michelle Durant</a></h4>
                              <p class="text-muted post-date">Jun 23, 2019, 11:45 am</p>
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim.</p>
                           </div>
                        </li>
                     </ul>
                     <div class="mt-5">
                        <h5 class="page-title-alt"><span>Leave a reply</span></h5>
                     </div>
                     <form action="#" method="post" class="mt-4">
                        <div class="row">
                           <div class="col-sm-6">
                              <div class="form-group">
                                 <input id="author" class="form-control" placeholder="Name*" name="author" type="text" required="">
                              </div>
                           </div>
                           <div class="col-sm-6">
                              <div class="form-group">
                                 <input id="email" class="form-control" placeholder="Email*" name="email" type="text" required="">
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-sm-12">
                              <div class="form-group">
                                 <input id="subject" class="form-control" placeholder="Website" name="subject" type="text">
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-sm-12">
                              <div class="form-group">
                                 <textarea id="comment" class="form-control" rows="5" placeholder="Your Message*" name="comment" required=""></textarea>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-sm-12">
                              <div class="form-group">
                                 <button name="submit" type="submit" id="submit" class="btn btn-dark">Post Comment</button>
                              </div>
                           </div>
                        </div>
                     </form>
                  </div>
               </article>
               <!-- Post end-->
            </div>
            <!-- Content end-->
            <!-- Sidebar-->
               @include('sidebar')
            <!-- Sidebar end-->
         </div>
      </div>
      <!-- end container -->
   </section>
</div>

            @endsection