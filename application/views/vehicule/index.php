<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Vehicules Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('vehicule/add'); ?>" class="btn btn-success btn-sm">Ajouter vehicule</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Vehicule Id</th>
						<th>IDClient</th>
						<th>Chasis</th>
						<th>Numero Plaque</th>
						<th>Marque</th>
						<th>Type</th>
						<th>Poids</th>
						<th>Couleur</th>
						<th>Nombre Passagers</th>
						<th>Annee Fabrication</th>
						<th>Pays Provenance</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($vehicules as $t){ ?>
                    <tr>
						<td><?php echo $t['vehicule_id']; ?></td>
						<td><?php echo $t['client_sid']; ?></td>
						<td><?php echo $t['chasis']; ?></td>
						<td><?php echo $t['num_plaque']; ?></td>
						<td><?php echo $t['marque_vehicule']; ?></td>
						<td><?php echo $t['type_vehicule']; ?></td>
						<td><?php echo $t['poids_vehicule']; ?></td>
						<td><?php echo $t['couleur_vehicule']; ?></td>
						<td><?php echo $t['nombre_place_passagers']; ?></td>
						<td><?php echo $t['annee_fabrication_vehicule']; ?></td>
						<td><?php echo $t['type_pays_provenance']; ?></td>
						<td>
                            <a href="<?php echo site_url('vehicule/edit/'.$t['vehicule_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Modifier</a> 
                            <a href="<?php echo site_url('vehicule/remove/'.$t['vehicule_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Supprimer</a>
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
