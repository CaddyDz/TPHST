@extends('layouts.page')

@section('content')

@include('layouts.header.bottom', [
    'background' => $article->images('background'),
    'headline' => __('Article'),
    'title' => $article->title
])

<div class="page-area">
    <div class="breadcumb-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="breadcrumb text-center">
                    <div class="section-headline white-head text-center">
                        <h3>Blog Details</h3>
                    </div>
                    <ul>
                        <li class="home-bread">Home</li>
                        <li>Blog Details</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END Header -->
<!--Blog Area Start-->
<div class="blog-page area-padding">
    <div class="container">
        <div class="row">
            <div class=" blog-page-details">
                <!-- Start single blog -->
                <div class="col-md-8 col-sm-8 col-xs-12">
                    <!-- single-blog start -->
                    <article class="blog-post-wrapper">
                        <div class="blog-banner">
                            <a href="#" class="blog-images">
                                <img src="img/blog/1.jpg" alt="">
                            </a>
                            <div class="blog-content">
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
                                    <h4>The standard chunk of Lorem Ipsum used since</h4>
                                </a>
                                <p>Consultexperts are slowly gaining immense recognition and are growing phenomenally
                                    with more and more
                                    people trading with this digital currency. The universal acceptance of Consultation
                                    has given a
                                    tremendous opportunity for merchants to do crossborder transactions instantly and at
                                    reduced
                                    cost.Consultations are slowly gaining immense recognition and are growing
                                    phenomenally with more and
                                    more people trading with this digital currency. The universal acceptance of
                                    Consultation has given a
                                    tremendous opportunity for merchants to do crossborder transactions instantly and at
                                    reduced cost.</p>
                                <blockquote>
                                    <p>Consultations are slowly gaining immense recognition and are growing phenomenally
                                        with more and
                                        more people trading with this digital currency. The universal acceptance of
                                        Consultation has given a
                                        tremendous opportunity for merchants to do crossborder transactions instantly
                                        and at reduced cost.
                                    </p>
                                </blockquote>
                                <p>Consultations are slowly gaining immense recognition and are growing phenomenally
                                    with more and more
                                    people trading with this digital currency. The universal acceptance of Consultation
                                    has given a
                                    tremendous opportunity for merchants to do crossborder transactions instantly and at
                                    reduced
                                    cost.Consultations are slowly gaining immense recognition and are growing
                                    phenomenally with more and
                                    more people trading with this digital currency. The universal acceptance of
                                    Consultation has given a
                                    tremendous opportunity for merchants to do crossborder transactions instantly and at
                                    reduced cost.</p>
                            </div>
                        </div>
                    </article>
                    <div class="clear"></div>
                    <div class="single-post-comments">
                        <div class="comments-area">
                            <div class="comments-heading">
                                <h3>6 comments</h3>
                            </div>
                            <div class="comments-list">
                                <ul>
                                    <li class="threaded-comments">
                                        <div class="comments-details">
                                            <div class="comments-list-img">
                                                <img src="img/blog/b02.jpg" alt="post-author">
                                            </div>
                                            <div class="comments-content-wrap">
                                                <span>
                                                    <b><a href="#">demo</a></b>
                                                    Post author
                                                    <span class="post-time">June 6, 2017</span>
                                                    <a href="#">Reply</a>
                                                </span>
                                                <p>Quisque semper nunc vitae erat pellentesque, ac placerat arcu
                                                    consectetur</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="comments-details">
                                            <div class="comments-list-img">
                                                <img src="img/blog/b02.jpg" alt="post-author">
                                            </div>
                                            <div class="comments-content-wrap">
                                                <span>
                                                    <b><a href="#">admin</a></b>
                                                    Post author
                                                    <span class="post-time">June 6, 2017</span>
                                                    <a href="#">Reply</a>
                                                </span>
                                                <p>Quisque orci nibh, porta vitae sagittis sit amet, vehicula vel
                                                    mauris. Aenean at justo dolor.
                                                    Fusce ac sapien bibendum, scelerisque libero nec</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="threaded-comments">
                                        <div class="comments-details">
                                            <div class="comments-list-img">
                                                <img src="img/blog/b02.jpg" alt="post-author">
                                            </div>
                                            <div class="comments-content-wrap">
                                                <span>
                                                    <b><a href="#">demo</a></b>
                                                    Post author
                                                    <span class="post-time">June 11, 2017</span>
                                                    <a href="#">Reply</a>
                                                </span>
                                                <p>Quisque semper nunc vitae erat pellentesque, ac placerat arcu
                                                    consectetur</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="comments-details">
                                            <div class="comments-list-img">
                                                <img src="img/blog/b02.jpg" alt="post-author">
                                            </div>
                                            <div class="comments-content-wrap">
                                                <span>
                                                    <b><a href="#">admin</a></b>
                                                    Post author
                                                    <span class="post-time">June 6, 2017</span>
                                                    <a href="#">Reply</a>
                                                </span>
                                                <p>Quisque orci nibh, porta vitae sagittis sit amet, vehicula vel
                                                    mauris. Aenean at justo dolor.
                                                    Fusce ac sapien bibendum, scelerisque libero nec</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="comment-respond">
                            <h3 class="comment-reply-title">Leave a Reply </h3>
                            <span class="email-notes">Your email address will not be published. Required fields are
                                marked *</span>
                            <form action="#">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <p>Name *</p>
                                        <input type="text" />
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <p>Email *</p>
                                        <input type="email" />
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <p>Website</p>
                                        <input type="text" />
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 comment-form-comment">
                                        <p>Website</p>
                                        <textarea id="message-box" cols="30" rows="10"></textarea>
                                        <input class="add-btn contact-btn" type="submit" value="Post Comment" />
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- single-blog end -->
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
<!--End of Blog Area-->
@stop
