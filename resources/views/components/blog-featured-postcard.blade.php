@props(['post'])
<div class="col-lg-8 col-md-12 mb20">
    <div class="bloglist item">
            <div class="post-content">
                <div class="post-image">
                    <img alt="" src="images/news/2.jpg">
                    <div class="post-info">
                        <div class="inner">
                            <span class="post-date">{{ $post->created_at->diffForHumans() }}</span> <span class="post-author">{{ $post->author->name }}</span>
                        </div>
                    </div>
                </div>
                <div class="post-text">
                    <h4><a href="blog/{{ $post->slug }}">{{ $post->title }}</a></h4>
                    <p>{{ $post->excerpt }}</p>
                </div>
            </div>
        </div>
</div>