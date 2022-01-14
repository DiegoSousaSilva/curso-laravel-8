<h1>Detalhes do Post</h1>

<ul>
    <li><strong>Titulo: </strong>{{$post->title}}</li>
    <li><strong>Conteudo: </strong>{{$post->content}}</li>
</ul>

<form action="{{route('posts.destroy', $post->id)}}" method="post">
    @csrf
    @method('DELETE')
    <button type="submit">Deletar o post {{$post->title}}</button>
</form>
