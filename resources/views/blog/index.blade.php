<html>
<body>
    <h1>Blog Posts</h1>
    <ul>
        @foreach($blogPosts as $key => $blogPost)
            <li>
                <a href="/blog-posts/{{ $blogPost->id }}">{{ $blogPost->title }}</a>
            </li>
            <p>{{ $blogPost->content }}</p>
        @endforeach
    </ul>
</body>
</html>
