<?php
$errorMsg = "";
if (isset($_GET['email']) && $_GET['email'] == 'invalid') {
    $errorMsg = "Please insert a valid email address";
}
?>
<div class="modal fade <?=$card['id']?>" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title text-center">Enter your email to continue</h4>
      </div>
      <form method="POST" action="./insert.php" class="signUpForm">
        <div class="modal-body">
          <div class="form-group">
              <p class="bg-warning text-danger errorMsg"><?=$errorMsg?></p>
              <input type="email" name="email" id="email" placeholder="Enter your email.." required>
              <input type="hidden" name="cardId" value="<?=$card['id']?>">
          </div>
        </div>
         <div class="modal-footer">
            <button type="submit" class="btn main-button" id="submitBtn">Submit</button>
         </div>
      </form>
    </div>
  </div>
</div>