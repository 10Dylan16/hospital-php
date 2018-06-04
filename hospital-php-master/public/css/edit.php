<?php
$id = $patient[0]['patient_id'];
$data = $patient[0];
?>

<h3>Pas een patiënt aan:</h3>
<div>


  <form action="<?=URL?>patient/changeEdit" method="post" autocomplete="off">
    <label for="fname">Naam patiënt</label>
    <input type="text" id="patient_name" name="patient_name" minlength="2" maxlength="10" value="<?echo $data['patient_name'];?>" required>

    <label for="fname">Status patiënt</label>
    <input type="text" id="patient_status" name="patient_status" minlength="2" maxlength="20" value="<?echo $data['patient_status'];?>" required>

    <label for="fname">Geslacht patiënt</label>
      <input type="hidden" name="id" value="<?= $data['patient_id'] ?>">

    <input type="submit" value="Versturen">
    <input type="button" name="cancel" value="Annuleren" onClick="window.location='<?=URL?>patient/patients';" />
  </form>
</div>
