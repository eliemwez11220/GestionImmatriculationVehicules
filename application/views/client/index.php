<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Clients Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('client/add'); ?>" class="btn btn-success btn-sm">Ajouter nouveau client</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Client Id</th>
						<th>Noms Complet</th>
						<th>Telephone</th>
						<th>Email</th>
						<th>Profession</th>
						<th>Adresse</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($clients as $t){ ?>
                    <tr>
						<td><?php echo $t['client_id']; ?></td>
						<td><?php echo $t['noms_complet']; ?></td>
						<td><?php echo $t['telephone']; ?></td>
						<td><?php echo $t['email']; ?></td>
						<td><?php echo $t['profession']; ?></td>
						<td><?php echo $t['adresse']; ?></td>
						<td>
                            <a href="<?php echo site_url('client/edit/'.$t['client_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Editer</a> 
                            <a href="<?php echo site_url('client/remove/'.$t['client_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> supprimer</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                <div class="pull-right">
                    <?php echo $this->pagination->create_links(); ?>                    
                </div>                
            </div>
        </div>
    </div>
</div>
