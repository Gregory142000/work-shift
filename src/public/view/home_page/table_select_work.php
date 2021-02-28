<h2 class="margin-height">Choose your turn</h2>

<form class="Calendar__form  container-box" action="../helper/ManageWorkShift.php" method="POST">

  <div class="Calendar__console">
    <div class="Calendar__shift">
      <h5 class="Calendar__h5-bad">Shift</h5>
      <select name="shift-number">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
          <option value="10">10</option>
        </select>
    </div>
    <div>
      <h5>Mon</h5>
      <button class="button  button-select" disabled>Select</button>
      <input type="hidden" class="week-day" name="monday" value="">
    </div>
    <div>
      <h5>Tue</h5>
      <button class="button  button-select" disabled>Select</button>
      <input type="hidden" class="week-day" name="tuesday" value="">
    </div>
    <div>
      <h5>Wed</h5>
      <button class="button  button-select" disabled>Select</button>
      <input type="hidden" class="week-day" name="wednesday" value="">
    </div>
    <div>
      <h5>Thu</h5>
      <button class="button  button-select" disabled>Select</button>
      <input type="hidden" class="week-day" name="thursday" value="">
    </div>
    <div>
      <h5>Fri</h5>
        <button class="button  button-select" disabled>Select</button>
        <input type="hidden" class="week-day" name="friday" value="">
    </div>
    <div>
      <h5>Sat</h5>
      <button class="button  button-select" disabled>Select</button>
      <input type="hidden" class="week-day" name="saturday" value="">
    </div>
    <div>
      <h5>Sun</h5>
      <button class="button  button-select" disabled>Select</button>
      <input type="hidden" class="week-day" name="sunday" value="">
    </div>
  </div>

  <input type="hidden" id="id-employee" name="employee-id" value="">

  <div class="Calendar__buttonsBox">
    <input type="submit" class="button" value="Send" disabled>
    <button class="button" id="reseat-button" disabled>Reseat</button>
  </div>

</form>