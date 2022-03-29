
<article class="oppasserCard">
    <figure class="oppasserCard__figure">
        <img class="oppasserCard__image" src="{{$oppasser->foto}}" alt="Een foto van de leefomgeving">
    </figure>
    <section class="oppasserCard__text">
        <h2 class="oppasserCard__text__header">{{$oppasser->naam}}</h2>
        <p>{{$oppasser->beschrijving}}</p>
        <p>Contactgegevens: {{$oppasser->email}}</p>
    </section>
    <section class="oppasserCard__btnSection u-center-h">
        <button class="oppasserCard__button" onclick="window.location.href='/oppassers'">home</button>
    </section>
</article>
