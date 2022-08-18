@extends('layouts.main')
@section('isi')
<section class="page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="content">
					<h1 class="page-name">Post Categories</h1>
					<ol class="breadcrumb">
						<li><a href="index.html">Home</a></li>
						<li class="active">blog</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
</section>
<div class="page-wrapper">
	<div class="container">
		<div class="row">
        <div class="col-md-12">
@foreach ($categories as $kategori)
            <div class="post">
                <div class="post-media post-thumb">
                    <a href="/categories/{{ $kategori->slug }}">
                        <img src="assets/images/blog/blog-post-2.jpg" alt="">
                    </a>
                </div>
                <h2 class="post-title"><a href="/categories/{{ $kategori->slug }}">{{$kategori->name }}</a></h2>
            </div>
@endforeach
            <div class="post">
                <div class="post-media post-media-audio">
                    <iframe src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/278861165&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true" class="DRAGDIS_iframe"></iframe>
                </div>
                <h2 class="post-title"><a href="blog-single.html">Standard Audio Post</a></h2>
                <div class="post-meta">
                    <ul>
                        <li>
                            <i class="tf-ion-ios-calendar"></i> 20, MAR 2017
                        </li>
                        <li>
                            <i class="tf-ion-android-person"></i> POSTED BY ADMIN
                        </li>
                        <li>
                            <a href="#!"><i class="tf-ion-ios-pricetags"></i> LIFESTYLE</a>,<a href="#!"> TRAVEL</a>, <a href="#!">FASHION</a>
                        </li>
                        <li>
                            <a href="#!"><i class="tf-ion-chatbubbles"></i> 4 COMMENTS</a>
                        </li>
                    </ul>
                </div>
                <div class="post-content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit vitae placeat ad architecto nostrum asperiores vel aperiam, veniam eum nulla. Maxime cum magnam, adipisci architecto quibusdam cumque veniam fugiat quae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio vitae ab doloremque accusamus sit, eos dolorum officiis a perspiciatis aliquid. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, facere</p>
                    <a href="#" class="btn btn-main">Continue Reading</a>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>



@endsection