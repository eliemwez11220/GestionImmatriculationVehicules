<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Client Edit</h3>
            </div>
			<?php echo form_open('client/edit/'.$client['client_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="noms_complet" class="control-label"><span class="text-danger">*</span>Noms Complet</label>
						<div class="form-group">
							<input type="text" name="noms_complet" value="<?php echo ($this->input->post('noms_complet') ? $this->input->post('noms_complet') : $client['noms_complet']); ?>" class="form-control" id="noms_complet" />
							<span class="text-danger"><?php echo form_error('noms_complet');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="telephone" class="control-label">Telephone</label>
						<div class="form-group">
							<input type="text" name="telephone" value="<?php echo ($this->input->post('telephone') ? $this->input->post('telephone') : $client['telephone']); ?>" class="form-control" id="telephone" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="email" class="control-label">Email</label>
						<div class="form-group">
							<input type="text" name="email" value="<?php echo ($this->input->post('email') ? $this->input->post('email') : $client['email']); ?>" class="form-control" id="email" />
							<span class="text-danger"><?php echo form_error('email');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="profession" class="control-label">Profession</label>
						<div class="form-group">
							<input type="text" name="profession" value="<?php echo ($this->input->post('profession') ? $this->input->post('profession') : $client['profession']); ?>" class="form-control" id="profession" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="adresse" class="control-label">Adresse</label>
						<div class="form-group">
							<textarea name="adresse" class="form-control" id="adresse"><?php echo ($this->input->post('adresse') ? $this->input->post('adresse') : $client['adresse']); ?></textarea>
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