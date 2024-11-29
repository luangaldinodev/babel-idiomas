    <div class="divContainer-form">
        <section class="form container">
            <h2 class="form-title">Entre em contato</h2>
            <p class="form-card--info">Fale com a nossa equipe!</p>
                <article class="form-card">
                    <form class="form-form" action="assets/database/mensagem.php" method="post">
                        <!-- <input class="form-input" type="text" name="nome" id="" placeholder="Nome completo" required> -->
                        <input class="form-input" type="text" name="nome" id="" placeholder="Nome" required>
                        <input class="form-input" type="text" name="mensagem" id="" placeholder="Mensagem..." required>
                        <input type="submit" name="submit" value="Enviar" class="form-btn">
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
