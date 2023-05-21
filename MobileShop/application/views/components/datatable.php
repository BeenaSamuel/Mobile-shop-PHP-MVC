<table id="example" class="m-5 table table-striped table-bordered m-5" style="width:100%">
        <thead>
            <tr>
                <th>Brand</th>
                <th>Model</th>
                <th>Processor</th>
                <th>RAM</th>
                <th>Purchase date</th>
                <th>Price</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
      <?php if(!empty($data)): ?>

      <?php foreach($data as $mobile): ?>

      <tr>
          <td><?php echo ucwords($mobile->brand); ?></td>
          <td><?php echo ucwords($mobile->model); ?></td>
          <td><?php echo ucwords($mobile->processor); ?></td>
          <td><?php echo ucwords($mobile->ram); ?></td>
          <td><?php echo ucwords($mobile->pur_date); ?></td>
          <td><?php echo "Rs. " . $mobile->price ; ?></td>
          
          <td><a href="<?php echo BASEURL; ?>/profile/edit_mobile/<?php echo $mobile->id; ?>" class="btn btn-warning">Edit</a></td>
          <td><a href="<?php echo BASEURL; ?>/profile/delete/<?php echo $mobile->id; ?>" class="btn btn-danger">Delete</a></td>
      </tr>

<?php endforeach;?>

<?php endif; ?> 
</tbody>
           
    </table>