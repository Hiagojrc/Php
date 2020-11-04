<?php
   require("../domain/pessoa.php");
   header("Content-type: application/json");

   $pessoas = [];

   $pessoa = new Pessoa (); 
   $pessoa->setIdPessoa (1);
   $pessoa->setNome (" Andre Silva ");
   $pessoa->setTelefone ("19 99850-4013");
   $pessoas[0] = $pessoa;

   $pessoa = new Pessoa (); 
   $pessoa->setIdPessoa (2);
   $pessoa->setNome (" Maria Rita ");
   $pessoa->setTelefone ("19 99754-5010");
   $pessoas[1] = $pessoa;

   $pessoa = new Pessoa (); 
   $pessoa->setIdPessoa (3);
   $pessoa->setNome (" Sula Miranda ");
   $pessoa->setTelefone ("19 99315-3340");
   $pessoas[2] = $pessoa;

   echo json_encode($pessoas);
   ?>

   // var_dump ($pessoas); Mostra todos da lista

  /* Metados de for para percorrer vetor ou lista
   for ($i = 0; $i<count($pessoas); $i++){
       echo $pessoas[$i]->getIdPessoa();
       echo $pessoas[$i]->getNome();
       echo $pessoas[$i]->getTelefone()."<br>";     
   } 
   */

  /*

   foreach ($pessoas as $p){
    echo $p->getIdPessoa();
    echo $p->getNome();
    echo $p->getTelefone()."<br>";     
}
*/


    