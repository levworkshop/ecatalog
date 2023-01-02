<?php
include_once "./inc/header.php";
include_once "./inc/navbar.php";
?>

<main class="p-4 bg-dark text-white shadow">

    <div class="text-center">
        <h2>Product Page</h2>
        <h5>
            <?php
            if (isset($_GET['prod']) && !empty($_GET['prod'])) {
                echo $_GET['prod'];
            }
            ?>
        </h5>
    </div>

</main>

<?php
include_once "./inc/footer.php";
