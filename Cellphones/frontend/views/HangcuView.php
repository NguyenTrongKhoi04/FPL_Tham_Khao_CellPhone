 <?php 
            	$nsx=$this->modelListHangcu();

             ?>
             <?php foreach ($nsx as $value): ?>
             	
             	<a href="index.php?controller=home&action=hangcu&id_nsx=<?php echo $value->id ?>"><li style="width: 100px;">
             		<?php echo $value->name; ?>
             	</li></a>
             <?php endforeach; ?>