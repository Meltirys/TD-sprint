<?php

/**
 * Display an error message; it renders the message and push it to the html output stream.
 * @param {String} message - Message à afficher.
 * @returns 
 */

function displayError ($message) {
  ?>
  <div class="error">
    <img src="public/images/warning.png"><p><?php echo $message ?></p>
  </div>
  <?php
}

/**
 * Display a user info message; it renders the message and push it to the html output stream.
 * @param {String} message - Message à afficher.
 * @returns 
 */

function displayInfo ($message) {
  ?>
  <div class="info">
    <img src="public/images/tick.png"><p><?php echo $message ?></p>
  </div>
  <?php
}

?>