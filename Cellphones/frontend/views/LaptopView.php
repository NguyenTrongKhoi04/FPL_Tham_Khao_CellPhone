
 <?php 
            	$nsx=$this->modelListLaptop();

             ?>
             <?php foreach ($nsx as $value): ?>
             	<a href="index.php?controller=home&action=nsxhotLaptop&id_nsx=<?php echo $value->id ?>"><li style="width: 100px;">
             		<?php echo $value->name; ?>
             	</li></a>
           
             <?php endforeach; ?>