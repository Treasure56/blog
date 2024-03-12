<?php if (isset($_GET['error'])) { ?>
    <div class="bg-red-200 border border-red-500 text-red-800 p-2 rounded">
        <!-- <button class="" data-bs-dismiss="alert"></button> -->
        <p>
            <?= $_GET['error']; ?>
        </p>
    </div>
<?php } else if (isset($_GET['success'])) { ?>
        <div class="bg-green-200 border border-green-500 text-green-800 p-2 rounded">
            <!-- <button class="btn-close" data-bs-dismiss="alert"></button> -->
            <p>
            <?= $_GET['success']; ?>
            </p>
        </div>
<?php } ?>