import disabledWeekShift from './disabledWeekShift.js'

export default function noAccessShift() {
  let $selectCalendar = document.getElementById("select-calendar");

  disabledWeekShift();

  $selectCalendar.addEventListener('change', disabledWeekShift);
}
