<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Post</title>
</head>
<body>
    <h1>Crear Post</h1>
    <form action="{{ route('post.store') }}" method="post">
        @csrf

        <label for="">Titulo</label>
        <input type="text" name="title" id="">
        <label for="">Slug</label>
        <input type="text" name="slug" id="">
        <label for="">Categorias</label>
        <select name="category_id" id="">
            <option value="" selected disabled></option>
            @foreach ($categories as $title => $id)
                <option value="{{ $id }}">{{ $title }}</option>
            @endforeach
        </select>
        <label for="">Posteado</label>
        <select name="posted" id="">
            <option value="not">No</option>
            <option value="yes">Si</option>
        </select>
        <label for="">Contenido</label>
        <textarea name="content" id=""></textarea>
        <label for="">Descripción</label>
        <textarea name="description" id=""></textarea>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>