@extends('layouts.app')

@section('content')

@if(count($errors) > 0)
 <ul class="list-group">
   @foreach($errors->all() as $error)
   <li class="list-group-item text-danger">
     {{$error}}
   </li>
   @endforeach
 </ul>
 @endif


<div class="panel panel-default">
  <div class="panel-heading">
     Edit post: {{$post -> title}}
  </div>
 <div class="panel-body">
   <form class="" action="{{route('post.update', ['id' => $post->id])}}" method="post" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title"class="form-control" value="{{$post->title}}">
              </div>
              <div class="form-group">
                <label for="feature">featured image</label>
                <input type="file" name="feature" class="form-control" value="">
              </div>
              <div class="form-group">
<label for="category">Select a category</label>
<select class="form-control" name="category_id" id="category">
       @foreach($categories as $category)
       <option value="{{ $category->id }}"
        @if($post->category->id == $category->id)
            selected
            @endif
         >{{ $category->name }}</option>
       @endforeach
</select>
              </div>
              <label for="tags">Select Tags</label>
              <div class="checkbox">
                @foreach($tags as $tag)
              <label for="">  <input type="checkbox" name="tags[]" value="{{$tag->id}}"
@foreach($post->tags as $t)
  @if($tag->id == $t->id)
  checked
  @endif
  @endforeach


                >{{$tag->tag}}</label>
              @endforeach
              </div>
              <div class="form-group">
                <label for="content">Content</label>
                <textarea name="content" id="content" rows="5" cols="5" class="form-control">{{$post->content}}</textarea>
              </div>
              <div class="form-group">
                <div class="text-center">
                  <button class="btn btn-success" type="submit" name="button">
                    Update Post
                  </button>
                </div>
              </div>
   </form>
 </div>
</div>

@stop
