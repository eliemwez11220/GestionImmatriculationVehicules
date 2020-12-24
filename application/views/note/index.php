<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Listing Notes Perception</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('note/add'); ?>" class="btn btn-success btn-sm">Creer nouvelle note perception</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Fiche</th>
						<th>Numero Note </th>
						<th>Date Creation</th>
						<th>Date Validation</th>
						<th>Numero Impot</th>
						<th>Compte Bancaire</th>
						<th>Nom Banque</th>
						<th>Montant Frais</th>
						<th>Observation</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($notes as $t){ ?>
                    <tr>
						<td><?php echo $t['fiche_sid']; ?></td>
						<td><?php echo $t['numero_reference_note']; ?></td>
						<td><?php echo $t['date_creation']; ?></td>
						<td><?php echo $t['date_validation']; ?></td>
						<td><?php echo $t['numero_impot']; ?></td>
						<td><?php echo $t['numero_compte_bancaire']; ?></td>
						<td><?php echo $t['nom_banque']; ?></td>
						<td><?php echo $t['montant_impot_du']; ?> <?php echo $t['devise_compte']; ?></td>
						<td><?php echo $t['observation']; ?></td>
						<td>
                            <a href="<?php echo site_url('note/edit/'.$t['note_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Modifier</a> 
                            <a href="<?php echo site_url('note/remove/'.$t['note_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Supprimer</a>
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
