<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="antialiased bg-gray-900" >
        <div class="max-w-7xl mx-auto">
            <div class="flex justify-between m-2 p-2 bg-slate-700">
                <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="file" name="users" required>
                    <button type="submit" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 text-white rounded-md">Import</button>
                </form>
                <a href="{{ route('export') }}" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 text-white rounded-md">Export</a>
            </div>
            <x-users-table :users="$users" />
        </div>
    </body>
</html>
