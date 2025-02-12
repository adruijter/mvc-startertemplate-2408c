<?php

class Smartphones extends BaseController
{

    public function index()
    {
       /**
        * Het $data-array geeft informatie mee aan de view-pagina
        */
       $data = [
            'title' => 'Overzicht smartphones'
       ];

         /**
          * Met de view-method uit de BaseController-class wordt de view
          * aangeroepen met de informatie uit het $data-array
          */
       $this->view('smartphones/index', $data); 
    }

}