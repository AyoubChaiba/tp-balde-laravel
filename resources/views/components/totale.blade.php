@php
    $total = 0;
@endphp
@foreach ($membres as $membre)
    @php
        $total += $membre['moyenneBac'];
    @endphp
@endforeach

<div> Number of Stagiaires: {{ count($membres) }}</div>
<div> Moyenne Bac : {{ $total / count($membres) }}</div>