@csrf
<label for="">Titulo</label>
<input type="text" name="title" id="" value="{{ old("title", $post->title) }}">
<label for="">Slug</label>
<input type="text" name="slug" id="" value="{{ old("slug", $post->slug) }}">
<label for="">Categorias</label>
<select name="category_id" id="">
    <option value="" selected disabled></option>
    @foreach ($categories as $title => $id)
        <option {{ old("category_id", $post->category_id) == $id ? 'selected' : '' }} value="{{ $id }}">{{ $title }}</option>
    @endforeach
</select>
<label for="">Posteado</label>
<select name="posted" id="">
    <option {{ old("posted", $post->posted) == "not" ? 'selected' : '' }} value="not">No</option>
    <option {{ old("posted", $post->posted) == "yes" ? 'selected' : '' }} value="yes">Si</option>
</select>
<label for="">Contenido</label>
<textarea name="content" id="">{{ old("content", $post->content) }}</textarea>
<label for="">Descripción</label>
<textarea name="description" id="">{{ old("description", $post->description) }}</textarea>

@if (isset($task) && $task == 'edit')
    <label for="">Imagen</label>
    <input type="file" name="image" id="">
@endif

<button type="submit">Enviar</button>