<form method="POST" action="{{ route('recruitment.submit') }}">
    @csrf

    <div>
        <label for="email">Adresse e-mail</label>
        <input type="email" id="email" name="email" required>
    </div>

    <div>
        <label for="why_you">Pourquoi vous et pas un autre ?</label>
        <textarea id="why_you" name="why_you" required></textarea>
    </div>

    <div>
        <label for="discord_username">Quel est votre pseudo sur Discord ?</label>
        <input type="text" id="discord_username" name="discord_username" required>
    </div>

    <div>
        <label>Je voudrais être :</label>
        <label for="role_blog">
            <input type="radio" id="role_blog" name="role" value="Rédacteur pour le Blog de Workyt" required>
            Rédacteur pour le Blog de Workyt
        </label>
        <label for="role_cours">
            <input type="radio" id="role_cours" name="role" value="Rédacteur pour l'espace cours" required>
            Rédacteur pour l'espace cours
        </label>
    </div>

    <div>
        <label for="mission_reason">Pourquoi avoir choisi cette mission ?</label>
        <textarea id="mission_reason" name="mission_reason" required></textarea>
    </div>

    <!-- Ajoutez les autres champs du formulaire ici -->

    <button type="submit">Envoyer</button>
</form>
