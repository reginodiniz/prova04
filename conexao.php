<?php
    
     try
           {  
             $coneccao = new PDO('mysql:host=localhost;dbname=quiz', 'root', '');
             $coneccao->exec('set names utf8');
           }
    catch(PDOException $e)
                          {      
                             echo 'Erro ao conectar com o MySQL: ' .$e->getMessage();
                          }


                  ?>    