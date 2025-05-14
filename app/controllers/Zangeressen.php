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

    public function delete($Id)
    {
          $result = $this->zangeressenModel->delete($Id);
          header('Location: ' . URLROOT . '/zangeressen/index');
    }


    public function create()
    {
          if ($_SERVER["REQUEST_METHOD"] == "POST") {
               
               if (empty($_POST['naam']) || empty($_POST['nettowaarde']) || empty($_POST['land']) || empty($_POST['mobiel']) || empty($_POST['leeftijd'])) {
                    echo '<div class="alert alert-danger text-center" role="alert"><h4>Vul alle velden in</h4></div>';
                    header('Refresh: 3; URL=' . URLROOT . '/zangeressen/create');
                    exit;
               }
               $this->zangeressenModel->create($_POST);
               echo '<div class="alert alert-success text-center" role="alert"><h4>Zangeres toegevoegd</h4></div>';
               header('Refresh: 3; URL=' . URLROOT . '/zangeressen/index');
          }

          $data = [
               'title' => 'Nieuwe zangeres toevoegen',
          ];

          $this->view('zangeressen/create', $data);
    }

}