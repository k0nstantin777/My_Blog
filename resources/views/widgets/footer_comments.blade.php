<h3>Последние комментарии</h3>

<div class="recent-comments">
    <ul>
        @foreach($comments as $comment)
            <li><a href="index.html" title="Comment on title">{{$comment->slug}}</a><br /> &#45; <cite>{{$comment->user->name}}</cite></li>
        @endforeach
    </ul>
</div>