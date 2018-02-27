<head>
    @wp_head
</head>
<body>
@query(['post_type' => 'post', 'posts_per_page' => 3])
<article {{ Loop::postClass() }}>
    
    <header>
        <img src="{{ Loop::thumbnailUrl('thumbnail') }}">
        <h1>{{ Loop::title() }}</h1>
    </header>
    <div>
        {{ Loop::excerpt() }}
    </div>
    <a href="{{ Loop::link() }}">Read more</a>
    <aside>
        <ul>
        @foreach(Loop::category() as $cat)
            <li>{{ $cat->name }}</li>
        @endforeach
        </ul>
        <ul>
        @foreach(Loop::tags() as $tag)
            <li>{{ $tag->name }}</li>
        @endforeach
        </ul>
        <time>{{ Loop::date() }}</time>
        </aside>
</article>
@endquery

    @wp_footer
</body>