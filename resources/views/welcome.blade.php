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
        <div class="mx-auto container max-w-5xl py-6">
            <div class="flex justify-between m-2 p-2 bg-slate-700 rounded-md">
                <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data" class="flex justify-between items-center space-x-2">
                    @csrf
                    <input class="w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="file_input_help" name="users" type="file" required>
                    <button type="submit" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 text-white rounded-md">Import</button>
                </form>
                <a href="{{ route('export') }}" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 text-white rounded-md">Export</a>
            </div>
            <div class="p-2">
                <x-users-table :users="$users" />
            </div>
        </div>
    </body>
</html>
