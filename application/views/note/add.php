<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Creation d'une Note de perception</h3>
            </div>
            <?php echo form_open('note/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					
					
					<div class="col-md-6">
						<label for="numero_reference_note" class="control-label">Numero Reference Note</label>
						<div class="form-group">
							<input type="text" name="numero_reference_note" value="<?php echo $this->input->post('numero_reference_note'); ?>" class="form-control" id="numero_reference_note" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="fiche_sid" class="control-label">Fiche Immatriculation concernee</label>
						<div class="form-group">
							<select name="fiche_sid" class="form-control">
								<option value="">selectionner une fiche</option>
								<?php 
								foreach($all_fiches as $fiche)
								{
									$selected = ($fiche['fiche_id'] == $this->input->post('fiche_sid')) ? ' selected="selected"' : "";

									echo '<option value="'.$fiche['fiche_id'].'" '.$selected.'>'.$fiche['numero_fiche'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="devise_compte" class="control-label">Devise Compte</label>
						<div class="form-group">
							<select name="devise_compte" class="form-control">
								<option value="">select</option>
								<?php 
								$devise_compte_values = array(
									'USD'=>'Dollars americains USD',
									'CDF'=>'Francs Congolais CDF',
								);

								foreach($devise_compte_values as $value => $display_text)
								{
									$selected = ($value == $this->input->post('devise_compte')) ? ' selected="selected"' : "";

									echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="numero_impot" class="control-label">Numero Impot Immatriculation</label>
						<div class="form-group">
							<input type="text" name="numero_impot" value="<?php echo $this->input->post('numero_impot'); ?>" class="form-control" id="numero_impot" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="numero_compte_bancaire" class="control-label">Numero Compte Bancaire</label>
						<div class="form-group">
							<input type="text" name="numero_compte_bancaire" value="<?php echo $this->input->post('numero_compte_bancaire'); ?>" class="form-control" id="numero_compte_bancaire" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="nom_banque" class="control-label">Nom Banque</label>
						<div class="form-group">
							<input type="text" name="nom_banque" value="<?php echo $this->input->post('nom_banque'); ?>" class="form-control" id="nom_banque" />
						</div>
					</div>
					
					<div class="col-md-6">
						<label for="montant_impot_du" class="control-label">Montant a payer d'immatriculation</label>
						<div class="form-group">
							<input type="text" name="montant_impot_du" value="<?php echo $this->input->post('montant_impot_du'); ?>" class="form-control" id="montant_impot_du" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="observation" class="control-label">Observation</label>
						<div class="form-group">
							<textarea name="observation" class="form-control" id="observation"><?php echo $this->input->post('observation'); ?></textarea>
						</div>
					</div>
				</div>
			</div>
          	<div class="box-footer">
            	<button type="submit" class="btn btn-success">
            		<i class="fa fa-check"></i> Creer note perception
            	</button>
          	</div>
            <?php echo form_close(); ?>
      	</div>
    </div>
</div>