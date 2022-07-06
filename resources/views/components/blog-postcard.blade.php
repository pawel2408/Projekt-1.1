@props(['post'])
<div class="col-lg-4 col-md-6 mb30">
    <div class="bloglist item">
            <div class="post-content">
                <div class="post-image">
                    <img alt="" src="images/news/1.jpg">
                    <div class="post-info">
                        <div class="inner">
                            <span class="post-date">1{{ $post->created_at->diffForHumans() }}</span> <span class="post-author">{{ $post->author->name}}</span>
                        </div>
                    </div>
                </div>
                <div class="post-text">
                    <h4><a href="/blog/{{ $post->slug }}">{{ $post->title}}</a></h4>
                    <p>{{ $post->excerpt}}</p>
                </div>
            </div>
        </div>
</div>