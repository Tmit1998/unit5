<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Nguyễn Tất Thành</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <h2 align="center" class="text-uppercase font-weight-bold">Author</h2>
        <a href="?mod=author&act=add" class="btn btn-primary mb-4">Add</a>
        <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col" class="text-uppercase border border-white">Title</th>
                <th scope="col" class="text-uppercase border border-white">Description</th>
                <th scope="col" class="text-center text-uppercase border border-white">Action</th>
              </tr>
            </thead>
            <tbody>
            <?php foreach ($data as $row) {?>
              <tr>
                <td class="border"><?= $row['ath_name'] ?></td>
                <td class="border text-center"><?= $row['description'] ?></td>
                <td class="text-center border">
                    <a href="?mod=author&act=single&id=<?=$row['id']?>" class="btn btn-primary ">Detail</a> 
                     <a href="?mod=author&act=update&id=<?=$row['id']?>" class="btn btn-warning ">Update</a>  
                    <a href="?mod=author&act=update&id=<?=$row['id']?>" class="btn btn-danger ">Delete</a>
                </td>
              </tr>
            <?php } ?>
            </tbody>
          </table>
    </div>
</body>
</html>