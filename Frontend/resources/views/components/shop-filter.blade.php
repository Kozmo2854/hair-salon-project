<nav class="panel">
    <p class="panel-heading">
        Categories
    </p>
    @foreach(@$categoriesNames as $categoryName)
        <a class="panel-block" value="{{$categoryName->id}}">
            {{$categoryName->title}}
        </a>
    @endforeach
</nav>
