<a href="{{route('posts.create')}}">Criar novo post</a>
@if (session('msg'))
    <div>
        {{session('msg')}}
    </div>
@endif
<h1>Posts</h1>

@foreach ($posts as $post)
    <p>Title: {{$post->title}} <a href="{{route('posts.show', $post->id)}}">Ver Detalhes</a></p>
@endforeach
