import disabledWeekShift from './disabledWeekShift.js'

export default function noAccessShift() {
  let $selectCalendar = document.getElementById("select-calendar");

  if(sessionStorage.getItem('session')) {
    disabledWeekShift();

    $selectCalendar.addEventListener('change', disabledWeekShift);
  }
}
