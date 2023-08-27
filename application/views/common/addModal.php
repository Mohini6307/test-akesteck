<?php if($id){?>
    
<div class="modal fade" id="Addsubmenu" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Menu Section</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form id="addsubmenu">
      <div class="modal-body">
      <div class="row g-2">
  <div class="col-md">
    <input type="hidden" value="<?php echo $id ;?>" name="menu_id">
    <div class="form-floating">
      <input type="text" class="form-control" name="title" id="floatingInputGrid"value="">
      <label for="floatingInputGrid">Menu Section</label>
    </div>
  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-light btn-outline-secondary btn-sm" data-bs-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-primary btn-sm">Save</button>
      </div>
    </div>
    </form>
  </div>
</div>
    <?php }else{?>
        <div class="modal fade" id="Addmenu" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Menu Section</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form id="addmenu">
      <div class="modal-body">
      <div class="row g-2">
  <div class="col-md">
    <div class="form-floating">
      <input type="text" class="form-control" name="menu_item" id="floatingInputGrid"value="">
      <label for="floatingInputGrid">Menu Section</label>
    </div>
  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-light btn-outline-secondary btn-sm" data-bs-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-primary btn-sm">Save</button>
      </div>
    </div>
    </form>
  </div>
</div>

        <?php } ?>


