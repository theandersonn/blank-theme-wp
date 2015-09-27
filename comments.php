<div id="comments" class="mrg-l">
	<?php if ( have_comments() ) : ?>

		<ul class="commentlist">
			<?php wp_list_comments('avatar_size=76&type=comment&callback=mytheme_comment'); ?>
	    </ul>

		<?php if ($wp_query->max_num_pages > 1) : ?>
			<div class="pagination">
		    	<ul>
		    		<li class="older"><?php previous_comments_link('Anteriores'); ?></li>
		   			<li class="newer"><?php next_comments_link('Novos'); ?></li>
		   		</ul>
		    </div>
	   	<?php endif; ?>

	<?php endif; ?>

	<?php if ( comments_open() ) : ?>

		<div id="respond">
			<h4 class="tt-comentarios">Deixe seu comentÃ¡rio</h4>

			<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

				<?php if ( $user_ID ) : ?>

					<p class="txt-comentarios">Autentificado como <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(); ?>" title="Sair desta conta">Sair desta conta &raquo;</a></p>

					<textarea class="input" name="comment" id="comment" placeholder="ComentÃ¡rio..." rows="6" cols=""></textarea>
		            <input type="submit" class="btn-home-publicacoes" value="Enviar comentÃ¡rio" />

				<?php else : ?>

					<div class="cf">
						<label class="input-50">
							<input class="input" type="text" name="author" id="author" placeholder="Nome" value="<?php echo $comment_author; ?>" />
	                	</label>
						<label class="input-50">
							<input class="input" type="text" name="email" id="email" placeholder="Email" value="<?php echo $comment_author_email; ?>" />
						</label>
					</div>
					<textarea class="input" name="comment" id="comment" placeholder="ComentÃ¡rio..." rows="6" cols=""></textarea>
                	<input class="btn-home-publicacoes" type="submit" value="Enviar comentÃ¡rio" />

                <?php endif; ?>


                <?php comment_id_fields(); ?>
                <?php do_action('comment_form', $post->ID); ?>

	        </form>
        	<p class="cancel"><?php cancel_comment_reply_link('Cancelar Resposta'); ?></p>
		</div>
	 <?php else : ?>
		<h3>Os comentÃ¡rios estÃ£o fechados.</h3>
<?php endif; ?>
</div>
