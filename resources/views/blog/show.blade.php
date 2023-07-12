<html>
<body>
    <h1>{{ $blogPost->title }}</h1>
    <p>{{ $blogPost->content }}</p>
    <h2>Comments</h2>
    {{-- <ul>
        @foreach($blogPost->comments as $comment)
            <li>{{ $comment->content }}</li>
        @endforeach
    </ul> --}}
    <form id="commentForm">
        <textarea name="content" placeholder="Write a comment"></textarea>
        <button type="submit">Submit</button>
    </form>

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
