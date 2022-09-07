<?php
// Veritabanı bağlantısı
$host = "localhost";
$dbname = "innerjoin";
$user = "root";
$pass = "";


try{
    $db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8",$user,$pass);
}catch(PDOException $e){
    echo '<strong>Veritabanı Bağlantısı Başarısız Oldu</strong> : ' . $e->getMessage();
    exit;
}
// Tabloları birleştirmekte kullanacağımız fonksiyon
function multiple($sql){
    global $db;

    $sorgu = $db->prepare($sql);
    $sorgu->execute();
    $liste = $sorgu->fetchAll(PDO::FETCH_ASSOC);

    return $liste;
}

// Gönderme işlemi
if(isset($_POST['send'])){
    $sorgu = $db->prepare("INSERT INTO items SET
        itemName=:itemName,
        itemBrand=:itemBrand
     ");
    $sonuc = $sorgu->execute(array(
        'itemName' => $_POST['itemName'],
        'itemBrand' => $_POST['itemBrand']
}

// Ürün yükleme formu
<form action="" method="post">
 <label>Ürün Adı</label>
 <input type="text" name="itemName">
 <label>Marka</label>
<select name="itemBrand">
<?php
    $sorgu = $db->prepare("SELECT * FROM brands");
    $sorgu->execute();
    while($brand = $sorgu->fetch(PDO::FETCH_ASSOC)){ ?>
        <option value="<?= $brand['id']?>"><?= $marka['brandName'] ?></option>
    <?php }
?>
<button type="submit" name="send">Gönder</button>
</select>
</form>

// Tüm ürünleri bir tabloda görelim
<table class="table table-striped" id="table">
    <thead>
        <tr>
            <th> Ürün Adı </th>
            <th> Marka </th>
        </tr>
    </thead>
    <tbody>
        <?php
            // Markanın id bilgisi ile ürünün marka bilgisini eşleştirdik. <select value="marka id">Marka Adı</select> gibi.
            foreach (multiple("SELECT * FROM items INNER JOIN brands ON brands.id=items.itemBrand) as $key => $items): ?>
            <tr>
                <td><?= $items['itemName'] ?></td>
                <td><?= $items['itemBrand'] ?></td>
            </tr>
            <?php endforeach ?>
    <tbody>
?>
