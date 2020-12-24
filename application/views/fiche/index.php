<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Fiches Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('fiche/add'); ?>" class="btn btn-success btn-sm">Creer nouvelle fiche</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
                        <th>Numero Fiche</th>
						<th>Vehicule</th>
						<th>Statut</th>
						
						<th>Date Creation</th>
						<th>Date Validation</th>
						<th>Nombre Kilometrage</th>
						<th>Date Entree Vehicule</th>
						<th>Observation</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($fiches as $t){ ?>
                    <tr>
						<td><?php echo $t['numero_fiche']; ?></td>
						<td><?php echo $t['plaque_vehicule_sid']; ?></td>
						<td><?php echo $t['statut_declaration']; ?></td>
						
						<td><?php echo $t['date_creation']; ?></td>
						<td><?php echo $t['date_validation']; ?></td>
						<td><?php echo $t['nombre_kilometrage']; ?></td>
						<td><?php echo $t['date_entree_vehicule']; ?></td>
						<td><?php echo $t['observation']; ?></td>
						<td>
                            <a href="<?php echo site_url('fiche/edit/'.$t['fiche_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Modifier</a> 
                            <a href="<?php echo site_url('fiche/remove/'.$t['fiche_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Supprimer</a>
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
