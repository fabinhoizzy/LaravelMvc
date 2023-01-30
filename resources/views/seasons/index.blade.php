<x-layout title="Temporada de {!! $series->nome !!}">

    <div class="d-flex justify-content-center">
        <img src="{{ asset('storage/' . $series->cover) }}"
             style="height: 300px"
             alt="capa da serie"
             class="img-fluid" >
    </div>

    <ul class="list-group">
        @foreach($seasons as $season)
            <li class="list-group-item d-flex justify-content-between align-items-center">

                <a href="{{ route('episodes.index', $season->id) }}">
                    Temporada {{ $season->number }}
                </a>

                <span class="badge bg-secondary">
                    {{ $season->numberOfWatchedEpisodes() }} / {{ $season->episodes->count() }}
                </span>
            </li>
        @endforeach
    </ul>

</x-layout>

