<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>product || exam pauji</title>
</head>
<body>
    <h1>Daftar Produk</h1>
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Deskripsion</th>
                <th>Price</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach($products as $product) { ?>
                <tr>
                    <td><?=$product['name']?></td>
                    <td><?=$product['description']?></td>
                    <td><?=$product['price']?></td>
                </tr>
                <?php } ?>
        </tbody>
    </table>
</body>
</html>
