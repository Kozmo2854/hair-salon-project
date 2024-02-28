@include('head')
@include('nav')
<div class="container">
    <div class="columns">
        <div class="column is-one-quarter">
            <x-shopFilter :categoriesNames="$categoriesNames"/>
        </div>
        <div class="column shop-content">
            <div class="column columns level search-sort">
                <div class="level-left is-3 column">
                    <div class="level-item">
                        <input class="input level-item is-3" type="text" placeholder="Text input"/>
                    </div>
                </div>
                <div class="dropdown level-right column is-4">
                    <div class="dropdown-trigger">
                        <button class="button" aria-haspopup="true" aria-controls="dropdown-menu">
                            <span>Dropdown button</span>
                            <span class="icon is-small">
                                <i class="fas fa-angle-down" aria-hidden="true"></i>
                            </span>
                        </button>
                    </div>
                    <div class="dropdown-menu" id="dropdown-menu" role="menu">
                        <div class="dropdown-content">
                            <a href="#" class="dropdown-item">
                                Dropdown item
                            </a>
                            <a class="dropdown-item">
                                Other dropdown item
                            </a>
                            <a href="#" class="dropdown-item is-active">
                                Active dropdown item
                            </a>
                            <a href="#" class="dropdown-item">
                                Other dropdown item
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                With a divider
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="columns column products is-flex-wrap-wrap">
                @if($products!=[])
                    @foreach($products as $product)
                        <x-product :products="$product"></x-product>
                    @endforeach
                @else
                    <p>No products in shop currently!</p>
                @endif
            </div>
        </div>
    </div>
</div>
