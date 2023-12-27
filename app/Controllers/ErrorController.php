<?php

class ErrorController {

    public $router ;

    function show($viewname,$viewData=[]) {
        $BASE_URL=$_SERVER['BASE_URI'];
        $router=$this->router ;

        $recipeModel=new Recette() ;
        $recipesList=$recipeModel->findAll();
        $viewData['recipesList']=$recipesList ;

        require __DIR__.'/../Views/header.tpl.php' ;
        require __DIR__."/../Views/$viewname.tpl.php" ;
        require __DIR__.'/../Views/footer.tpl.php' ;
    }

    function error404() {
        $this->show('error') ;
    }

    function __construct($router) {
        $this->router=$router ;
    }
}

