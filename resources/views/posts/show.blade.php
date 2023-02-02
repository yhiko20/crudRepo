@extends('layouts.main', ['activePage' => 'posts', 'titlePage' => 'Post details'])
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
        <div class="card">
          <!--Header-->
          <div class="card-header card-header-primary">
            <h4 class="card-title">Posts</h4>
            <p class="card-category">Detailed view of: {{ $post->title }}</p>
          </div>
          <!--End header-->
          <!--Body-->
          <div class="card-body">
            <div class="row">
              
              <div class="col-md-12">
                <div class="card" style="width:100%;">
                  <div class="card-body">
                    <p class="card-text">
                      <div class="author">
                        <a href="#" class="d-flex">
                         <img src="/image/{{$post->image}}" class="card-img-top" alt="" style="width:10rem;"">  
                        </a>
                        <p class="description">
                          {{ $post->title }} <br>
                          {{ $post->price }} <br>
                          {{ $post->description }} <br>
                          {{ $post->created_at }} 
                        </p>
                      </div>
                    </p>
                    {{-- <div class="card-description">
                      {{ $post->description }}
                    </div> --}}
                  </div>
                  <div class="card-footer">
                    <div class="button-container">
                     <a href="{{ route('posts.index') }}" class="btn btn-sm btn-success mr-3"> Back </a>
                     <button type="submit" class="btn btn-sm btn-primary">Edit</button>
                    </div>
                  </div>
                </div>
              </div>

            </div>
            <!--end row-->
          </div>
          <!--End card body-->
        </div>
        <!--End card-->

        

           
         </div>
    </div>
  </div>
</div>
@endsection