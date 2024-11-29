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
                                                echo "Preparado para um Desafio Difícil?";
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
                    <form class="form-formulario" action="assets/conteudo/quiz/op_dificil.php" method="post">

                        <div class="pergunta">
                            <h3 class="pergunta-quest">Pergunta 01</h3>
                            <h5 class="quest">Identify the sentence with correct parallel structure.</h5>
                            <div class="form-check">
                                <div class="quest-div">
                                    <input class="form-check-input" type="radio" value="opt1" name="perg1" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">A - She enjoys reading, to jog, and cooking.</label>
                                </div>
                                <div class="quest-div">
                                    <input class="form-check-input" type="radio" value="opt2" name="perg1" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">B - She enjoys reading, jogging, and cooking.</label>
                                </div>
                                <div class="quest-div">
                                    <input class="form-check-input" type="radio" value="opt3" name="perg1" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">C - She enjoys to read, jogging, and to cook.</label>
                                </div>
                                <div class="quest-div">
                                    <input class="form-check-input" type="radio" value="opt4" name="perg1" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">D - She enjoys reading, jogging, and to cook.</label>
                                </div>
                                <div class="quest-div">
                                    <input class="form-check-input" type="radio" value="opt5" name="perg1" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">E - She enjoys to read, jog, and cooking.</label>
                                </div>
                            </div>
                        </div>

                        <div class="pergunta">
                            <h3 class="pergunta-quest">Pergunta 02</h3>
                            <h5 class="quest">Which of the following sentences uses the subjunctive mood correctly?</h5>
                            <div class="form-check">
                                <div class="quest-div">
                                    <input class="form-check-input" type="radio" value="opt1" name="perg2" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">A - If I was you, I would take the job.</label>
                                </div>
                                <div class="quest-div">
                                    <input class="form-check-input" type="radio" value="opt2" name="perg2" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">B - If she were here, she could help us.</label>
                                </div>
                                <div class="quest-div">
                                    <input class="form-check-input" type="radio" value="opt3" name="perg2" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">C - I wish he was more careful.</label>
                                </div>
                                <div class="quest-div">
                                    <input class="form-check-input" type="radio" value="opt4" name="perg2" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">D - He acts as if he is the boss.</label>
                                </div>
                                <div class="quest-div">
                                    <input class="form-check-input" type="radio" value="opt5" name="perg2" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">E - I demand that he apologizes immediately.</label>
                                </div>
                            </div>
                        </div>

                        <div class="pergunta">
                            <h3 class="pergunta-quest">Pergunta 03</h3>
                            <h5 class="quest">Choose the correct option to complete the sentence: "Hardly ___ finished the exam when the bell rang."</h5>
                            <div class="form-check">
                                <div class="quest-div">
                                    <input class="form-check-input" type="radio" value="opt1" name="perg3" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">A - I had</label>
                                </div>
                                <div class="quest-div">
                                    <input class="form-check-input" type="radio" value="opt2" name="perg3" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">B - had I</label>
                                </div>
                                <div class="quest-div">
                                    <input class="form-check-input" type="radio" value="opt3" name="perg3" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">C - I have</label>
                                </div>
                                <div class="quest-div">
                                    <input class="form-check-input" type="radio" value="opt4" name="perg3" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">D - have I</label>
                                </div>
                                <div class="quest-div">
                                    <input class="form-check-input" type="radio" value="opt5" name="perg3" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">E - I did</label>
                                </div>
                            </div>
                        </div>

                        <div class="pergunta">
                            <h3 class="pergunta-quest">Pergunta 04</h3>
                            <h5 class="quest">Identify the sentence with correct usage of the past perfect tense.</h5>
                            <div class="form-check">
                                <div class="quest-div">
                                    <input class="form-check-input" type="radio" value="opt1" name="perg4" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">A - By the time he arrived, the train left.</label>
                                </div>
                                <div class="quest-div">
                                    <input class="form-check-input" type="radio" value="opt2" name="perg4" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">B - By the time he arrives, the train had left.</label>
                                </div>
                                <div class="quest-div">
                                    <input class="form-check-input" type="radio" value="opt3" name="perg4" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">C - By the time he arrived, the train had left.</label>
                                </div>
                                <div class="quest-div">
                                    <input class="form-check-input" type="radio" value="opt4" name="perg4" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">D - By the time he arrived, the train has left.</label>
                                </div>
                                <div class="quest-div">
                                    <input class="form-check-input" type="radio" value="opt5" name="perg4" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">E - By the time he arrives, the train leaves.</label>
                                </div>
                            </div>
                        </div>

                        <div class="pergunta">
                            <h3 class="pergunta-quest">Pergunta 05</h3>
                            <h5 class="quest">Which of the following sentences contains an error in subject-verb agreement?</h5>
                            <div class="form-check">
                                <div class="quest-div">
                                    <input class="form-check-input" type="radio" value="opt1" name="perg5" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">A - The committee meets every Wednesday.</label>
                                </div>
                                <div class="quest-div">
                                    <input class="form-check-input" type="radio" value="opt2" name="perg5" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">B - Each of the students have completed their projects.</label>
                                </div>
                                <div class="quest-div">
                                    <input class="form-check-input" type="radio" value="opt3" name="perg5" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">C - Neither of the answers is correct.</label>
                                </div>
                                <div class="quest-div">
                                    <input class="form-check-input" type="radio" value="opt4" name="perg5" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">D - The data suggests a different conclusion.</label>
                                </div>
                                <div class="quest-div">
                                    <input class="form-check-input" type="radio" value="opt5" name="perg5" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">E - Everyone on the team is doing their best.</label>
                                </div>
                            </div>
                        </div>

                        <input class="form-btn" type="submit" value="Enviar">
                        </form>
                </article>
        </section>
    </div>