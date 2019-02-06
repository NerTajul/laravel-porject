@extends('layout.layout')

@section('container')
    <!-- Main Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="post-preview">
            <form action="{{ url('insert_category')}}" method="POST">
             {{ csrf_field() }}
                <div class="form-group">
                  <label for="name">Category Name:</label>
                  <input type="text" name="name" class="form-control" id="name" placeholder="">
                </div>
                <div class="form-actions">
               			<button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Submit</button>
               			<a class="d-block text-center mt-2 small" href="{{ URL::to('post')}}">Back</a>
                </div>
            </form>
          </div>
          <hr>
        </div>
      </div>
    </div>

    <hr>

@endsection