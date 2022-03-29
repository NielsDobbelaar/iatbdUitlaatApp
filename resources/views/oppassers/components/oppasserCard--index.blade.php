<li class="gridCard" >
    <a href="/oppassers/{{$oppasser->id}}">
        <article>
            <header class="gridCard__header u-center-v">
                <h2 class="gridCard__heading">{{$oppasser->naam}}</h2>
            </header>
            <figure class="gridCard__figure u-center-h">
                <img class="gridCard__image" src="{{$oppasser->foto}}" alt="foto van de leefomgeving">
            </figure>
            <section class="gridCard__section">
                <p class="gridCard__text">{{$oppasser->beschrijving}}</p>
            </section>
        </article>
    </a>
</li>
