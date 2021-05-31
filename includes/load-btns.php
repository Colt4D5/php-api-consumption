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

  <?php if ($currentPage > 1) { ?>
    <button class="page-btn" data-value="-1">< Page <?php echo $currentPage - 1; ?></button>
  <?php } ?>
  <span>Page <?php echo $currentPage ?> of <?php echo $totalPages ?></span>
  <?php if ($currentPage != $totalPages) { ?>
    <button class="page-btn" data-value="1">Page <?php echo $currentPage + 1; ?> ></button>
  <?php } ?>