<?php 

include 'fetch.php';

  $newCurrentPage = $_POST['newCurrentPage'];
  $currentPage = $newCurrentPage;

  // State
  $resultsPerPage = 8;
  $currentPage = $newCurrentPage;
  $totalPages = ceil(count($drinks) / $resultsPerPage); 

  // Pagination
  $startingPos = ($currentPage - 1) * $resultsPerPage;
  $paginatedResults = array_slice($drinks, $startingPos, $resultsPerPage);
?>
  
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