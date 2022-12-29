<?php
include_once "./inc/header.php";
include_once "./inc/navbar.php";
?>

<main>
    <div class="text-center">
        <h2>Sport Superstar</h2>
        <h5>Everything that you need to stay active</h5>
    </div>

    <h5>Trending Products</h5>

    <div class="row mb-5 pb-3">

        <?php

        $products = [
            [
                'name' => 'Mike Running Shoes',
                'description' => 'Very nice product',
                'price' => '$54.00',
                'image' => 'https://cdn.pixabay.com/photo/2014/05/18/11/26/shoes-346986__340.jpg',
                'rating' => 5,
            ],
            [
                'name' => 'Tennis Edge',
                'description' => 'Description here...',
                'price' => '$38.00',
                'image' => 'https://cdn.pixabay.com/photo/2021/06/04/06/54/racket-6308994__340.jpg',
                'rating' => 4,
            ],
            [
                'name' => 'Weight It',
                'description' => 'Mmm... expansive!',
                'price' => '$108.00',
                'image' => 'https://cdn.pixabay.com/photo/2016/08/31/22/20/weights-1634747__340.jpg',
                'rating' => 5,
            ],
        ];

        $len = count($products);

        // for ($i = 0; $i < $len; $i++) {

        foreach ($products as $item) {
            echo "<div class=\"col\">";
            echo "<div class=\"card\">";
            echo
            "<img src=\"{$item['image']}\" class=\"card-img-top\" alt=\"{$item['name']}\">";
            echo "<div class=\"card-body text-dark
        \">";
            echo " <h5 class=\"card-title\">{$item['name']}</h5>";
            echo "<p class=\"card-text \">{$item['price']}</p> ";
            echo "<p class=\"card-text\">{$item['description']}</p>";
            echo "<p class=\"card-text \">rating: {$item['rating']}</p>";
            echo "<a href=\"#\" class=\"btn btn-primary\">View Product</a>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
            // }
        }
        ?>

        <h5>Our Special Offers</h5>
</main>

<?php
include_once "./inc/footer.php";
