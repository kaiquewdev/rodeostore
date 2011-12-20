<div role="main">
	<section>
		<article>
			<header>
				<nav>
					<ul>
						<li>
							<a href="<?php echo make_route('panel/admin/products/new'); ?>">Inserir Produto</a>
						</li>
					</ul>
				</nav>
			</header>
			
			<hr />
			
			<?php
				$this->table->set_heading('Nome', 'Quantidade', 'Preço', 'Descrição', 'Peso',  'Altura', 'Largura');
		
				foreach ($products->result() as $r)
				{
					$this->table->add_row(
											$r->name, 
											$r->qty, 
											$r->price,
											$r->description,
											$r->weight,
											$r->height,
											$r->width,
											'<a href="'.make_route('panel/admin/products/remove/'.$r->id).'">Remover</a>');
				}
			
				echo $this->table->generate();
			?>
		</article>
	</section>
</div>
