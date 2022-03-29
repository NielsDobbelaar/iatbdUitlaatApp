<li class="gridCard" >
    <a href="/oppassers/{{$dier->id}}">
        <article>
            <header class="gridCard__header u-center-v">
                <h2 class="gridCard__heading">{{$dier->naam}}</h2>
            </header>
            <figure class="gridCard__figure u-center-h">
                <img class="gridCard__image" src="{{$dier->foto}}" alt="foto van het dier">
            </figure>
            <section class="gridCard__section">
                <p class="gridCard__text">{{$dier->beschrijving}}</p>
            </section>
        </article>
    </a>
</li>
