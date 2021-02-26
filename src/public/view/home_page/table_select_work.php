<form action="" method="POST">

  <table>
    <tr>
      <th>S</th>
      <th>Mon</th>
      <th>Tue</th>
      <th>Wed</th>
      <th>Thu</th>
      <th>Fri</th>
      <th>Sat</th>
      <th>Sun</th>
      <th>P</th>
    </tr>
    <tr>
      <td>
        <Select>
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
        </Select>
      </td>
      <td>
        <button class="button  button-select" disabled>Select</button>
        <input type="hidden" class="week-day" name="monday" value="">
      </td>
      <td>
        <button class="button  button-select" disabled>Select</button>
        <input type="hidden" class="week-day" name="tuesday" value="">
      </td>
      <td>
        <button class="button  button-select" disabled>Select</button>
        <input type="hidden" class="week-day" name="wednesday" value="">
      </td>
      <td>
        <button class="button  button-select" disabled>Select</button>
        <input type="hidden" class="week-day" name="thursday" value="">
      </td>
      <td>
        <button class="button  button-select" disabled>Select</button>
        <input type="hidden" class="week-day" name="friday" value="">
      </td>
      <td>
        <button class="button  button-select" disabled>Select</button>
        <input type="hidden" class="week-day" name="saturday" value="">
      </td>
      <td>
        <button class="button  button-select" disabled>Select</button>
        <input type="hidden" class="week-day" name="sunday" value="">
      </td>
      <td>Null</td>
    </tr>
  </table>

  <input type="hidden" id="id-employee" name="id-employee" value="">

  <input type="submit" class="button" value="Send" disabled>
  <button class="button" id="reseat-button" disabled>Reseat</button>

</form>