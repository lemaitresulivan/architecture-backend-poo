<?php

namespace ;
// namespace à remplir en fonction du projet
class CoreController {
    
    protected function show($viewName, $viewVars=array()) {

        $absoluteUrl = isset($_SERVER['BASE_URI']) ? $_SERVER['BASE_URI'] : '';
        
     
        extract($viewVars);

        // Crée une variable à partir du nom de la clé du tableau $viewVars.

        require __DIR__.'/../views/header.tpl.php';
        require __DIR__.'/../views/'.$viewName.'.tpl.php';
        require __DIR__.'/../views/footer.tpl.php';
    }