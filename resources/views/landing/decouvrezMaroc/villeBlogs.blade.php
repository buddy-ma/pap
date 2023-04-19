<div class="container">
    <div class="row">
        @foreach ($blogs->chunk(5) as $chunk)
            <div class="col-4">
                <div class="property wprt-image-video w50 pro vid-si2">
                    <ul>
                        @foreach ($chunk as $blog)
                            <li>
                                <a href="/blog/{{ $blog->slug }}">{{ $blog->title }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endforeach
    </div>
</div>
