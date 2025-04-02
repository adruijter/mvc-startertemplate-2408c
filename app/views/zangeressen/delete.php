<?php require   APPROOT . '/views/includes/header.php'; ?>

<div class="container mt-3">

    <div class="row">

        <div class="col-1"></div>
        <div class="col-10 text-center text-success">        
            <h3><?= $data['title']; ?></h3>
            <div class="alert alert-danger" role="alert">
                A simple danger alert—check it out!
            </div>
        </div>
        <div class="col-1"></div>
    </div>

<?php require   APPROOT . '/views/includes/footer.php'; ?>