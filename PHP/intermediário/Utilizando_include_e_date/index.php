<?php
    /* 
    // Trabalhando com datas
    // date puxa a configuração de data atual
    //time retorna a data em Unix e pode ter expressão numerica
    //mktime retorna a data em Unix e pode ter expressão numerica
    //strtotime retorna a data em Unix e pode ter expressão numerica
    //date_default_timezone_set('') muda o fuso horário
    //date('') retorna a data de acordo com o formato escolhido
    //time()+(60*10)

    d = dia (0-31)
    D = dia da semana (Mon - Sun)
    l = se é dia da semana (Sunday - Saturday)
    m = mês (1-12)
    M = mês (Jan - Dec)
    y = ano (00-99)
    Y = ano (0000-9999)
    H = hora (00-23)
    i = minutos (00-59)
    s = segundos (00-59)
    S = th
    u = microsegundos (000000-999999)
    U = Unix Time

    ***********Include****************************************************
    //include recorta um pedaço do código
    //include_once recorta um pedaço do código e só executa uma vez
    //require recorta um pedaço do código
    //require_once recorta um pedaço do código e só executa uma vez
    //include e require são iguais, mas o include é mais flexível
    //include_once e require_once são iguais, mas o include_once é mais flexível
    //include_once e require_once são mais lentos que o include e require
    //include_once e require_once são mais seguros que o include e require
    include(header.php)
    
    
    
    
    */
    date_default_timezone_set('America/Sao_Paulo');
    $data = date('M dS,Y - H:i:s:u');
    echo $data;







?>