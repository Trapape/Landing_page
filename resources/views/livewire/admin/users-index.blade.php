<div>
    <div class="card">
        <div class="card-header">
             <input wire:model="search" class="form-control me-2" placeholder="Ingrese el nombre o correo de un usuario">
        </div>
        @if($users->count())
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th></th>
                    </tr>
                </thead> 

                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td width="10px">
                          @can ('admin.users.edit')<a class="btn btn-outline-secondary btn-sm" href="{{route('admin.users.edit', $user)}}">Editar</a>@endcan
                        </td>

                        <td with="10px">
                        @can ('admin.users.destroy')
                        <form action="{{route('admin.users.destroy', $user)}}" method="POST">
                        @csrf    
                        @method('delete')
                        <button type="submit" class="btn btn-outline-danger btn-sm">Eliminar</button>
                        </form>
                        @endcan
                    </td>
                        
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="pagination-container">
  <ul class="pagination">
    @if ($users->currentPage() > 1)
      <li class="page-item">
        <a href="{{ $users->previousPageUrl() }}" class="page-link">&laquo; Previous</a>
      </li>
    @endif

    @for ($i = 1; $i <= $users->lastPage(); $i++)
      <li class="page-item {{ $users->currentPage() === $i ? 'active' : '' }}">
        <a href="{{ $users->url($i) }}" class="page-link">{{ $i }}</a>
      </li>
    @endfor

    @if ($users->hasMorePages())
      <li class="page-item">
        <a href="{{ $users->nextPageUrl() }}" class="page-link">Next &raquo;</a>
      </li>
    @endif
  </ul>

</div>
        @else
        <div class="card-body"><strong> No hay registros.</strong></div>
   |    @endif