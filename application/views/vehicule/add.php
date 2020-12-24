<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Enregistrement d'un Vehicule</h3>
            </div>
            <?php echo form_open('vehicule/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="client_sid" class="control-label">Client</label>
						<div class="form-group">
							<select name="client_sid" class="form-control">
								<option value="">select client</option>
								<?php 
								foreach($all_clients as $client)
								{
									$selected = ($client['client_id'] == $this->input->post('client_sid')) ? ' selected="selected"' : "";

									echo '<option value="'.$client['client_id'].'" '.$selected.'>'.$client['noms_complet'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="chasis" class="control-label">Chasis</label>
						<div class="form-group">
							<input type="text" name="chasis" value="<?php echo $this->input->post('chasis'); ?>" class="form-control" id="chasis" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="num_plaque" class="control-label">Numero Plaque</label>
						<div class="form-group">
							<input type="text" name="num_plaque" value="<?php echo $this->input->post('num_plaque'); ?>" class="form-control" id="num_plaque" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="marque_vehicule" class="control-label">Marque Vehicule</label>
						<div class="form-group">
							<input type="text" name="marque_vehicule" value="<?php echo $this->input->post('marque_vehicule'); ?>" class="form-control" id="marque_vehicule" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="type_vehicule" class="control-label">Type Vehicule</label>
						<div class="form-group">
							<input type="text" name="type_vehicule" value="<?php echo $this->input->post('type_vehicule'); ?>" class="form-control" id="type_vehicule" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="poids_vehicule" class="control-label">Poids Vehicule</label>
						<div class="form-group">
							<input type="text" name="poids_vehicule" value="<?php echo $this->input->post('poids_vehicule'); ?>" class="form-control" id="poids_vehicule" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="couleur_vehicule" class="control-label">Couleur Vehicule</label>
						<div class="form-group">
							<input type="text" name="couleur_vehicule" value="<?php echo $this->input->post('couleur_vehicule'); ?>" class="form-control" id="couleur_vehicule" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="nombre_place_passagers" class="control-label">Nombre Place Passagers</label>
						<div class="form-group">
							<input type="text" name="nombre_place_passagers" value="<?php echo $this->input->post('nombre_place_passagers'); ?>" class="form-control" id="nombre_place_passagers" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="annee_fabrication_vehicule" class="control-label">Annee Fabrication Vehicule</label>
						<div class="form-group">
							<input type="text" name="annee_fabrication_vehicule" value="<?php echo $this->input->post('annee_fabrication_vehicule'); ?>" class="form-control" id="annee_fabrication_vehicule" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="type_pays_provenance" class="control-label">Pays Provenance</label>
						<div class="form-group">
							<input type="text" name="type_pays_provenance" value="<?php echo $this->input->post('type_pays_provenance'); ?>" class="form-control" id="type_pays_provenance" />
						</div>
					</div>
				</div>
			</div>
          	<div class="box-footer">
            	<button type="submit" class="btn btn-success">
            		<i class="fa fa-check"></i> Enregistrer vehicule
            	</button>
          	</div>
            <?php echo form_close(); ?>
      	</div>
    </div>
</div>