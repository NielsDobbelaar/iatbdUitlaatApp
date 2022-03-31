
 <section class="aanmeldSection u-grid-12 u-grid-gap-2">
    <section class="aanmeldSection__naam">
            <h2>{{$aanvraag->naam}}</h2>
            <a href="/oppassers/{{$aanvraag->oppasser}}">ga naar profiel</a>
        </section>
        @if ($aanvraag->geaccepteerd == 'no')
        <section class="aanmeldSection__btnSection u-grid-12">
            <button class="aanmeldSection__button u-green-button" onclick="window.location.href='/aanvraag/{{$aanvraag->id}}/edit'">accepteren</button>
            <form name='dierForm2' class="aanmdeldSection__Form" method='POST' action='/aanvraag/{{$aanvraag->id}}'>
                @method('DELETE')
                @csrf
                <button type="submit" class="aanmeldSection__button u-red-button">weigeren</button>
                </form>
            {{-- <button class="aanmeldSection__button u-red-button" onclick="window.location.href='/dieren'">weigeren</button> --}}
        </section>
        @else
        <section class="aanmeldSection__btnSection">
            <button class="aanmeldSection__button u-normal-color-button" onclick="window.location.href='/dieren'">review plaatsen</button>
        </section>
        @endif
    </section>
    </section>
