 <?php 
            	$nsx=$this->modelListPhukien();

             ?>
             <?php foreach ($nsx as $value): ?>
             	<a href="index.php?controller=home&action=nsxhotPhukien&id_nsx=<?php echo $value->id ?>"><li>
             		<?php echo $value->name; ?>
             	</li></a>
             <?php endforeach; ?>