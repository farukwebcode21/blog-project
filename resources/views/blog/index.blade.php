</html>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <title>show blog post</title>
</head>
<body>
    <div class="container mx-auto mb-4 border p-3 bg-black">
        <h3 class="text-center text-white">Navbar</h3>
    </div>
    <div class="container mx-auto">
        <div class="mb-3">
            <div class="grid grid-cols-4 gap-4">
                @foreach($blogPosts as $key => $blogPost)
                    <div class="col-span-1">
                        <img src={{ $blogPost->image }} alt="">
                    </div>
                    <div class="col-span-3">
                        <a href="{{ $blogPost->id }}"><h1 class="text-2xl text-sky-500 font-bold">{{ $blogPost->title }}</h1></a>
                        <p>{{ $blogPost->content }}</p>
                    </div>
                @endforeach
            </div>
        </div>

        <footer class="text-center border border-l-indigo-300">
            <h2>Footer</h2>
        </footer>

    </div>
</body>
</html>
