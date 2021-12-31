<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>

    <div style="width: 900px;" class="container max-w-full mx-auto pt-5">

        <form action="/posts" method="POST">

            @csrf
            <div class="mb-4">
                <label for="title" class="font-bold text-gray-800">Title: </label>
                <input type="text" class="h-10 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full" id="title"
                    name="title" value="  ">
            </div>
            <div class="mb-4">
                <label for="content" class="font-bold text-gray-800">Content: </label>
                <textarea type="text"
                    class="h-16 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0"
                    id="content" name="content">  </textarea>
            </div>

            <button
                class="bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-1g rounded hover:shadow">
                Add
            </button>
        </form>

    </div>


</body>

</html>
