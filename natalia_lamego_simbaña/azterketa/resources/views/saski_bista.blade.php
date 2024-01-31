{{-- @section('content') --}}
@php
    $saskibaloEstatistikak = [
        'JokalariA' => [
            'puntuak' => 24,
            'erreboteak' => 10,
            'asistentziak' => 5,
        ],
        'JokalariB' => [
            'puntuak' => 18,
            'erreboteak' => 12,
            'asistentziak' => 7,
        ],
        'JokalariC' => [
            'puntuak' => 22,
            'erreboteak' => 9,
            'asistentziak' => 4,
        ],
    ];
@endphp


<table border=1>
    <tr>
        <th>Izena</th>
        <th>Puntuak</th>
        <th>Erreboteak</th>
        <th>Asistentziak</th>
    </tr>
    @foreach ($saskibaloEstatistikak as $item => $value)
        <tr>
            <td>{{ $item }}</td>
            <td>{{ $value['puntuak'] }}</td>
            <td>{{ $value['erreboteak'] }}</td>
            <td>{{ $value['asistentziak'] }}</td>
        </tr>
    @endforeach
</table>
{{-- @endsection --}}
