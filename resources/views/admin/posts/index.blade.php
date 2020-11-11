@extends("layouts.app")

@section('content')
    <div class="container">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Title</th>
            <th scope="col">Slug</th>
            <th scope="col">Post</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
            <tr>
                <td>{{$post->title}}</td>
                <td>{{$post->slug}}</td>
                <td>{{$post->content}}</td>
                <td><ul>
                    <li><a href="{{route('admin.posts.show', $post->slug)}}">View</a></li>
                    <li><a href="#">Edit</a></li>
                    <li><a href="#">Delete</a></li>
                </td></ul>
            </tr>                
            @endforeach
        </tbody>
      </table>
</div>
@endsection