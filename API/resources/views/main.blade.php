@include('head');
@include('nav');
<div class="block">
    <section class="hero is-large">
        <div class="main-image hero-body has-text-centered">
            <p class="title">
                Welcome to my hair saloon website
            </p>
        </div>
    </section>
</div>
<section class="section">
    <div class="container">
        <div class="columns is-centered">
            @for($i=0;$i<count($images['sources']);$i++)
                <x-column :source="$images['sources'][$i]" :text="$images['text'][$i]"/>
            @endfor
        </div>
    </div>
</section>
