
<article class="dierCard">
    <section class="diercard__infoSecton">
        <figure class="dierCard__figure">
            <img class="dierCard__image" src="{{$dier->foto}}" alt="Een foto van de leefomgeving">
        </figure>
        <section class="dierCard__text">
            <h2 class="dierCard__text__header">Wie wilt er passen op {{$dier->naam}}</h2>
            <p>Van: {{$dier->startDatum}}  Tot: {{$dier->eindDatum}}</p>
            <p>Soort: {{$dier->diersoort}}</p>
            <p>Uur tarief: {{$dier->uurtarief}}</p>
            <p>Over {{$dier->naam}}: {{$dier->beschrijving}}</p>
        </section>
        <section class="dierCard__btnSection u-center-h u-flex-gap-2">
            @if($user->id != $dier->eigenaar)
            <form name='dierForm' method='POST' action='/aanvraag'>
            @csrf
                <input type='hidden' name='dier' id="dier" value='{{$dier->id}}'>
            <input type = "submit" class="dierCard__button" value="Op {{$dier->naam}} passen">
            </form>
            @endif
        </section>
        @if ($user->id == $dier->eigenaar || $user->admin == 'yes')
            @if (!$aanvragen->isEmpty())
                <section class="dierCard__text u-center-h">
                <h2 class="dierCard__text__header">Oppas Aanmeldingen</h2>
                </section>
                    @foreach ($aanvragen as $aanvraag)
                        @include('dieren.components.aanmelding--show')
                    @endforeach
            @endif
        @endif
    </section>
</article>
