<?php //echo header; ?>
<section  class="bg-topo text-white mt-5" >
        <div class="container">
            <div class="row col-12 align-items-center justify-content-center">
                <div class="col-md-7">
                    <h2 class="display-1">ADIPISC<br>NG ELIT</h2>
                </div>
                <div class="col-md-5" id="contato">
                    <form method="post" role="form" enctype="multipart/form-data" action="#contato">
                        <div class="row">
                            <div class="col-md-12">
                                <?php $message = "";
                                    if(isset($_POST['nome']) || isset($_POST['email']) || isset($_POST['celular']) ){ 
                                        $input = $_POST['nome']; 
                                        $message = "Obrigado pelo cadastro ".$input;
                                        echo '<div class="alert alert-success" role="alert">'.$message.'</div>';
                                    } 
?>
                                <div class="form-group">
                                    <label for="nome">NOME COMPLETO</label>
                                    <input type="text" name="nome" id="nome" class="rounded form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="email">E-MAIL</label>
                                    <input type="email" id="email" name="email" class="rounded  form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="celular">CELULAR</label>
                                    <input type="text" id="celular" name="celular" class="rounded form-control" onkeypress="mask(this, mphone);" onblur="mask(this, mphone);" required>
                                </div>
                                <div class="form-group">
                                    <label for="terms" id="termos">
                                        <input class="form-check-input position-static" type="checkbox" id="terms" value="option1" aria-label="..." required>ESTOU DE ACORDO COM AS <a id="btn-modal-1" class="text-white">POLÍTICAS</a></label>
                                </div>
                                <div class="form-group">
                                    <button id="submit" class="btn rounded btn-lg">ENVIAR AGORA >></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <footer class="py-5">
        <div class="container text-white">
            <a id="btn-modal-2" class="text-white">POLÍTICA DE PRIVACIDADE</a>
            <p class="text-right">@2021 KOMBI AGÊNCIA DIGITAL. All Rights Reserved.</p>
        </div>
    </footer>

    <div class="overlay" id="overlay"></div>
    <div class="modal py-5" id="modal">
      <button class="btn-danger btn" id="close-btn">X</button>
       <h3 class="mt-3">Políticas</h3>
       <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc lacinia elementum imperdiet. Maecenas a urna molestie, lobortis mauris a, pretium augue. Morbi eget risus nec metus tincidunt pulvinar nec non est. Cras sit amet dapibus ante, ac tincidunt nibh. Integer hendrerit rhoncus ligula, ut interdum felis posuere vitae. Praesent fermentum hendrerit nunc non porttitor. Duis non urna nec tellus pellentesque porta vitae sed purus.</p>
       <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc lacinia elementum imperdiet. Maecenas a urna molestie, lobortis mauris a, pretium augue. Morbi eget risus nec metus tincidunt pulvinar nec non est. Cras sit amet dapibus ante, ac tincidunt nibh. Integer hendrerit rhoncus ligula, ut interdum felis posuere vitae. Praesent fermentum hendrerit nunc non porttitor. Duis non urna nec tellus pellentesque porta vitae sed purus.</p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="js/custom.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    </body>
    </html>