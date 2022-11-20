<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php
      $noticias = [
        [
            "Ômicron BQ.1: nova subvariante da covid provoca primeira morte em SP",
            "https://t.ctcdn.com.br/6saT5n0kvXxB6C3nPDKbtWtPI4k=/720x405/smart/filters:format(webp)/i448726.jpeg",
            "Nesta terça-feira (8), foi confirmada a primeira morte desencadeada pela nova subvariante Ômicron BQ.1 na cidade de São Paulo. A paciente que foi ao óbito em decorrência da covid-19 tinha 72 anos e apresentava comorbidades, segundo a Secretaria Estadual da Saúde."
        ],
        [
            "Starlink para Viagens: novidade da SpaceX chega ao Brasil",
            "https://t.ctcdn.com.br/mmro9xXLAz4-jREXTAXA4gU05iE=/720x405/smart/filters:format(webp)/i575535.jpeg",
            "Os usuários da internet Starlink no Brasil já podem aproveitar o Starlink para Viagens, novo serviço que mantém a conexão com a rede mesmo em algum local diferente daquele em que está instalado. Em comunicado enviado por e-mail aos clientes nesta terça-feira (8), a SpaceX anuncia que o novo serviço já está disponível, permitindo uso portátil da internet em todo o continente."
        ],
        [
            "Gboard agora tem visual mais moderno para o seletor de emojis",
            "https://t.ctcdn.com.br/IFv7YZRmoBPWENlbszCTmF_-gzw=/720x405/smart/filters:format(webp)/i545523.png",
            "O Gboard, teclado oficial do Google, recebeu um grande redesenho da interface para aprimorar o seletor de emojis. Trata-se de uma importante mudança que vai reposicionar elementos da tela para otimizar o uso das carinhas, figurinhas e GIFs."
        ]
      ]
    ?>

    <?php
      foreach($noticias as $chave=>$noticia){
        ?>
        <h4>
            <?php echo $noticia[0]; ?>
        </h4>
        <p>
            <img src="<?php echo $noticia[1]; ?>">
        </p>
        <p>
            <?php echo $noticia[2]; ?>
        </p>
        <hr>
        <?php
      }
    ?>
    
  </body>
</html>