    <div class="divContainer-form">
        <section class="form container">
            <h2 class="form-title">Fazer login</h2>
            <p class="form-card--info">Bem vindo de volta!</p>
                <article class="form-card">
                    <form class="form-form" action="assets/database/login.php" method="post">
                        <!-- <input class="form-input" type="text" name="nome" id="" placeholder="Nome completo" required> -->
                        <input class="form-input" type="email" name="email" id="" placeholder="E-mail" required>
                        <input class="form-input" type="password" name="senha" id="" placeholder="Senha" required>
                        <input type="submit" name="submit" value="Acessar" class="form-btn">
                    </form>
                </article>
        </section>
    </div>
    <?php
        if(isset($_SESSION['mensagem'])){
            echo $_SESSION['mensagem'];
            unset($_SESSION['mensagem']);
        }
    ?>
