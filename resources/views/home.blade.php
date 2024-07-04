<!DOCTYPE html>
<html>
<head>
    <title>Treni in partenza oggi</title>
</head>
<body>
    <h1>Treni in partenza oggi</h1>
    @if($trains->isEmpty())
        <p>Non ci sono treni in partenza oggi.</p>
    @else
        <table>
            <thead>
                <tr>
                    <th>Azienda</th>
                    <th>Stazione di Partenza</th>
                    <th>Stazione di Arrivo</th>
                    <th>Orario di Partenza</th>
                    <th>Orario di Arrivo</th>
                    <th>Codice Treno</th>
                    <th>Numero Carrozze</th>
                    <th>In Orario</th>
                    <th>Cancellato</th>
                </tr>
            </thead>
            <tbody>
                @foreach($trains as $train)
                    <tr>
                        <td>{{ $train->azienda }}</td>
                        <td>{{ $train->stazione_di_partenza }}</td>
                        <td>{{ $train->stazione_di_arrivo }}</td>
                        <td>{{ $train->orario_di_partenza }}</td>
                        <td>{{ $train->orario_di_arrivo }}</td>
                        <td>{{ $train->codice_treno }}</td>
                        <td>{{ $train->numero_carrozze }}</td>
                        <td>{{ $train->in_orario ? 'Sì' : 'No' }}</td>
                        <td>{{ $train->cancellato ? 'Sì' : 'No' }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</body>
</html>