<h1>Nieuw dier toevoegen</h1>

<form method="POST" action="/dieren" enctype="multipart/form-data">

    @csrf

    <label>Naam</label>
    <input name="naam">

    <br>

    <label>Geboortedatum</label>
    <input type="date" name="geboortedatum">

    <br>

    <label>Soort</label>
    <input name="soort">

    <br>

    <label>Geslacht</label>
    <input name="geslacht">

    <br>

    <label>Kleur</label>
    <input name="kleur">

    <br>

    <label>Locatie</label>
    <input name="locatie">

    <br>

    <label>Eten</label>
    <textarea name="eten"></textarea>

    <br>

    <label>Weetje</label>
    <textarea name="weetje"></textarea>

    <br>

    <label>Foto</label>
    <input type="file" name="foto" accept="image/*">

    <br>

    <button type="submit">
        Opslaan
    </button>

</form><?php
