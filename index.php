<?php 
include "Connection.php";
include "./model/product.model.php";
include "./controller/product.controller.php";
include "./view/product/product.view.php";
$products = new ProductView();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP MVC</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-gray-100 h-screen flex flex-col items-center justify-center">
    <?php include "./view/utils/navbar.utils.php";?>

    <div class="w-full max-w-4xl mt-10 px-6 transition-transform duration-300">
        <div class="bg-white shadow-md rounded-xl p-6 mb-8 transition-transform duration-300 hover:-translate-y-1">
            <h2 class="text-2xl font-bold text-gray-800 mb-4">Detail Produk</h2>
            <div class="space-y-4 bg-gray-100 py-3 px-5 rounded-xl ">
                <?php $products->find();?>
            </div>
        </div>

        <div class="bg-white shadow-md rounded-xl p-6 transition-transform duration-300 hover:-translate-y-1">
            <h2 class="text-2xl font-bold text-gray-800 mb-4">Daftar Produk</h2>
            <div class="overflow-x-auto">
                <table class="table-auto w-full border border-gray-300 rounded-lg">
                    <thead class="bg-gray-200">
                        <tr>
                            <th class="px-4 py-2 text-left text-gray-700">No.</th>
                            <th class="px-4 py-2 text-left text-gray-700">Name</th>
                            <th class="px-4 py-2 text-left text-gray-700">Price</th>
                            <th class="px-4 py-2 text-left text-gray-700">Stock</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        <?php $products->show();?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
