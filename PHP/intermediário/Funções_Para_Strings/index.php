<?php
    $conteudo = 'Ao contrário da crença popular, o Lorem Ipsum não é simplesmente texto aleatório. 
                Tem raízes numa peça de literatura clássica em Latim, de 45 AC, tornando-o com mais de 2000 anos. 
                Richard McClintock, um professor de Latim no Colégio Hampden-Sydney, na Virgínia, procurou uma das palavras em Latim mais 
                obscuras (consectetur) numa passagem Lorem Ipsum, e atravessando as cidades do mundo na literatura clássica, descobriu a sua origem. 
                Lorem Ipsum vem das secções 1.10.32 e 1.10.33 do "de Finibus Bonorum et Malorum" (Os Extremos do Bem e do Mal), por Cícero,
                escrito a 45AC. Este livro é um tratado na teoria da ética, muito popular durante a Renascença.
                A primeira linha de Lorem Ipsum, "Lorem ipsum dolor sit amet..." aparece de uma linha na secção 1.10.32.';

                // server  para recortar um string
                echo substr($conteudo,0,20);
                echo "<br>";

                $nome = 'CHESSE BURGUER';

                $nomes = explode(' ',$nome);

                print_r($nomes);

                //serve para juntar um array com um delimitador
                $nomes = implode(' ',$nomes);
                echo "<br> $nomes";
                
                $conteudo = "<h1>Não aguento mais!!!!<h1>";
                echo "<br>";
                //serve para remover tags html
                echo strip_tags($conteudo);

                //htmlentities serve para mostrar o código html na página

                echo  htmlentities('<div><div>');

?>