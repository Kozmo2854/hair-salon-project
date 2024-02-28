<nav class="panel">
    <p class="panel-heading">
        Categories
    </p>
    @foreach(@$categoriesNames as $categoryName)
        <a class="panel-block category">
            {{$categoryName->title}}
        </a>
    @endforeach
</nav>
