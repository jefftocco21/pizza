<h1>{{$heading}}</h1>

@foreach($posts as $post)
<h2>
    <a href="/posts/{{$post['id']}}">{{$post['title']}}</a>
</h2>

<p>
    {{$post['desc']}}
</p>
@endforeach
