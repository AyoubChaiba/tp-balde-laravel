@props(
    ['id','nomGroupe','membres']
)

<li>
    <h2>Groupe {{ $id }} - {{ $nomGroupe }}</h2>
    <br />
        <x-groupe :membres="$membres" />
    <br />
</li>