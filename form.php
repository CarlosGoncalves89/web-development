<?php include("./include/header.php");?>

<div class="container">
    <form action="array.php" method="POST">
        <div class="form-group">
            <label for="search">Enter a Country</label>
            <input type="text" class="form-control" id="search" name="country" placeholder="Search...">            
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>


<?php include("./include/footer.php");?>
