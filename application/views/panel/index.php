<div role="main">
	<?php
		$this->table->set_heading('Nome', 'Quantidade', 'Preço');
		
		foreach ($products->result() as $r)
		{
			$this->table->add_row($r->name, $r->qty, $r->price);
		}
			
		echo $this->table->generate();
	?>
</div>
