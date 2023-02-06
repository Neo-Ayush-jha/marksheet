<div class="list-group mt-3">
    <?php
        $query=mysqli_query($connect,"select * from news");
        while($data = mysqli_fetch_array($query)){
    ?>
    <a href="result.php?news=<?= $data['news_id'];?>" class="btn btn-info btn-block btn-custom my-1   text-light singl-arjustinfo-link"><?= $data['news_title'];?></a>
       <?php } ?>
</div>