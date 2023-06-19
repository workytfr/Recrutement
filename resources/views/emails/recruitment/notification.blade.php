@component('mail::message')
    # Nouvelle candidature

    Une nouvelle candidature a été soumise :

    - Adresse e-mail : {{ $data['email'] }}
    - Pourquoi vous et pas un autre ? : {{ $data['why_you'] }}
    - Pseudo Discord : {{ $data['discord_username'] }}
    - Je voudrais être : {{ $data['role'] }}
    - Pourquoi avoir choisi cette mission ? : {{ $data['mission_reason'] }}
    <!-- Ajoutez les autres champs du formulaire ici -->
@endcomponent
