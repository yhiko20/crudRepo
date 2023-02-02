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
        <form action="{{ route('posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="card ">
            <!--Header-->
            <div class="card-header card-header-primary">
              <h4 class="card-title">Post</h4>
              <p class="card-category">Input data of the new post</p>
            </div>
            <!--End header-->
            <!--Body-->
            
              <div class="card-body">
                @csrf
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
                      value="{{ old('title', $post->description) }}" autocomplete="off" autofocus>
                  </div>
                </div>
  
                <div class="row">
                  <label for="price" class="col-sm-2 col-form-label">Price</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control" name="price" placeholder="Input the price"
                      value="{{ old('title', $post->price) }}" autocomplete="off" autofocus>
                  </div>
                </div>



              
                @csrf
                
                    <!-- Para ver la imagen seleccionada, de lo contrario no se -->
                    <div class="grid grid-cols-1 mt-5 mx-7">
                      <img src="/image/{{ $post->image }}" width="200px" id="imagenSeleccionada">
                    </div>       
    
                    <div class="grid grid-cols-1 mt-5 mx-7">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-dark font-semibold mb-1">Upload Image</label>
                        <div class='flex items-center justify-center w-full'>
                            <label class='flex flex-col border-4 border-dashed w-full h-32 hover:bg-gray-100 hover:border-purple-300 group'>
                                <div class='flex flex-col items-center justify-center pt-7'>
                                <svg class="w-10 h-10 text-purple-400 group-hover:text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                <p class='text-sm text-gray-200 group-hover:text-purple-600 pt-1 tracking-wider'>Seleccione la imagen</p>
                                </div>
                            <input name="image" id="image" type='file' class="hidden" />
                            </label>
                        </div>
                    </div>
    
                    <div class='flex items-center justify-center  md:gap-8 gap-4 pt-5 pb-5'>
                        <a href="{{ route('posts.index') }}" class="btn btn-success">Back</a>
                      <!--  <button type="submit" class='w-auto bg-purple-500 hover:bg-purple-700 rounded-lg shadow-xl font-medium text-white px-4 py-2'>Guardar</button> -->
                      <button type="submit" class="btn btn-primary">Save</button>
                    </div>

                               


            </div>
          

            
            <!--End body-->

            <!--Footer-->
            <div class="card-footer ml-auto mr-auto">
              <!--<button type="submit" class="btn btn-primary">Save</button>-->
            </div>
            <!--End footer-->
          </div>
        </form>

        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> 
                    <script>   
                        $(document).ready(function (e) {   
                            $('#image').change(function(){            
                                let reader = new FileReader();
                                reader.onload = (e) => { 
                                    $('#imagenSeleccionada').attr('src', e.target.result); 
                                }
                                reader.readAsDataURL(this.files[0]); 
                            });
                        });
        </script>

      </div>
    </div>
  </div>
</div>
@endsection