<h2>Add Mobile Form</h2>
<form action="<?php echo BASEURL;?>/profile/mobileStore" method="POST">
<div class="form-group">
<input type="text" name="brand" class="form-control" placeholder="Brand Name..." value="<?php if($data['brand']): echo $data['brand']; endif; ?>">
<div class="error">
    <?php if($data['brandError']): echo $data['brandError']; endif;?>
</div>
</div>

<div class="form-group">
<input type="text" name="model" class="form-control" placeholder="Model..." value="<?php if($data['model']): echo $data['model']; endif; ?>">
<div class="error">
    <?php if($data['modelError']): echo $data['modelError']; endif;?>
</div>
</div>

<div class="form-group">

<select name="processor" class="form-control" value="<?php if($data['processor']): echo $data['processor']; endif; ?>">
    <option value="">Select processor</option>
    <option value="Exynos">Exynos</option>
    <option value="Qualcomm">Qualcomm</option>
    <option value="Snapdragon">Snapdragon</option>
</select>
<div class="error">
    <?php if($data['processorError']): echo $data['processorError']; endif;?>
</div>
</div>
<style>
.btn-primary {
    background-color: darkred !important;
}
    </style>
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
<input type="Date" name="pur_date" class="form-control" placeholder="Date of purchase..." value="<?php if($data['pur_date']): echo $data['pur_date']; endif; ?>">
<div class="error">
    <?php if($data['pur_dateError']): echo $data['pur_dateError']; endif;?>
</div>
</div>

<div class="form-group">
<input type="number" name="price" class="form-control" placeholder="Mobile Price..." value="<?php if($data['price']): echo $data['price']; endif; ?>">
<div class="error">
    <?php if($data['priceError']): echo $data['priceError']; endif;?>
</div>
</div>



<div class="form-group">
    <input type="submit" value="Add Mobile" class="btn btn-primary">
</div>

</form>