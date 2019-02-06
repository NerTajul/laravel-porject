@extends('layout.layout')

@section('container')
    <!-- Main Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="post-preview">
            <form action="{{ url('insert_post')}}" method="POST">
             {{ csrf_field() }}
                <div class="form-group">
                  <label for="title">Post Title</label>
                  <input type="text" name="title" class="form-control" id="title" placeholder="">
                </div>
                <div class="form-group">
                  <label for="category">Select Category</label>
                  <select name="category" class="form-control" id="category">
                    @foreach($categpry as $cat)
                    <option value="{{ $cat->name }}">{{ $cat->name }}</option>
                    @endforeach
                  </select>
                  <label><a class="d-block text-center mt-2 small" href="{{ URL::to('category')}}">Add Category</a></label>
                </div>
                <div class="form-group">
                  <label for="Description">Description</label>
                  <textarea name="description" class="form-control" id="Description" rows="3"></textarea>
                </div>
                
                <div class="form-actions">
                <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Submit</button>
                </div>
            </form>
          </div>
          <hr>
        </div>
      </div>
    </div>

    <hr>

@endsection