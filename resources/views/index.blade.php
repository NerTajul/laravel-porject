@extends('layout.layout')

@section('container')
    <!-- Main Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">

          @foreach($index as $c_post)
          <div class="post-preview">
            <a href="{{ URL::to('post_details/'.$c_post->id ) }}">
              <h2 class="post-title">
                {{ $c_post->title }}
              </h2>
              <p class="post-subtitle">
                {{ str_limit($c_post->description,100) }}
              </p>
            </a>
            <p class="post-meta">Posted by
              <a href="#">{{ $c_post->category }}</a>
              on September 24, 2018 |

              <a href="{{ URL::to('edit-post/'.$c_post->id)}}">Edit</a> |
              <a href="{{ URL::to('delete-post/'.$c_post->id ) }}" id="delete">Delete</a>

          </p>
              
          </div>
          <hr>
          @endforeach
        </div>
      </div>
    </div>

    <hr>

@endsection