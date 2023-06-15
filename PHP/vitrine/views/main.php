<?php include "components/head.php" ?>
<?php include "components/top.php" ?>

<div class="">
    <div class="mx-auto max-w-2xl px-4 py-12 sm:px-6 sm:py-10 lg:max-w-7xl lg:px-8">
        <h2 class="text-2xl font-bold tracking-tight text-gray-900">Toutes catégories</h2>



        <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">

            <?= showCatalog($data); ?>

            

            <!-- More products... -->
        </div>
    </div>
</div>



<?php include "components/footer.php" ?>