<?php

  include 'includes/fetch.php';
  
  include 'includes/pagination.php';

  include 'views/header.view.php';

?>

    <div id="title-wrapper">
      <h1 class="page-title">PHP API Consumption</h1>
    </div>

    <div class="wrapper">
      <div class="gallery-wrapper">
        <?php foreach ($paginatedResults as $drink) { ?>
          <div class="card">
            <img class="img-drink" src="<?php echo $drink->strDrinkThumb ?>" alt="<?php echo $drink->strDrink; ?> Image">
            <h2 class="drink-title"><?php echo $drink->strDrink; ?></h2>
          </div>
        <?php } ?>
      </div>
      
      <?php echo 'Results Per Page: ' . $resultsPerPage ;?><br/>
      <?php echo 'Current Page: ' . $currentPage; ?><br/>
      <?php echo 'Total Pages: ' . $totalPages; ?><br/>
      <br/>
      <?php echo 'Starting Position: ' . $startingPos; ?><br/>
      <?php echo 'Ending Position: ' . $startingPos + $resultsPerPage; ?><br/>
    </div>

    <div class="btn-wrapper">
      <?php if ($currentPage < 1) { ?>
        <button class="page-btn" data-value="-1">< Page <?php echo $currentPage - 1; ?></button>
      <?php } ?>
      <span>Page <?php echo $currentPage ?> of <?php echo $totalPages ?></span>
      <?php if ($currentPage != $totalPages) { ?>
        <button class="page-btn" data-value="1">Page <?php echo $currentPage + 1; ?> ></button>
      <?php } ?>
    </div>

<?php
  include 'views/footer.view.php';
?>