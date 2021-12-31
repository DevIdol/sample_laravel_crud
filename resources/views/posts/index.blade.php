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

        <h1 class="text4xl font-bold mb-4"> My Blog Post</h1>

        <a href="/posts/create"
                class="bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-1g rounded hover:shadow my-4">
                Add Post
            </a>

        @foreach ($posts as $post)


            <article class="mb-2">
                <a href="/posts/ {{$post->id}}/edit " class="text-x1 font-bold text-blue-900"> {{ $post['title'] }} </a>
                <p class="text-md text-gray-600">
                    {{$post['content']}}
                   </p>
                   <hr class="mt-2">
            </article>
        @endforeach
    </div>


</body>

</html>
