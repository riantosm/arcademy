web ini dibuat dengan bahasa pemograman php dan database mysql.
untuk mengakses halaman utamanya adalah index.php
untuk setting con ke database koneksi.php

untuk jawaban nomer 6 a
>select DISTINCT cashier.name as cashier, product.name as product, category.name as category, product.price as price FROM product, cashier, category WHERE cashier.id_cashier=product.id_cashier GROUP BY product.id_product