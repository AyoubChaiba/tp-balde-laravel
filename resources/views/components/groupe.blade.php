@props(['membres'])

<div class="border border-dark p-4">
    <h3>list des Membres:</h3>
    <x-membres :membres="$membres" >
        <tr>
            <th>ID</th>
            <th>nome</th>
            <th>Moyenne Bac</th>
        </tr>
    </x-membres>
    <x-totale :membres="$membres"/>
</div>
