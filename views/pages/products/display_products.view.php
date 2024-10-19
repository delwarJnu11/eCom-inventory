<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Products</title>
</head>
<body>
    <div class="container mx-auto">
        <h2 class="text-3xl text-center text-green-500 font-semibold my-6">See All Products</h2>
        <table class="min-w-full bg-white border border-gray-300">
            <thead>
                <tr>
                    <th class="px-4 py-2 border-b border-gray-300 text-left bg-gray-200 text-gray-600 font-bold uppercase text-sm">
                        ID
                    </th>
                    <th class="px-4 py-2 border-b border-gray-300 text-left bg-gray-200 text-gray-600 font-bold uppercase text-sm">
                        Product Name
                    </th>
                    <th class="px-4 py-2 border-b border-gray-300 text-left bg-gray-200 text-gray-600 font-bold uppercase text-sm">
                        Category
                    </th>
                    <th class="px-4 py-2 border-b border-gray-300 text-left bg-gray-200 text-gray-600 font-bold uppercase text-sm">
                        Unit Price
                    </th>
                    <th class="px-4 py-2 border-b border-gray-300 text-left bg-gray-200 text-gray-600 font-bold uppercase text-sm">
                        Barcode
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($products as $product) : ?>
                    <tr class="hover:bg-gray-100">
                        <td class="px-4 py-2 border-b border-gray-300"><?= $product['id'] ?></td>
                        <td class="px-4 py-2 border-b border-gray-300"><?= $product['product_name'] ?></td>
                        <td class="px-4 py-2 border-b border-gray-300"><?= $product['cname'] ?></td>
                        <td class="px-4 py-2 border-b border-gray-300"><?= $product['unit_price'] ?> /<sub><?= $product['unit_name'] ?></sub></td>
                        <td class="px-4 py-2 border-b border-gray-300"><?= $product['barcode'] ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>

</body>
</html>