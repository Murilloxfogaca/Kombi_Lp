<?php 
    $rank = array();
    function rowRank($nRank,$nomeLoja,$qtd,$nomeFuncionario) {
        $temp = array('nRank' => $nRank, 'nomeLoja' => $nomeLoja, 'qtd' => $qtd, 'nomeFuncionario' => $nomeFuncionario); 
        return $temp;
    }
    for ($i=1; $i < 11; $i++) { 
        $nomeLoja = 'NOME DA LOJA '.$i;
       $rank[$i] = rowRank($i,$nomeLoja,'01','Matheus');
    }
 ?>

 
<section id="rank" class="py-5 my-5">
        <div class="container">
            <div class="row col-12">
                <div class="col-md-6">
                    <div class="divTable">
                        <div class="divTableBody">
                            <?php foreach ($rank as $key) { ?>
                                <div class="divTableRow <?php if($key['nRank'] === 1){ echo 'active'; } ?>">
                                    <div class="divTableCell col-colocao text-center <?php if(($key['nRank'] == 1) || ($key['nRank'] == 2) || ($key['nRank'] == 3)){ echo 'first'; } ?>"><?php echo $key['nRank']; ?></div>
                                    <div class="divTableCell col-nome"><?php echo $key['nomeLoja']; ?></div>
                                    <div class="divTableCell col-qtd text-center px-3"><?php echo $key['qtd']; ?></div>
                                    <div class="divTableCell col-personagem text-center "><?php echo $key['nomeFuncionario']; ?></div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 my-3 my-md-0">
                    <h2 class="display-1">SELECT <br>RANK</h2>
                    <p><b><<<<< Dnec malesuada arcu ullamcorper.</b></p>
                </div>
            </div>
        </div>
    </section>