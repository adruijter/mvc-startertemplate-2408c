<?php

class Zangeressen extends BaseController
{
    private $zangeressenModel;

    public function __construct()
    {
         $this->zangeressenModel = $this->model('ZangeressenModel');
    }

    public function index()
    {
       /**
        * Hier halen we alle smartphones op uit de database
        */
       $result = $this->zangeressenModel->getAllZangeressen();
       
       /**
        * Het $data-array geeft informatie mee aan de view-pagina
        */
       $data = [
            'title' => 'Top 5 rijkste zangeressen ter wereld',
            'zangeressen' => $result
       ];

         /**
          * Met de view-method uit de BaseController-class wordt de view
          * aangeroepen met de informatie uit het $data-array
          */
       $this->view('zangeressen/index', $data); 
    }


     public function delete($id)
     {
          $result =$this->zangeressenModel->deleteZangeres($id);

          $data = [
               'title' => ($result) ? 'Het record is verwijderd' : 'Het record kan niet worden verwijderd'
          ];

          $this->view('zangeressen/delete', $data);

          header('Refresh:3; ' . URLROOT . '/zangeressen/index');
     }

}