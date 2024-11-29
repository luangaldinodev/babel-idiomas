<?php
    include 'assets/database/leitura-videos.php';
?>    

    <div class="divContainer-cursos" id="escola">
        <section class="cursos container">
            <h2 class="cursos-title">Video aulas</h2>
            <p class="cursos-card--info">Aqui você encontra aulas, métodos, conversação e muito mais!</p>
            <div class="cursos-cards">
                <?php
                while ($leituraVideo = mysqli_fetch_array($resultVideo)) {
                ?>
                <article class="cursos-card">
                    <iframe class="cursos-card--img" src="<?=$leituraVideo['link-video']?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    <h3 class="cursos-card--title"><?=$leituraVideo['nome-video']?></h3>
                    <p class="cursos-card--info"><?=$leituraVideo['info-video']?></p>
                </article>
                <?php
                    }
                    // fechamento while
                ?>
            </div>
        </section>
    </div>
