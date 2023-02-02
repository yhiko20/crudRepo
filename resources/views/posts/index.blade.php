@extends('layouts.main', ['activePage' => 'posts', 'titlePage' => 'Posts'])
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
          <div class="card-header card-header-primary">
            <h4 class="card-title">Posts</h4>
            <p class="card-category">List of posts registered in the database</p>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-12 text-right">
                @can('post_create')
                <a href="{{ route('posts.create') }}" class="btn btn-sm btn-facebook">Add post</a>
                @endcan
              </div>
            </div>
            <div class="table-responsive">
              <table class="table ">
                <thead class="text-primary text-center">
                  <th> ID </th>
                  <th> Name </th>
                  <th> Description </th>
                  <th> Price </th>
                  <th> Image Product</th>
                  <th> Created_at </th>
                  <th class="text-right"> Actions </th>
                </thead>
                <tbody>
                  @forelse ($posts as $post)
                  <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->description }}</td>
                    <td>{{ $post->price }}</td>
                    <td class= "container d-flex justify-content-center">
                          <img src="/image/{{$post->image}}" height="20%" width="20%" >
                    </td>
                    <td class="text-primary">{{ $post->created_at->toFormattedDateString() }}</td>
                    <td class="td-actions text-right">
                    @can('post_show')
                      <a href="{{ route('posts.show', $post->id) }}" class="btn btn-info"> <i
                          class="material-icons">person</i> </a>
                    @endcan
                    @can('post_edit')
                      <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-success"> <i
                          class="material-icons">edit</i> </a>
                    @endcan
                    @can('post_destroy')
                      <form action="{{ route('posts.destroy', $post->id) }}" method="post"
                        onsubmit="return confirm('Sure?')" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" rel="tooltip" class="btn btn-danger">
                          <i class="material-icons">close</i>
                        </button>
                      </form>
                      @endcan
                    </td>
                  </tr>
                  @empty
                  <tr>
                    <td colspan="2">No records.</td>
                  </tr>
                  @endforelse
                </tbody>
              </table>
              {{-- {{ $users->links() }} --}}
            </div>
          </div>
          <!--Footer-->
          <div class="card-footer mr-auto">
            {{ $posts->links() }}
          </div>
          <!--End footer-->
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
