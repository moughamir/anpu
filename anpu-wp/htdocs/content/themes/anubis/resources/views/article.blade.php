<head>
@loop
<meta name="author" content="{{ Loop::author() }}">
<meta name="description" content="{{ Loop::excerpt() }}">
@endloop
@wp_head
</head>
<body {!!Loop::postClass()!!}>
@loop
<header class="article-header">
    <h1 class="article-title">{{ Loop::title() }}</h1>
    <div class="article-meta">
        <ul>
            <li><em>{{ Loop::author() }}</em></li>
            <li><time>{{ Loop::date() }}</time></li>
        </ul>
    </div>
    <div class="article-featured">
        <img src="{{ Loop::thumbnailUrl() }}">
    </div>
</header>

<article class="article-content">
    <p>{!! @Loop::content() !!}</p>
</article>
<aside>
    <ul>
        @foreach(Loop::tags() as $tag)
            <li>{{ $tag->name }}</li>
        @endforeach
    </ul>
</aside>
<nav class="article-navigation">
    <div class="article-prev">{!! Loop::previousPage() !!}</div>
    <div class="article-next">{!! Loop::nextPage() !!}</div>
</nav>
<footer class="article-footer"></footer>
    
@endloop

<footer>
        @wp_footer
</footer>
</body>