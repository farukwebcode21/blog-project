{{-- <html>
<body>
    <h1>{{ $blogPost->title }}</h1>
    <p>{{ $blogPost->content }}</p>
    <h2>Comments</h2>
    {{-- <ul>
        @foreach($blogPost->comments as $comment)
            <li>{{ $comment->content }}</li>
        @endforeach
    </ul> --}}
    {{--

</body>
</html> --}}

<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
    <div class="container mx-auto mb-4 border p-3 bg-black">
        <h3 class="text-center text-white">Navbar</h3>
    </div>
    <div class="container mx-auto">
        <div class="grid gap-4 border border-cyan-600 py-2 px-2 mb-3">
            <div class="col-span-2">
                <img src={{$blogPost->image}} alt="">
            </div>
            <div class="col-span-2">
                <h1 class="text-2xl text-sky-500 font-bold">{{$blogPost->title}}</h1>
                <p class="mb-4">{{$blogPost->content}}</p>
            </div>
        </div>
        <div class="container">
            <form id="commentForm">
                <textarea class="w-[100%] border border-cyan-500" name="content" placeholder="Write a comment"></textarea>
                <button class="bg-orange-600 py-2 px-7 text-white" type="submit">Submit</button>
            </form>
        </div>

        <footer class="text-center border border-l-indigo-300">
            <h2>Footer</h2>
        </footer>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script>
        const form = document.getElementById('commentForm');
        form.addEventListener('submit', function(event) {
            event.preventDefault();

            const formData = new FormData(form);

            axios.post('/comments', formData)
                .then(function(response) {
                    const comment = response.data;
                    const commentElement = document.createElement('li');
                    commentElement.textContent = comment.content;

                    const commentsList = document.querySelector('ul');
                    commentsList.appendChild(commentElement);

                    form.reset();
                })
                .catch(function(error) {
                    console.log(error);
                });
        });
    </script>

</body>
</html>
