<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Fiche Edit</h3>
            </div>
			<?php echo form_open('fiche/edit/'.$fiche['fiche_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="plaque_vehicule_sid" class="control-label">Vehicule</label>
						<div class="form-group">
							<select name="plaque_vehicule_sid" class="form-control">
								<option value="">select vehicule</option>
								<?php 
								foreach($all_vehicules as $vehicule)
								{
									$selected = ($vehicule['vehicule_id'] == $fiche['plaque_vehicule_sid']) ? ' selected="selected"' : "";

									echo '<option value="'.$vehicule['vehicule_id'].'" '.$selected.'>'.$vehicule['num_plaque'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="statut_declaration" class="control-label">Statut Declaration</label>
						<div class="form-group">
							<select name="statut_declaration" class="form-control">
								<option value="">select</option>
								<?php 
								$statut_declaration_values = array(
									'validee'=>'Validee',
									'encours'=>'Encours',
								);

								foreach($statut_declaration_values as $value => $display_text)
								{
									$selected = ($value == $fiche['statut_declaration']) ? ' selected="selected"' : "";

									echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="numero_fiche" class="control-label">Numero Fiche</label>
						<div class="form-group">
							<input type="text" name="numero_fiche" value="<?php echo ($this->input->post('numero_fiche') ? $this->input->post('numero_fiche') : $fiche['numero_fiche']); ?>" class="form-control" id="numero_fiche" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="date_creation" class="control-label">Date Creation</label>
						<div class="form-group">
							<input type="text" name="date_creation" value="<?php echo ($this->input->post('date_creation') ? $this->input->post('date_creation') : $fiche['date_creation']); ?>" class="has-datetimepicker form-control" id="date_creation" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="date_validation" class="control-label">Date Validation</label>
						<div class="form-group">
							<input type="text" name="date_validation" value="<?php echo ($this->input->post('date_validation') ? $this->input->post('date_validation') : $fiche['date_validation']); ?>" class="has-datetimepicker form-control" id="date_validation" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="nombre_kilometrage" class="control-label">Nombre Kilometrage</label>
						<div class="form-group">
							<input type="text" name="nombre_kilometrage" value="<?php echo ($this->input->post('nombre_kilometrage') ? $this->input->post('nombre_kilometrage') : $fiche['nombre_kilometrage']); ?>" class="form-control" id="nombre_kilometrage" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="date_entree_vehicule" class="control-label">Date Entree Vehicule</label>
						<div class="form-group">
							<input type="text" name="date_entree_vehicule" value="<?php echo ($this->input->post('date_entree_vehicule') ? $this->input->post('date_entree_vehicule') : $fiche['date_entree_vehicule']); ?>" class="has-datepicker form-control" id="date_entree_vehicule" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="observation" class="control-label">Observation</label>
						<div class="form-group">
							<textarea name="observation" class="form-control" id="observation"><?php echo ($this->input->post('observation') ? $this->input->post('observation') : $fiche['observation']); ?></textarea>
						</div>
					</div>
				</div>
			</div>
			<div class="box-footer">
            	<button type="submit" class="btn btn-success">
					<i class="fa fa-check"></i> Save
				</button>
	        </div>				
			<?php echo form_close(); ?>
		</div>
    </div>
</div>