<div class="card">
    <div class="card-header">
     
        <input wire:model="search" class="form-control me-2" placeholder="Search">

    </div>
   <div class="card-body">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th colspan="2"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->name}}</td>
                    <td with="10px">
                        <a class="btn btn-outline-secondary btn-sm" href="{{route('admin.posts.edit', $post)}}">Editar</a>
                    </td>
                    <td with="10px">
                        <form action="{{route('admin.posts.destroy', $post)}}" method="POST">
                        @csrf    
                        @method('delete')
                        <button type="submit" class="btn btn-outline-danger btn-sm">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>

    </table>
   </div>
</div>
<div class="pagination-container">
  <ul class="pagination">
    @if ($posts->currentPage() > 1)
      <li class="page-item">
        <a href="{{ $posts->previousPageUrl() }}" class="page-link">&laquo; Previous</a>
      </li>
    @endif

    @for ($i = 1; $i <= $posts->lastPage(); $i++)
      <li class="page-item {{ $posts->currentPage() === $i ? 'active' : '' }}">
        <a href="{{ $posts->url($i) }}" class="page-link">{{ $i }}</a>
      </li>
    @endfor

    @if ($posts->hasMorePages())
      <li class="page-item">
        <a href="{{ $posts->nextPageUrl() }}" class="page-link">Next &raquo;</a>
      </li>
    @endif
  </ul>
</div>