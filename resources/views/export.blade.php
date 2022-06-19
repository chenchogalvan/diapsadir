<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Export</title>
</head>
<body>
    @if (Session::has('success'))
        {{ Session::get('success') }}
    @endif
    <form action="{{ route('export_data') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="excel_file" id="">
        <button>Enviar</button>
    </form>
</body>
</html>
