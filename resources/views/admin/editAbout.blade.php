<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
</head>

<body>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="/EditProfil" method="POST" enctype="multipart/form-data">
        @csrf
        <textarea name="editor" id="editor" rows="10" cols="80">
            This is my textarea to be replaced with CKEditor.
        </textarea>

        <button type="submit">Create</button>
    </form>

    <script src="/ckeditor/ckeditor.js"></script>

    <script>
        CKEDITOR.replace('editor');
    </script>

</body>

</html>
