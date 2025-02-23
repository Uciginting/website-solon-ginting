<DOCTYPE html>
<html lang="id">
<head>
     <meta charset="UTF=8"> 
     <meta name="viewport" content="width=device-widht, initial-scale=1.0">
     <title>Edit batik</title>
 </head>
 	$id =$_GET['id'];
	$result = mysql_query($conn, "SELECT * FROM pejualan batik WHERE id = $id");
	$data= mysql_fetch_assoc($result);
}
 </body>

      <h1> Edit batik</title>
      <form method="POST">
          <input type="hidden" name="id" value="<?=$data['id']?>">
          <label>nama batik</label><br>
          <input type="text" name=" name="harga" value="<?= $data['harga']?>" required><br><br>
          <button type="submit">simpan</button>
     </form>
     </body>
     </html>