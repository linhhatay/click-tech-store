<style>
    #customers {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    #customers td,
    #customers th {
        border: 1px solid #ddd;
        padding: 8px;
    }

    #customers tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    #customers tr:hover {
        background-color: #ddd;
    }

    #customers th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #04AA6D;
        color: white;
    }
</style>


<h1>Danh sách sản phẩm</h1>

<table id="customers">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Image</th>
        <th>Price</th>
        <th>Description</th>
        <th colspan="2">Actions</th>
    </tr>
    <?php if (!empty($products)) {
        foreach ($products as $product) { ?>
            <tr>
                <td><?= $product['id'] ?></td>
                <td><?= $product['name'] ?></td>
                <td><img style="max-height: 100px; max-width: 100px;" src="http://localhost/PHP/src/storage/uploads/img/products/<?= $product['image'] ?>" alt=""></td>
                <td><?= $product['price'] ?></td>
                <td><?= $product['description'] ?></td>
                <td>Sửa</td>
                <td>
                    <form action="http://localhost/PHP/src/public/product/<?= $product['id'] ?>" method="POST">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="submit" value="Xóa">
                    </form>
                </td>
            </tr>
    <?php }
    }
    ?>
</table>