@extends('layouts.main', ['activePage' => 'posts', 'titlePage' => 'Shop details'])
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
            <h4 class="card-title">Game</h4>
            <p class="card-category">Let´s shop: {{ $post->title }}</p>
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
                          ${{ $post->price }} <br>
                          {{ $post->description }} <br>
                          {{ $post->created_at }} 
                        </p>
                      </div>
                    </p>

                    <a href="http://127.0.0.1:8000/home" class="btn btn-sm btn-success mr-3"> Back </a>
                     {{-- @can('messages_destroy') --}}
                     <form action="{{ route('messages.destroy', $post->id) }}" method="post"
                       onsubmit="return confirm('Sure?')" style="display: inline-block;">
                       @csrf
                       @method('DELETE')
                       <button type="submit" rel="tooltip">
                         <a class="btn btn-twitter">Shop</a>
                       </button>
                     </form>
                     {{-- @endcan  --}}

                  </div>
                  {{-- <div class="card-footer">
                  
                  </div> --}}
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