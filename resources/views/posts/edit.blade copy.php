@extends('layouts.main', ['activePage' => 'posts', 'titlePage' => 'Edit Post'])
@section('content')
<div class="content">

<style>
    body{  
    background: -webkit-linear-gradient(to right, #ec2F4B, #009FFF);
    background: linear-gradient(to right, #ec2F4B, #009FFF);
    }    
  </style> 

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <form method="POST" action="{{ route('posts.update', $post->id) }}" class="form-horizontal">
          @csrf
          @method('PUT')
          <div class="card">
            <!--Header-->
            <div class="card-header card-header-primary">
              <h4 class="card-title">Edit information of: {{ old('title', $post->title) }} </h4>
              <p class="card-category">You can change the name, description, price and a image</p>
            </div>
            <!--End header-->
            <!--Body-->
            <div class="card-body">
              <div class="row">
                <label for="title" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" name="title" placeholder="Input the name"
                    value="{{ old('title', $post->title) }}" autocomplete="off" autofocus>
                </div>
              </div>

              <div class="row">
                <label for="description" class="col-sm-2 col-form-label">Description</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" name="description" placeholder="Input the description"
                    value="{{ old('title', $post->title) }}" autocomplete="off" autofocus>
                </div>
              </div>

              <div class="row">
                <label for="price" class="col-sm-2 col-form-label">Price</label>
                <div class="col-sm-7">
                  <input type="text" class="form-control" name="price" placeholder="Input the price"
                    value="{{ old('title', $post->title) }}" autocomplete="off" autofocus>
                </div>
              </div>

            </div>
            <!--End body-->
            <!--Footer-->
            <div class="card-footer ml-auto mr-auto">
              <button type="submit" class="btn btn-primary">Save</button>
            </div>
          </div>
          <!--End footer-->
        </form>
      </div>
    </div>
  </div>
</div>
@endsection