@csrf
<label for="">Titulo</label>
<input type="text" name="title" id="" value="{{ old("title", $category->title) }}">

<label for="">Slug</label>
<input type="text" name="slug" id="" value="{{ old("slug", $category->slug) }}">

<button type="submit">Enviar</button>