@include('nav')
@include('head')
{{--@props($hairderssers=['test',123])--}}
<div class="level columns">
    <div class="level-left column is-3">
        <img src="https://bulma.io/images/placeholders/128x128.png">
    </div>
    <div class="level-right column is-9">
        <div class="dropdown is-active">
            <div class="dropdown-trigger">
                <button class="button" aria-haspopup="true" aria-controls="dropdown-menu">
                    <span>Dropdown button</span>
                    <span class="icon is-small">
                        <i class="fas fa-angle-down" aria-hidden="true"></i>
                    </span>
                </button>
            </div>
            <div class="dropdown-menu" id="dropdown-menu" role="menu">
                <div class="dropdown-content ">
                    {{--                    @foreach($hairderssers as $hairdersser)--}}
                    {{--                        <a href="#" class="dropdown-item">--}}
                    {{--                            {{$hairdersser}}--}}
                    {{--                        </a>--}}
                    {{--                    @endforeach--}}
                </div>
            </div>
        </div>
    </div>
</div>
