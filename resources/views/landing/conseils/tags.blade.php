<div class="articlesHub__menu">
    <div class="articlesHub__menu__container text-center">
        <div class="articlesHub__menu__content">
            @foreach ($tags as $tag)
                <a onclick="tags('{{ $tag }}')" data-slug="acheter"
                    class="articlesHub__menu__item">{{ $tag }}<span class="caretForSmallMenu"><i
                            class="fa fa-caret-down"></i></span></a>
            @endforeach
            <div class="articlesHub__menu__content-border"></div>
        </div>
    </div>
</div>
