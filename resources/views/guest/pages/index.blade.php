@extends("layout.app")

@section("page-title", "Train Index")

@section("main-content")
    <main>
        <div class="container">
            <section class="row">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Codice Treno</th>
                            <th scope="col">Azienda</th>
                            <th scope="col">Stazione di Partenza</th>
                            <th scope="col">Orario di Partenza</th>
                            <th scope="col">Stazione di Arrivo</th>
                            <th scope="col">Orario di Arrivo</th>
                            <th scope="col">Numero di Carrozze</th>
                            <th scope="col">Stato</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        @foreach ( $trains as $train )
                        <tr>
                            <th scope="row"> {{ $train->train_code }} </th>
                            <td> {{ $train->company }} </td>
                            <td> {{ $train->departure_station }} </td>
                            <td> {{ $train->departure_time }} </td>
                            <td> {{ $train->arrival_station }} </td>
                            <td> {{ $train->arrival_time }} </td>
                            <td> {{ $train->carriage_count }} </td>
                            <td>
                                @if ($train->cancelled === 1)
                                    Treno Cancellato
                                @else
                                    @if ($train->on_time === 1)
                                        In orario
                                    @else
                                        In ritardo
                                    @endif
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </section>
        </div>
    </main>
@endsection
