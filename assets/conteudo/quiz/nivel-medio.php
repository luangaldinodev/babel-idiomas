    <div class="divContainer-form">
        <section class="form container">
            <div class="botoes">
                <a href="index-quiz-facil.php" class="form-btn-group">Fácil</a>
                <a href="index-quiz-medio.php" class="form-btn-group">Médio</a>
                <a href="index-quiz-dificil.php" class="form-btn-group">Difícil</a>
            </div>
            <h2 class="form-title">Desafie Seu Inglês com o Babel Quiz!</h2>
            <p class="form-card--info"><?php 
                                            if(isset($_SESSION['acertos'])){
                                                echo "Gabarito";
                                            }else {
                                                echo "Preparado para um Desafio Médio?";
                                            }
                                        ?>
            </p>
            <?php
                if(isset($_SESSION['acertos'])){
                    echo $_SESSION['acertos'];
                    unset($_SESSION['acertos']);
                }
            ?>
                <article class="form-card">
                    <form class="form-formulario" action="assets/conteudo/quiz/op_medio.php" method="post">

                        <div class="pergunta">
                            <h3 class="pergunta-quest">Pergunta 01</h3>
                            <h5 class="quest">Which sentence is correct?</h5>
                            <div class="form-check">
                                <div class="quest-div">
                                    <input class="form-check-input" type="radio" value="opt1" name="perg1" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">A - She don't like coffee.</label>
                                </div>
                                <div class="quest-div">
                                    <input class="form-check-input" type="radio" value="opt2" name="perg1" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">B - She doesn't likes coffee.</label>
                                </div>
                                <div class="quest-div">
                                    <input class="form-check-input" type="radio" value="opt3" name="perg1" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">C - She doesn't like coffee.</label>
                                </div>
                                <div class="quest-div">
                                    <input class="form-check-input" type="radio" value="opt4" name="perg1" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">D - She not like coffee.</label>
                                </div>
                                <div class="quest-div">
                                    <input class="form-check-input" type="radio" value="opt5" name="perg1" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">E - She isn't like coffee.</label>
                                </div>
                            </div>
                        </div>

                        <div class="pergunta">
                            <h3 class="pergunta-quest">Pergunta 02</h3>
                            <h5 class="quest">Choose the correct preposition to complete the sentence: "I will meet you ___ the airport."</h5>
                            <div class="form-check">
                                <div class="quest-div">
                                    <input class="form-check-input" type="radio" value="opt1" name="perg2" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">A - in</label>
                                </div>
                                <div class="quest-div">
                                    <input class="form-check-input" type="radio" value="opt2" name="perg2" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">B - at</label>
                                </div>
                                <div class="quest-div">
                                    <input class="form-check-input" type="radio" value="opt3" name="perg2" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">C - on</label>
                                </div>
                                <div class="quest-div">
                                    <input class="form-check-input" type="radio" value="opt4" name="perg2" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">D - by</label>
                                </div>
                                <div class="quest-div">
                                    <input class="form-check-input" type="radio" value="opt5" name="perg2" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">E - with</label>
                                </div>
                            </div>
                        </div>

                        <div class="pergunta">
                            <h3 class="pergunta-quest">Pergunta 03</h3>
                            <h5 class="quest">Choose the correct option to complete the sentence: "He has been working here ___ 2015."</h5>
                            <div class="form-check">
                                <div class="quest-div">
                                    <input class="form-check-input" type="radio" value="opt1" name="perg3" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">A - since</label>
                                </div>
                                <div class="quest-div">
                                    <input class="form-check-input" type="radio" value="opt2" name="perg3" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">B - for</label>
                                </div>
                                <div class="quest-div">
                                    <input class="form-check-input" type="radio" value="opt3" name="perg3" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">C - from</label>
                                </div>
                                <div class="quest-div">
                                    <input class="form-check-input" type="radio" value="opt4" name="perg3" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">D - at</label>
                                </div>
                                <div class="quest-div">
                                    <input class="form-check-input" type="radio" value="opt5" name="perg3" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">E - by</label>
                                </div>
                            </div>
                        </div>

                        <div class="pergunta">
                            <h3 class="pergunta-quest">Pergunta 04</h3>
                            <h5 class="quest">Which word best completes the sentence: "She is ___ than her brother."</h5>
                            <div class="form-check">
                                <div class="quest-div">
                                    <input class="form-check-input" type="radio" value="opt1" name="perg4" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">A - tallest</label>
                                </div>
                                <div class="quest-div">
                                    <input class="form-check-input" type="radio" value="opt2" name="perg4" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">B - more tall</label>
                                </div>
                                <div class="quest-div">
                                    <input class="form-check-input" type="radio" value="opt3" name="perg4" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">C - taller</label>
                                </div>
                                <div class="quest-div">
                                    <input class="form-check-input" type="radio" value="opt4" name="perg4" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">D - tall</label>
                                </div>
                                <div class="quest-div">
                                    <input class="form-check-input" type="radio" value="opt5" name="perg4" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">E - the tallest</label>
                                </div>
                            </div>
                        </div>

                        <div class="pergunta">
                            <h3 class="pergunta-quest">Pergunta 05</h3>
                            <h5 class="quest">Choose the correct form of the verb to complete the sentence: "If I ___ rich, I would travel the world."</h5>
                            <div class="form-check">
                                <div class="quest-div">
                                    <input class="form-check-input" type="radio" value="opt1" name="perg5" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">A - am</label>
                                </div>
                                <div class="quest-div">
                                    <input class="form-check-input" type="radio" value="opt2" name="perg5" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">B - was</label>
                                </div>
                                <div class="quest-div">
                                    <input class="form-check-input" type="radio" value="opt3" name="perg5" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">C - were</label>
                                </div>
                                <div class="quest-div">
                                    <input class="form-check-input" type="radio" value="opt4" name="perg5" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">D - is</label>
                                </div>
                                <div class="quest-div">
                                    <input class="form-check-input" type="radio" value="opt5" name="perg5" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">E - be</label>
                                </div>
                            </div>
                        </div>

                        <input class="form-btn" type="submit" value="Enviar">
                        </form>
                </article>
        </section>
    </div>