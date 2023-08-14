            <div class="form-group">
                <div class="sep_op">{!! Form::label('name', 'Nombre') !!}</div>
                {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del post']) !!}

                @error('name')
                <span class="text-danger">{{$message}}</span>
                @enderror
 
            </div>

            <div class="form-group">
                <div class="sep_op">{!! Form::label('slug', 'Slug') !!}</div>
                {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el slug de la categoría', 'readonly']) !!}

                @error('slug')
                <span class="text-danger">{{$message}}</span>
                @enderror

            </div>

            <div class="form-group">
                <div class="sep_op">{!! Form::label('category_id', 'Categoría') !!}</div>
                {!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}

                @error('category_id')
                <span class="text-danger">{{$message}}</span>
                @enderror

            </div>

            <div class="form-group">
                <div class="sep_op font-weight-bold">Etiquetas</div>
                @foreach ($tags as $tag)
                <label class="mr-3">
                    {!! Form::checkbox('tags[]', $tag->id, null) !!}
                    {{$tag->name}}
                </label>
                @endforeach
                
                @error('tags')
                <br>
                <span class="text-danger">{{$message}}</span>
                @enderror

            </div>

            <div class="form-group">
                 <div class="sep_op font-weight-bold">Estado</div>
                 <label class="mr-3">
                    {!! Form::radio('status', 1, true) !!}
                    Borrador
                </label>

                <label class="mr-3">
                    {!! Form::radio('status', 2) !!}
                    Publicado
                </label>
               
                @error('status')
                <br>
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div class="row mb-4">
                <div class="col">
                    <div class="img-bd-post">
                        @isset ($post->image)
                            <img id="picture" src="{{Storage::url($post->image->url)}}" alt="">
                        @else
                            <img id="picture" src=" https://cdn.pixabay.com/photo/2021/09/16/16/15/forest-6630513_1280.jpg" alt="">
                        @endisset
                    </div>
                </div>

                <div class="col">
                    <div class="form-group">
                         {!! Form::label('file', 'Imagen que se mostrará en el post') !!}
                         {!! Form::file('file', ['class' => 'form-control-file', 'accept' => 'image/*'] ) !!}
                    </div>

                    @error('file')
                        <span class="text-danger">{{$message}}</span>
                    @enderror

                    <p class="indi_img">Se recomienda que las dimensiones de las imagenes sea de 640 *  480. </p>
                    <p class="indi_img">Si se publica el post, y no se ha subido ninguna imagen, se pondrá la imagen predeterminada.  </p>
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('extract', 'Extracto') !!}
                {!! Form::textarea('extract', null,['class' => 'form-control']) !!}

                @error('extract')
                <span class="text-danger">{{$message}}</span>
                @enderror

            </div>

            <div class="form-group">
                {!! Form::label('body', 'Cuerpo del post') !!}
                {!! Form::textarea('body', null,['class' => 'form-control']) !!}

                @error('body')
                <span class="text-danger">{{$message}}</span>
                @enderror

            </div>