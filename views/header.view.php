<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style/style.css">
  <!-- jQuery CDN -->
  <script
		src="https://code.jquery.com/jquery-3.6.0.js"
		integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
		crossorigin="anonymous"></script>

  <script>
    $(document).ready(function() {
      var currentPage = 1;

      $('.btn-wrapper').click(function(e) {
        if (!e.target.closest('.page-btn')) return console.log('Not a button');
        currentPage += Number(e.target.dataset.value);
        console.log(currentPage);
        $('.wrapper').load('includes/load-imgs.php', {
          newCurrentPage: currentPage
        }, function() {
          console.log('Is working...')
        });
        $('.btn-wrapper').load('includes/load-btns.php', {
          newCurrentPage: currentPage
        })
      });
    });
  </script>

  <title>PHP - Consume API</title>
</head>
<body>
  <main>