<?php

// State
$resultsPerPage = 8;
$currentPage = 1;
$totalPages = ceil(count($drinks) / $resultsPerPage); 

// Pagination
$startingPos = ($currentPage - 1) * $resultsPerPage;
$paginatedResults = array_slice($drinks, $startingPos, $resultsPerPage);