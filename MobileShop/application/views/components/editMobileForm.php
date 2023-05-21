<h2>Update Mobile Form</h2>
<form action="<?php echo BASEURL;?>/profile/updateMobile" method="POST">
<div class="form-group">
<input type="text" name="brand" class="form-control" placeholder="Brand..." value="<?php echo $data['data']->brand; ?>">
<div class="error">
    <?php if($data['brandError']): echo $data['brandError']; endif;?>
</div>
</div>

<div class="form-group">
<input type="text" name="model" class="form-control" placeholder="Model..." value="<?php echo $data['data']->model; ?>">
<div class="error">
    <?php if($data['modelError']): echo $data['modelError']; endif;?>
</div>
</div>

<div class="form-group">
<input type="text" name="processor" class="form-control" placeholder="Processor Name..." value="<?php echo $data['data']->processor; ?>">
<div class="error">
    <?php if($data['processorError']): echo $data['processorError']; endif;?>
</div>
</div>

<div class="form-group">
<div class="form-check">
  <input type="radio" class="form-check-input" id="radio1" name="optradio" value="8GB" controled>8GB RAM
  <label class="form-check-label" for="radio1"></label>
</div>
<div class="form-check">
  <input type="radio" class="form-check-input" id="radio2" name="optradio" value="16GB">16GB RAM
  <label class="form-check-label" for="radio2"></label>
</div>
<div class="error">
    <?php if($data['radioError']): echo $data['radioError']; endif;?>
</div>
</div>


<div class="form-group">
<input type="number" name="price" class="form-control" placeholder="Mobile Price..." value="<?php echo $data['data']->price; ?>">
<div class="error">
    <?php if($data['priceError']): echo $data['priceError']; endif;?>
</div>
<input type="hidden" name="hiddenId" value="<?php echo $data['data']->id; ?>">
</div>





<div class="form-group">
    <input type="submit" value="Update Mobile" class="btn btn-primary">
</div>

</form>