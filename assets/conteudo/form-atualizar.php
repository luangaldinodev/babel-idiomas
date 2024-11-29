    <?php
        include 'assets/database/leitura.php';
    ?>
    <div class="divContainer-form">
        <section class="form container">
            <h2 class="form-title">Deseja atualizar seus dados?</h2>
            <p class="form-card--info">Crie uma conta e tenha acesso a grandes cursos!</p>
            <article class="form-card">
                <form class="form-form" action="assets/database/atualizar.php" method="post">
                    <input class="form-input" value="<?=$leitura['nome']?>" type="text" name="nome" id="" placeholder="Nome completo" required>
                    <input class="form-input" value="<?=$leitura['email']?>" type="email" name="email" id="" placeholder="E-mail" required>
                    <input class="form-input" value="<?=$leitura['senha']?>" type="text" name="senha" id="" placeholder="Senha" required>
                    <input type="submit" name="submit" value="Atualizar" class="form-btn">
                </form>
            </article>
            <h2 class="form-title">Deseja sair da sua conta?</h2>
            <p class="form-card--info">Isso não é um adeus!</p>
            <a href="assets/database/logout.php" class="form-btn">Sair</a>
            <h2 class="form-title">Deseja DELETAR a sua conta?</h2>
            <p class="form-card--info">Não está satisfeito? Entre em contato com a nossa equipe!</p>
            <a href="assets/database/delete.php" class="form-btn-delete">Deletar</a>
        </section>
    </div>
    <?php
        if(isset($_SESSION['mensagem'])){
            echo $_SESSION['mensagem'];
            unset($_SESSION['mensagem']);
        }
    ?>
