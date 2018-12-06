<blockquote class="blockquote-repeater">
    @parsedown($quote)
    @isset($citation)
        <cite>
            @isset($citation_url)
                <a href="{{ $citation_url }}">{{ $citation }}</a>
            @else
                {{ $citation }}
            @endisset
        </cite>
    @endisset
</blockquote>
