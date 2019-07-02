@extends('layouts.page')

@section('content')
@include('layouts.header.bottom', [
    'background' => image('Blog Background'),
    'headline' => __('Blog'),
    'title' => __('All Articles')
])
<!--Blog Area Start-->
<div class="blog-page area-padding">
  <div class="container">
    <div class="row">
      <div class="blog-grid">
        <!-- Start single blog -->
        <div class="col-md-8 col-sm-8 col-xs-12">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="single-blog">
                <div class="blog-image">
                  <a class="image-scale" href="#">
                    <img src="img/blog/1.jpg" alt="">
                  </a>
                </div>
                <div class="blog-content">
                  <div class="blog-title">
                    <div class="blog-meta">
                      <span class="date-type">
                        20 june, 2017
                      </span>
                      <span class="comments-type">
                        <i class="fa fa-comment-o"></i>
                        13
                      </span>
                    </div>
                    <a href="#">
                      <h4>Majority have suffered alteration in some form</h4>
                    </a>
                  </div>
                  <div class="blog-text">
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                      alteration in some form, by injected humour, or randomised words which don't look even slightly
                      believable.</p>
                    <a class="blog-btn" href="#">Read more</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- End single blog -->
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="single-blog">
                <div class="blog-image">
                  <a class="image-scale" href="#">
                    <img src="img/blog/2.jpg" alt="">
                  </a>
                </div>
                <div class="blog-content">
                  <div class="blog-title">
                    <div class="blog-meta">
                      <span class="date-type">
                        20 june, 2017
                      </span>
                      <span class="comments-type">
                        <i class="fa fa-comment-o"></i>
                        13
                      </span>
                    </div>
                    <a href="#">
                      <h4>There are many variations of passages</h4>
                    </a>
                  </div>
                  <div class="blog-text">
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                      alteration in some form, by injected humour, or randomised words which don't look even slightly
                      believable.</p>
                    <a class="blog-btn" href="#">Read more</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- End single blog -->
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="single-blog">
                <div class="blog-image">
                  <a class="image-scale" href="#">
                    <img src="img/blog/3.jpg" alt="">
                  </a>
                </div>
                <div class="blog-content">
                  <div class="blog-title">
                    <div class="blog-meta">
                      <span class="date-type">
                        20 june, 2017
                      </span>
                      <span class="comments-type">
                        <i class="fa fa-comment-o"></i>
                        13
                      </span>
                    </div>
                    <a href="#">
                      <h4>which don't look even slightly believable.</h4>
                    </a>
                  </div>
                  <div class="blog-text">
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                      alteration in some form, by injected humour, or randomised words which don't look even slightly
                      believable.</p>
                    <a class="blog-btn" href="#">Read more</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- End single blog -->
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="single-blog">
                <div class="blog-image">
                  <a class="image-scale" href="#">
                    <img src="img/blog/4.jpg" alt="">
                  </a>
                </div>
                <div class="blog-content">
                  <div class="blog-title">
                    <div class="blog-meta">
                      <span class="date-type">
                        20 june, 2017
                      </span>
                      <span class="comments-type">
                        <i class="fa fa-comment-o"></i>
                        13
                      </span>
                    </div>
                    <a href="#">
                      <h4>Business manegment</h4>
                    </a>
                  </div>
                  <div class="blog-text">
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                      alteration in some form, by injected humour, or randomised words which don't look even slightly
                      believable.</p>
                    <a class="blog-btn" href="#">Read more</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- End single blog -->
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="blog-pagination">
                <ul class="pagination">
                  <li><a href="#">&lt;</a></li>
                  <li class="active"><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">&gt;</a></li>
                </ul>
              </div>
            </div>
          </div>
          <!-- End row -->
        </div>
        <!-- End main column -->
        <div class="col-md-4 col-sm-4 col-xs-12">
          <div class="left-head-blog">
            <div class="left-blog-page">
              <!-- search option start -->
              <form action="#">
                <div class="blog-search-option">
                  <input type="text" placeholder="Search...">
                  <button class="button" type="submit">
                    <i class="fa fa-search"></i>
                  </button>
                </div>
              </form>
              <!-- search option end -->
            </div>
            <div class="left-blog-page">
              <!-- recent start -->
              <div class="left-blog">
                <h4>recent post</h4>
                <div class="recent-post">
                  <!-- start single post -->
                  <div class="recent-single-post">
                    <div class="post-img">
                      <a href="#">
                        <img src="img/blog/1.jpg" alt="">
                      </a>
                    </div>
                    <div class="pst-content">
                      <p><a href="#">There are many variations of passages of Lorem.</a></p>
                    </div>
                  </div>
                  <!-- End single post -->
                  <!-- start single post -->
                  <div class="recent-single-post">
                    <div class="post-img">
                      <a href="#">
                        <img src="img/blog/2.jpg" alt="">
                      </a>
                    </div>
                    <div class="pst-content">
                      <p><a href="#">There are many variations of passages of Lorem.</a></p>
                    </div>
                  </div>
                  <!-- End single post -->
                  <!-- start single post -->
                  <div class="recent-single-post">
                    <div class="post-img">
                      <a href="#">
                        <img src="img/blog/3.jpg" alt="">
                      </a>
                    </div>
                    <div class="pst-content">
                      <p><a href="#">There are many variations of passages of Lorem.</a></p>
                    </div>
                  </div>
                  <!-- End single post -->
                  <!-- start single post -->
                  <div class="recent-single-post">
                    <div class="post-img">
                      <a href="#">
                        <img src="img/blog/4.jpg" alt="">
                      </a>
                    </div>
                    <div class="pst-content">
                      <p><a href="#">There are many variations of passages of Lorem.</a></p>
                    </div>
                  </div>
                  <!-- End single post -->
                </div>
              </div>
              <!-- recent end -->
            </div>
            <div class="left-blog-page">
              <div class="left-blog">
                <h4>categories</h4>
                <ul>
                  <li>
                    <a href="#">Construction</a>
                  </li>
                  <li>
                    <a href="#">Appertment</a>
                  </li>
                  <li>
                    <a href="#">Workshop</a>
                  </li>
                  <li>
                    <a href="#">Oil & Gas Feilds</a>
                  </li>
                  <li>
                    <a href="#">Roads & Highway</a>
                  </li>
                  <li>
                    <a href="#">Industry</a>
                  </li>
                  <li>
                    <a href="#">Power Station</a>
                  </li>
                  <li>
                    <a href="#">Reconstruction Services</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="left-blog-page">
              <div class="left-blog">
                <h4>archive</h4>
                <ul>
                  <li>
                    <a href="#">10 Dec 2017</a>
                  </li>
                  <li>
                    <a href="#">12 Dec 2017</a>
                  </li>
                  <li>
                    <a href="#">13 Nov 2017</a>
                  </li>
                  <li>
                    <a href="#">20 Nov 2017</a>
                  </li>
                  <li>
                    <a href="#">09 Fabruary 2017</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="left-blog-page">
              <div class="left-tags blog-tags">
                <div class="popular-tag left-side-tags left-blog">
                  <h4>popular tags</h4>
                  <ul>
                    <li>
                      <a href="#">Construction</a>
                    </li>
                    <li>
                      <a href="#">Workshop</a>
                    </li>
                    <li>
                      <a href="#">Power</a>
                    </li>
                    <li>
                      <a href="#">Gas Feilds</a>
                    </li>
                    <li>
                      <a href="#">Industry</a>
                    </li>
                    <li>
                      <a href="#">Highway</a>
                    </li>
                    <li>
                      <a href="#">Reconstruction</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End left sidebar -->
      </div>
    </div>
    <!-- End row -->
  </div>
</div>
@stop
