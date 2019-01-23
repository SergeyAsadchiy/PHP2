<?php 

	$description = "Some quick example text to build on the card title and make up the bulk of the card's content.";

	include 'templates/header.php';
    include 'templates/nav.php';
    if (!$cookiesOK) include 'components/userConfirmCookies.php';
?>

<main>
	<article> 
	<div class="container" id="items">
	    <div class="row">
	      	<?php 
	        	foreach ($items as $item) {
	    	    	include 'components/card.php';
	        	}
	      	?>
	    </div>
	</div>
	</article>
	
</main>

<?php 
	include 'templates/components/RecentViewed.php';
    include 'templates/footer.php'; 



