@props(['membres'])

<table class="table table-striped">
    <thead>
        {{ $slot }}
    </thead>
    <tbody>
        @foreach ($membres as $membre)
            <tr>
                <x-stagiare :id="$membre['id']" :fullName="$membre['nom'] . ' ' . $membre['prenom']" :moyenneBac="$membre['moyenneBac']" />
            </tr>
        @endforeach
    </tbody>
</table>
