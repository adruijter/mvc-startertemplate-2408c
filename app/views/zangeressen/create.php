<?php require   APPROOT . '/views/includes/header.php'; ?>

<div class="container mt-3">

    <div class="row mb-3">

        <div class="col-3"></div>
        <div class="col-6 text-begin text-warning">        
            <h3><?= $data['title']; ?></h3>
        </div>
        <div class="col-3"></div>
    </div>
    
    <!-- begin tabel -->
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">

            <form action="<?= URLROOT; ?>/zangeressen/create" method="post">
                <div class="mb-3">
                    <label for="name" class="form-label">Naam</label>
                    <input name="naam" type="text" class="form-control" id="name">
                </div>
                <div class="mb-3">
                    <label for="nettowaarde" class="form-label">Nettowaarde (miljoen)</label>
                    <input name="nettowaarde" type="text" class="form-control" id="nettowaarde">
                </div>
                <div class="mb-3">
                    <label for="land" class="form-label">land</label>
                    <input name="land" type="text" class="form-control" id="land">
                </div>
                <div class="mb-3">
                    <label for="mobiel" class="form-label">mobiel</label>
                    <input name="mobiel" type="tel" class="form-control" id="mobiel">
                </div>
                <div class="mb-3">
                    <label for="leeftijd" class="form-label">leeftijd</label>
                    <input name="leeftijd" type="text" class="form-control" id="leeftijd">
                </div>                
                
                <button type="submit" class="btn btn-primary">Verstuur</button>
            </form>
            
            <a href="<?= URLROOT; ?>/homepages/index"><i class="bi bi-arrow-left"></i></a>
        </div>
        <div class="col-3"></div>
    </div>
    <!-- eind tabel -->

<?php require   APPROOT . '/views/includes/footer.php'; ?>