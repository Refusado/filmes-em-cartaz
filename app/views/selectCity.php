<?php
require_once realpath(__DIR__ . '/../models/getCity.php');

function showCitySelector(){
  global $_cityInputName;
  echo
  "<form action='./' method='get'>
    <select id='city' name='city'>
      <option value='{$_SESSION['chosenCity']}'>$_cityInputName</option>
      <option value='sao_paulo'>SÃO PAULO</option>
      <option value='aracaju'>ARACAJU</option>
      <option value='barueri'>BARUERI</option>
      <option value='belo_horizonte'>BELO HORIZONTE</option>
      <option value='betim'>BETIM</option>
      <option value='braganca_paulista'>BRAGANÇA PAULISTA</option>
      <option value='brasilia'>BRASÍLIA</option>
      <option value='camacari'>CAMAÇARI</option>
      <option value='campinas'>CAMPINAS</option>
      <option value='campo_grande'>CAMPO GRANDE</option>
      <option value='canoas'>CANOAS</option>
      <option value='cotia'>COTIA</option>
      <option value='cuiaba'>CUIABÁ</option>
      <option value='curitiba'>CURITIBA</option>
      <option value='florianopolis'>FLORIANÓPOLIS</option>
      <option value='foz_do_iguacu'>FOZ DO IGUAÇU</option>
      <option value='goiania'>GOIÂNIA</option>
      <option value='guarulhos'>GUARULHOS</option>
      <option value='itabuna'>ITABUNA</option>
      <option value='jacarei'>JACAREÍ</option>
      <option value='juazeiro'>JUAZEIRO</option>
      <option value='lages'>LAGES</option>
      <option value='londrina'>LONDRINA</option>
      <option value='mogi_das_cruzes'>MOGI DAS CRUZES</option>
      <option value='mogi_guacu'>MOGI GUAÇU</option>
      <option value='natal'>NATAL</option>
      <option value='niteroi'>NITERÓI</option>
      <option value='novo_hamburgo'>NOVO HAMBURGO</option>
      <option value='osasco'>OSASCO</option>
      <option value='palmas'>PALMAS</option>
      <option value='porto_alegre'>PORTO ALEGRE</option>
      <option value='praia_grande'>PRAIA GRANDE</option>
      <option value='recife'>RECIFE</option>
      <option value='ribeirao_preto'>RIBEIRÃO PRETO</option>
      <option value='rio_de_janeiro'>RIO DE JANEIRO</option>
      <option value='salvador'>SALVADOR</option>
      <option value='santo_andre'>SANTO ANDRÉ</option>
      <option value='santos'>SANTOS</option>
      <option value='sao_bernardo_do_campo'>SÃO BERNARDO DO CAMPO</option>
      <option value='sao_caetano_do_sul'>SÃO CAETANO DO SUL</option>
      <option value='sao_goncalo'>SÃO GONÇALO</option>
      <option value='sao_jose_dos_campos'>SÃO JOSÉ DOS CAMPOS</option>
      <option value='sao_jose_dos_pinhais'>SÃO JOSÉ DOS PINHAIS</option>
      <option value='taguatinga'>TAGUATINGA</option>
      <option value='taubate'>TAUBATÉ</option>
      <option value='uberlandia'>UBERLÂNDIA</option>
      <option value='varginha'>VARGINHA</option>
      <option value='vila_velha'>VILA VELHA</option>
      <option value='vitoria'>VITÓRIA</option>
    </select>
    <input type='submit' value='Pesquisar'>
</form>";
}
