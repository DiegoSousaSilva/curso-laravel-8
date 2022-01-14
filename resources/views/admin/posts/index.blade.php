<a href="{{route('posts.create')}}">Criar novo post</a>
<h1>Posts</h1>

@foreach ($posts as $post)
    <p>Title: {{$post->title}}</p>
    <p>Content: {{$post->content}}</p>
@endforeach
