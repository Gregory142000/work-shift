export default function disabledWeekShift() {
  let $selectCalendar = document.getElementById("select-calendar"),
    $mondayBtn = document.getElementById("monday-btn"),
    $tuesdayBtn = document.getElementById("tuesday-btn"),
    $wednesdayBtn = document.getElementById("wednesday-btn"),
    $thursdayBtn = document.getElementById("thursday-btn"),
    $fridayBtn = document.getElementById("friday-btn"),
    $saturdayBtn = document.getElementById("saturday-btn"),
    $sundayBtn = document.getElementById("sunday-btn");

  $mondayBtn.removeAttribute("disabled");
  $thursdayBtn.removeAttribute("disabled");
  $wednesdayBtn.removeAttribute("disabled");
  $thursdayBtn.removeAttribute("disabled");
  $fridayBtn.removeAttribute("disabled");
  $saturdayBtn.removeAttribute("disabled");
  $sundayBtn.removeAttribute("disabled");

  fetch("../helper/WorkShiftAPI.php")
    .then((res) => res.json())
    .then((res) => {
      res.forEach((el) => {
        if (el.shift_number == $selectCalendar.value) {
          if (el.monday) $mondayBtn.setAttribute("disabled", "disabled");
          if (el.tuesday) $tuesdayBtn.setAttribute("disabled", "disabled");
          if (el.wednesday) $wednesdayBtn.setAttribute("disabled", "disabled");
          if (el.thursday) $thursdayBtn.setAttribute("disabled", "disabled");
          if (el.friday) $fridayBtn.setAttribute("disabled", "disabled");
          if (el.saturday) $saturdayBtn.setAttribute("disabled", "disabled");
          if (el.sunday) $sundayBtn.setAttribute("disabled", "disabled");
        }
      });
    });
}
