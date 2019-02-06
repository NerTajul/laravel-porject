@extends('layout.layout')

@section('container')
    <!-- Main Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="post-preview">
              <h2 class="post-title">
                {{ $postdetails->title }}
              </h2>

              <p class="post-meta">Posted by
                <a href="#">{{ $postdetails->category }}</a>
                on January 24, 2019
              </p>

              <p class="post-subtitle">
                {{ $postdetails->description }}
              </p>

          </div>

        </div>
      </div>
    </div>

    <hr>

@endsection