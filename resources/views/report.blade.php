@extends('layout')

@section('content')
  <div class="title_page"><h1 class="reptitle">Отчеты</h1></div>

   @foreach($posts as $post)
                <article class="post">
                    <div class="post-thumb">
                        
                    </div>
                    <div class="post-content">
                        <header class="entry-header text-center text-uppercase">
                       
                            <h1 class="entry-title"><a href="{{route('post.show', $post->slug)}}">{{$post->title}}</a></h1>


                        </header>
                        <a href="{{route('post.show', $post->slug)}}"><img src="{{$post->getImage()}}" alt=""></a>

                        <a href="{{route('post.show', $post->slug)}}" class="post-thumb-overlay text-center">
                            <div class="text-uppercase text-center">View Post</div>
                        </a>
                        <div class="entry-content"><label><h3>Описание</h3></label>
                            {!!$post->description!!}

                            <div class="btn-continue-reading text-center text-uppercase">
                                <a href="{{route('post.show', $post->slug)}}" class="more-link">Продолжить чтение</a>
                            </div>
                        </div>
                        <div class="social-share">
                            <span class="social-share-title pull-left text-capitalize">By <a href="#">{{$post->author->name}}</a> On {{$post->getDate()}}</span>
                           
                        </div>
                    </div>
                </article>
                @endforeach

                {{$posts->links()}}
            </div>
            @include('pages.footer')
@endsection