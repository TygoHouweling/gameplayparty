<?php
include('./view/admin/admin_header.php')
?>

<div class="main-content">

    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header">
                    <div class="icon icon-warning">
                        <span class="material-icons">equalizer</span>
                    </div>
                </div>
                <div class="card-content">
                    <p class="category"><strong>Visits</strong></p>
                    <h3 class="card-title"><?= $visits ?></h3>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include('./view/admin/admin_footer.php');