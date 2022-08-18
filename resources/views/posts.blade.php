@extends('layouts.main')
@section('isi')
<!-- <div class="row">
    <form action="/posts">
        @if (request('category'))
            <input type="hidden" name="category" value="{{ request('category') }}">
        @endif
        @if (request('author'))
            <input type="hidden" name="author" value="{{ request('author') }}">
        @endif
        <div class="col-md-10">
            <input type="text" class="form-control" name="search" value="{{ request('search') }}" placeholder="Search...">
        </div>
        <div class="col-md-2">
            <button class="btn btn-main"><i class="tf-ion-ios-search-strong"></i> Search</button>
        </div>
    </form>
</div> -->
<section class="page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="content">
					<h1 class="page-name">{{ $title }}</h1>
					<ol class="breadcrumb">
						<li><a href="/">Home</a></li>
						<li class="active">Jobs</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
</section>
<div class="page-wrapper">
	<div class="container">
		<div class="row">
      		<div class="col-md-4">
				<aside class="sidebar">
					<div class="widget widget-subscription">
						<h4 class="widget-title">Find Job ...</h4>
						<form action="/posts">
                        @if (request('category'))
                            <input type="hidden" name="category" value="{{ request('category') }}">
                        @endif
                        @if (request('author'))
                            <input type="hidden" name="author" value="{{ request('author') }}">
                        @endif
						<div class="form-group">
                            <input type="text" class="form-control" name="search" value="{{ request('search') }}" placeholder="Kata Kunci...">
						</div>
						    <button class="btn btn-main"><i class="tf-ion-ios-search-strong"></i> Search</button>
						</form>
					</div>

					<!-- Widget Category -->
					<div class="widget widget-category">
						<h4 class="widget-title">Categories</h4>
						@foreach ($categories as $kategori)   
						<ul class="widget-category-list">
							<li><a href="/posts?category={{ $kategori->slug }}">{{$kategori->name}}</a>
							</li>
						</ul>
						@endforeach
					</div> <!-- End category  -->

				</aside>
      		</div>
            @if ($posts->count())
            <div class="col-md-8">
                <div class="post">
                            @if ($posts[0]->sampul)
                            <div class="post-media post-thumb">
                                <a href="blog-single.html">
                                    <img src="{{ asset('storage/' . $posts[0]->sampul)}}" style="height: 200px;" alt="{{ $posts[0]->category->name }}">
                                </a>
                            </div>
                            @else
                            <div class="post-media post-thumb">
                                <a href="blog-single.html">
                                    <img src="https://source.unsplash.com/1200x600?{{ $posts[0]->category->name }}" alt="">
                                </a>
                            </div>
                            @endif
                            <h2 class="post-title"><a href="/posts/{{ $posts[0]->slug }}">{{$posts[0]->lowongan }}</a></h2>
                            <div class="post-meta">
                                <ul>
                                    <!-- <li>
                                        <i class="tf-ion-ios-calendar"></i> {{$posts[0]->created_at->diffForHumans() }}
                                    </li> -->
                                    <li>
                                        <i class="tf-ion-ios-clock"></i> {{$posts[0]->selesai }}
                                    </li>
                                    <li>
                                        <i class="tf-ion-android-person"></i> <a href="/posts?author={{ $posts[0]->author->username }}">{{$posts[0]->author->name }}</a>
                                    </li>
                                    <li>
                                        <a href="/posts?category={{ $posts[0]->category->slug }}"><i class="tf-ion-social-buffer"></i> {{$posts[0]->category->name}}</a>
                                    </li>
                                    <li>
                                        <i class="tf-ion-university"></i> {{$posts[0]->pendidikan->name_pendidikan}}</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="post-content">
                                <!-- <p>{{$posts[0]->excerpt}}</p> -->
                                <a href="/posts/{{ $posts[0]->slug }}" class="btn btn-main">Detail</a>
                            </div>
                </div>

                @foreach ($posts->skip(1) as $post)    
                    <div class="post">
                        @if ($post->sampul)
                        <div class="post-media post-thumb">
                            <a href="blog-single.html">
                                <img src="{{ asset('storage/' . $post->sampul)}}" style="height: 200px;" alt="{{ $post->category->name }}">
                            </a>
                        </div>
                        @else
                        <div class="post-media post-thumb">
                            <a href="blog-single.html">
                                <img src="https://source.unsplash.com/1200x300?{{ $post->category->name }}" alt="">
                            </a>
                        </div>
                        @endif
                        <h2 class="post-title"><a href="/posts/{{ $post->slug }}">{{$post->lowongan }}</a></h2>
                        <div class="post-meta">
                            <ul>
                                <!-- <li>
                                    <i class="tf-ion-ios-calendar"></i> {{$posts[0]->created_at->diffForHumans() }}
                                </li> -->
                                <li>
                                    <i class="tf-ion-ios-clock"></i> {{$post->selesai }}
                                </li>
                                <li>
                                    <i class="tf-ion-android-person"></i> <a href="/posts?author={{ $post->author->username }}">{{$post->author->name }}</a>
                                </li>
                                <li>
                                    <a href="/posts?category={{ $post->category->slug }}"><i class="tf-ion-social-buffer"></i> {{$post->category->name}}</a>
                                </li>
                                <li>
                                    <i class="tf-ion-university"></i> {{$post->pendidikan->name_pendidikan}}</a>
                                </li>
                            </ul>
                        </div>
                        <div class="post-content">
                            <!-- <p>{{$post->excerpt}}</p> -->
                            <a href="/posts/{{ $post->slug }}" class="btn btn-main">Detail</a>
                        </div>
                    </div>
                @endforeach 
                <div class="text-center">
                    {{$posts->links() }}
                </div>
            @else
                <p class="text-center fs-4">No Post Found.</p>
            @endif
            </div>
        </div>
    </div>
</div>



@endsection