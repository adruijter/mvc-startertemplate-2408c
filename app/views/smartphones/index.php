<?php require   APPROOT . '/views/includes/header.php'; ?>

<div class="container mt-3">

    <div class="row">

        <div class="col-2"></div>
        <div class="col-8">        
            <h3><?= $data['title']; ?>!!!!!!!!!!!!!!!!!!!!!!!!!!!</h3>
        </div>
        <div class="col-2"></div>
    </div>
    <!-- begin tabel -->
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Merk</th>
                        <th>Model</th>
                        <th>Prijs</th>
                        <th>Geheugen (GB)</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($data['smartphones'] as $smartphone) : ?>
                        <tr>
                            <td><?= $smartphone->Merk; ?></td>
                            <td><?= $smartphone->Model; ?></td>
                            <td><?= $smartphone->Prijs; ?></td>
                            <td><?= $smartphone->Geheugen; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <div class="col-2"></div>
    </div>
    <!-- eind tabel -->

<?php require   APPROOT . '/views/includes/footer.php'; ?>