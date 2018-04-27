
        <?php if (isset($_SESSION['username']) && $_SESSION['isAdmin'] == 1): ?>
            <p>T'es co vieux !</p>
            <form class="deco" action="index.php" method="post">
                <button type="submit" name="logoff">Déconnexion</button>
            </form>
        <?php elseif (isset($_SESSION['username']) && $_SESSION['isAdmin'] == 0): ?>
            <p>Vous n'êtes pas autorisé à voir le contenu de l'espace perso, comme spécifié lors de l'enregistrement. Contactez Bryan pour tout commentaire à ce propos</p>
            <form class="deco" action="index.php" method="post">
                <button type="submit" name="logoff">Déconnexion</button>
            </form>
        <?php elseif (!isset($_SESSION['username'])): ?>
            <section class="form">
                <section class="log">
                    <h3>S'incrire</h3>
                    <div class="advertise">
                        <p>ATTENTION: Vous ne pourrez vous connecter que sur accord exprès de Bryan. Sans celà, vous pourrez certe vous créer un compte mais
                        celui-ci ne pourra fonctionner.</p>
                    </div>
                    <form class="signUp" action="index.php?action=espaceperso" method="post">
                        <p>Nom d'utilisateur: </p><input type="text" name="username" value="">
                        <p>Email: </p><input type="email" name="email" value="">
                        <p>Mot de passe: </p><input type="password" name="password" value="">
                        <p>Confirmez votre mot de passe</p><input type="password" name="passwordConfirm" value="">
                        <p>Combien font 3x6 ? </p><input type="text" name="honeypot" value="">
                        <button type="submit" name="sign">S'enregistrer</button>
                    </form>
                </section>
                <section class="sign">
                    <h3>Se Connecter</h3>
                    <form class="signIn" action="index.php?action=espaceperso" method="post">
                        <p>Email: </p><input type="email" name="emailLog" value="">
                        <p>Mot de passe: </p><input type="password" name="passwordLog" value="">
                        <button type="submit" name="log">Se Connecter</button>
                    </form>
                </section>
            </section>
        <?php endif; ?>
