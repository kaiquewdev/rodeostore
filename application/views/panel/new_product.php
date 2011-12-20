<div role="main">
	<section>
		<article>
			<header>
				<h1>Novo Produto</h1>
				<hr />
			</header>
			<fieldset>
				<?php
					//echo validation_errors();
				
					echo form_open('panel/admin/products/insert');
					
					echo form_label('Nome:', 'Nome do Produto');
					echo '<br />';
					echo form_input('product_name', 'Nome do produto');
					echo '<div class="form-error">'.form_error('product_name').'</div>';
					echo '<br />';
					echo form_label('Quantidade:', 'Quantidade do Produto');
					echo '<br />';
					echo form_input('product_qty', 'Quantidade do produto');
					echo '<div class="form-error">'.form_error('product_qty').'</div>';
					echo '<br />';
					echo form_label('Peso:', 'Peso do Produto');
					echo '<br />';
					echo form_input('product_weight', 'Peso do produto');
					echo '<div class="form-error">'.form_error('product_weight').'</div>';
					echo '<br />';
					echo form_label('Altura:', 'Altura do Produto');
					echo '<br />';
					echo form_input('product_height', 'Altura do produto');
					echo '<div class="form-error">'.form_error('product_height').'</div>';
					echo '<br />';
					echo form_label('Largura:', 'Largura do Produto');
					echo '<br />';
					echo form_input('product_width', 'Largura do produto');
					echo '<div class="form-error">'.form_error('product_width').'</div>';
					echo '<br />';
					echo form_label('Categoria:', 'Categoria do Produto');
					echo '<br />';
					echo form_dropdown('product_category', $categorys);
					echo '<br />';
					echo form_label('Descrição:', 'Descrição do Produto');
					echo '<br />';
					echo form_textarea('product_description', 'Descrição do produto');
					echo '<div class="form-error">'.form_error('product_description').'</div>';
					echo '<br />';
					echo form_submit('submitProduct', 'Inserir Produto');
					
					echo form_close();
				?>
			</fieldset>
		</article>
	</section>
</div>
