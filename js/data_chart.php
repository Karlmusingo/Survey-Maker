

<script type="text/javascript">
$(function() {

	<?php foreach ($sections as $section) { ?>
  		<?php foreach ($section->questions as $question) { ?>
  			<?php foreach ($question as $question_reponse_nombre) { $i = 0; ?>
	  			
			    Morris.Donut({
			        element: '<?php echo $question_reponse_nombre->question; ?>',
			        data: [
			        <?php foreach ($question_reponse_nombre->reponses as $reponse) {   ?>
				        {
				            label: "<?php echo $reponse->reponse; ?> ",
				            value: <?php echo $reponse->nombre ; ?>
				        }, 
			    	<?php }?>
			        ],
			        resize: true
			    });
		    <?php } ?> 
	 	<?php break; }?>   
	<?php break; }?>


});


</script>