 <?php 
            	$nsx=$this->modelListAmthanh();

             ?>
             <?php foreach ($nsx as $value): ?>
             	<a href="index.php?controller=home&action=nsxhotAmthanh&id_nsx=<?php echo $value->id ?>"><li style="width: 110px;">
             		<?php echo $value->name; ?>
             	</li></a>
             <?php endforeach; ?>