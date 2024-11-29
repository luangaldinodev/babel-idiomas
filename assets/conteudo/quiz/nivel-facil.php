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
                                                echo "Preparado para um Desafio Fácil?";
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
                    <form class="form-formulario" action="assets/conteudo/quiz/op_facil.php" method="post">

                        <div class="pergunta">
                            <h3 class="pergunta-quest">Pergunta 01</h3>
                            <h5 class="quest">What is the correct form of the verb "to be" in the sentence: "She ___ a teacher"?</h5>
                            <div class="form-check">
                                <div class="quest-div">
                                    <input class="form-check-input" type="radio" value="opt1" name="perg1" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">A - am</label>
                                </div>
                                <div class="quest-div">
                                    <input class="form-check-input" type="radio" value="opt2" name="perg1" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">B - is</label>
                                </div>
                                <div class="quest-div">
                                    <input class="form-check-input" type="radio" value="opt3" name="perg1" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">C - are</label>
                                </div>
                                <div class="quest-div">
                                    <input class="form-check-input" type="radio" value="opt4" name="perg1" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">D - be</label>
                                </div>
                                <div class="quest-div">
                                    <input class="form-check-input" type="radio" value="opt5" name="perg1" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">E - were</label>
                                </div>
                            </div>
                        </div>

                        <div class="pergunta">
                            <h3 class="pergunta-quest">Pergunta 02</h3>
                            <h5 class="quest">Choose the correct option to complete the sentence: "I usually ___ breakfast at 7 a.m."</h5>
                            <div class="form-check">
                                <div class="quest-div">
                                    <input class="form-check-input" type="radio" value="opt1" name="perg2" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">A - eat</label>
                                </div>
                                <div class="quest-div">
                                    <input class="form-check-input" type="radio" value="opt2" name="perg2" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">B - eats</label>
                                </div>
                                <div class="quest-div">
                                    <input class="form-check-input" type="radio" value="opt3" name="perg2" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">C - eating</label>
                                </div>
                                <div class="quest-div">
                                    <input class="form-check-input" type="radio" value="opt4" name="perg2" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">D - ate</label>
                                </div>
                                <div class="quest-div">
                                    <input class="form-check-input" type="radio" value="opt5" name="perg2" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">E - eaten</label>
                                </div>
                            </div>
                        </div>

                        <div class="pergunta">
                            <h3 class="pergunta-quest">Pergunta 03</h3>
                            <h5 class="quest">Which word correctly completes the sentence: "They ___ to the park every Sunday"?</h5>
                            <div class="form-check">
                                <div class="quest-div">
                                    <input class="form-check-input" type="radio" value="opt1" name="perg3" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">A - goes</label>
                                </div>
                                <div class="quest-div">
                                    <input class="form-check-input" type="radio" value="opt2" name="perg3" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">B - going</label>
                                </div>
                                <div class="quest-div">
                                    <input class="form-check-input" type="radio" value="opt3" name="perg3" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">C - gone</label>
                                </div>
                                <div class="quest-div">
                                    <input class="form-check-input" type="radio" value="opt4" name="perg3" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">D - go</label>
                                </div>
                                <div class="quest-div">
                                    <input class="form-check-input" type="radio" value="opt5" name="perg3" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">E - goed</label>
                                </div>
                            </div>
                        </div>

                        <div class="pergunta">
                            <h3 class="pergunta-quest">Pergunta 04</h3>
                            <h5 class="quest">Choose the correct word to complete the sentence: "This is my ___."</h5>
                            <div class="form-check">
                                <div class="quest-div">
                                    <input class="form-check-input" type="radio" value="opt1" name="perg4" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">A - book</label>
                                </div>
                                <div class="quest-div">
                                    <input class="form-check-input" type="radio" value="opt2" name="perg4" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">B - books</label>
                                </div>
                                <div class="quest-div">
                                    <input class="form-check-input" type="radio" value="opt3" name="perg4" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">C - booking</label>
                                </div>
                                <div class="quest-div">
                                    <input class="form-check-input" type="radio" value="opt4" name="perg4" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">D - booked</label>
                                </div>
                                <div class="quest-div">
                                    <input class="form-check-input" type="radio" value="opt5" name="perg4" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">E - booker</label>
                                </div>
                            </div>
                        </div>

                        <div class="pergunta">
                            <h3 class="pergunta-quest">Pergunta 05</h3>
                            <h5 class="quest">Which word correctly completes the sentence: "He ___ very happy today."</h5>
                            <div class="form-check">
                                <div class="quest-div">
                                    <input class="form-check-input" type="radio" value="opt1" name="perg5" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">A - are</label>
                                </div>
                                <div class="quest-div">
                                    <input class="form-check-input" type="radio" value="opt2" name="perg5" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">B - be</label>
                                </div>
                                <div class="quest-div">
                                    <input class="form-check-input" type="radio" value="opt3" name="perg5" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">C - were</label>
                                </div>
                                <div class="quest-div">
                                    <input class="form-check-input" type="radio" value="opt4" name="perg5" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">D - am</label>
                                </div>
                                <div class="quest-div">
                                    <input class="form-check-input" type="radio" value="opt5" name="perg5" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">E - is</label>
                                </div>
                            </div>
                        </div>

                        <input class="form-btn" type="submit" value="Enviar">
                        </form>
                </article>
        </section>
    </div>