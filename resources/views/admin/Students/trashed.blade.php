@extends('layouts.app')

@section('content')
<div class="panel panel-default">


<div class="panel-heading">
  Trashed Posts
</div>

<table class="table table-hover">
  <thead>
    <th>
      Image
    </th>
    <th>
      Title
    </th>
    <th>
      Edit
    </th>
    <th>
      Restore
    </th>
    <th>Destroy</th>
  </thead>
  <tbody>
    @if($posts->count() > 0)
    @foreach($posts as $post)
    <tr>
      <td>
        <img src="{{ config('image.base_url') . $post->feature }} " width="100px" height="100px" alt="">
      </td>
      <td>{{$post->title}}</td>
<td> Edit
</td>
<td><a href="{{route('posts.restore', ['id' => $post->id])}}" class="btn btn-success">Restore</a>
</td>
<td>
  <a href="{{route('posts.kill', ['id' => $post->id])}}" class="btn btn-danger">Delete</a>
</td>
    </tr>
    @endforeach
    @else
    <tr>
      <th colspan="5" class="text-center">No Trashed Posts</th>
    </tr>
@endif
  </tbody>
</table>
</div>




@stop
