<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Paiements Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('paiement/add'); ?>" class="btn btn-success btn-sm">Enregistrer nouveau paiement</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Paiement Id</th>
						<th>Statut Paiement</th>
						<th>Numero Note</th>
						<th>ID Client</th>
						<th>Date Paiement</th>
						<th>Date Validation</th>
						<th>Montant Verser</th>
						<th>Observation</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($paiements as $t){ ?>
                    <tr>
						<td><?php echo $t['paiement_id']; ?></td>
						<td><?php echo $t['statut_paiement']; ?></td>
						<td><?php echo $t['numero_note_sid']; ?></td>
						<td><?php echo $t['client_sid']; ?></td>
						<td><?php echo $t['date_paiement']; ?></td>
						<td><?php echo $t['date_validation']; ?></td>
						<td><?php echo $t['montant_verser']; ?></td>
						<td><?php echo $t['observation']; ?></td>
						<td>
                            <a href="<?php echo site_url('paiement/edit/'.$t['paiement_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Modifier</a> 
                            <a href="<?php echo site_url('paiement/remove/'.$t['paiement_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Supprimer</a>
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
