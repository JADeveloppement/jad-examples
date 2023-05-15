<div style="max-width: 300px; background-color: rgba(255, 165, 0, 0.2); width: fit-content; padding: 2rem; border: 1px solid grey; border-radius: 1rem; display: flex; flex-direction: column; justify-content: center;">
    @if ($from == 1)
    <h2 style="width: 100%; text-align: center; color: orangered;">Formulaire de contact</h2>
    <p><b>Nom : </b>{{ $nom }}</p>
    <p><b>Prénom : </b>{{ $prenom }}</p>
    <p><b>Email : </b>{{ $email }}</p>
    <p><b>Téléphone : </b>{{ $telephone }}</p>
    <p><b>Message : </b></p>
    <p>{{ $msg }}</p>
    @elseif($form == 2)
    <h2>Formulaire Newsletter : </h2>
    <p><b>Email : </b>{{ $email }}</p>
    <p><b>Sujet : </b>{{ $objet }}</p>
    @else
    <p>Une erreure est survenue lors de la création du mail</p>
    @endif
    <div style="width: 100%; display: flex; justify-content: center;">
        <a href="mailto:{{ $email }}" style="text-decoration: none"><div style="width: fit-content; color: white; margin: 1rem; padding: 1rem 1.5rem; font-size: 1rem; background-color: orangered; border-radius: 5px; border-style: solid 1px orange; box-shadow: 1px 1px 5px rgba(0,0,0,0.1);">Répondre au mail</div></a>    
    </div>
</div>