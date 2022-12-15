
  <?php include("db.php"); ?>

<?php include('includes/header.php'); ?>



<main class="container p-4">

<div class="row">

  <div class="col-md-6 offset-md-3">
      <!-- MESSAGES -->

      <div class="row">
       <div class="col-md-12" align='center'>
        <h4>IBDC Links</h4>
        </div>
        
     </div>

      <?php if (isset($_SESSION['message'])) { ?>
      <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
        <?= $_SESSION['message']?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php session_unset(); } ?>

      <!-- ADD TASK FORM -->
      <div class="card card-body" >
        <form action="save_task.php" method="POST">
          
        <div class="form-group">
            <input type="text" name="title" class="form-control" placeholder="Link Title" autofocus required>
          </div>

          <div class="form-group">
            <textarea name="description" rows="2" class="form-control" placeholder="Link Description" required></textarea>
          </div>

          <input type="submit" name="save_task" class="btn btn-success btn-block" value="Add Link">

        </form>
      </div>
    </div>

      </div>
      </main>