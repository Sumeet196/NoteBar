 <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">

                <div class="slimscroll-menu" id="remove-scroll">

                    <div class="logo">
                        <a href="index.html"><img src="{{ asset('images/logo.png')}}" alt="" class="" style="height: 44px;"></a>
                        <p class="text-muted">Graduating from the halls of the University Of Western Sydney in late 2011. </p>
                    </div>

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu" id="side-menu">
                            
                            <li>
                                <a href="index.html"><span> Home</span></a>
                            </li>

                           <!--  <li>
                                <a href="javascript: void(0);"><span> Features </span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="standard-post.html">Standard Post</a></li>
                                    <li><a href="video-post.html">Video Post</a></li>
                                    <li><a href="audio-post.html">Audio Post</a></li>
                                    <li><a href="gallery-post.html">Gallery Post</a></li>
                                    <li><a href="quote-post.html">Quote Post</a></li>
                                    <li><a href="link-post.html">Link Post</a></li>
                                    <li><a href="404.html">Error 404</a></li>
                                </ul>
                            </li> -->
                            @foreach($categories as $category)
                                <li>
                                  <a class="nav-link" href="{{ url('category/'.$category->slug )}}"><span>{{ $category->name }}</span></a>
                                </li>
                              @endforeach
                            <!--
                            <li>
                                <a href="javascript: void(0);"><span> Lifestyle </span></a>
                            </li>

                            <li>
                                <a href="javascript: void(0);"><span> Travel </span></a>
                            </li>

                            <li>
                                <a href="javascript: void(0);"><span> Music </span></a>
                            </li>

                            <li>
                                <a href="about.html">About</a>
                            </li> -->

                            <li>
                                <a href="contact.html">Contact</a>
                            </li>

                        </ul>

                        <div class="copyright-box">
                            <p>2019 © Blogezy. </p>
                        </div>

                    </div>
                    <!-- Sidebar -->
                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->