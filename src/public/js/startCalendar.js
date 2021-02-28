import startCalendar from './fullCalendar/calendar.js'

fetch("../helper/WorkShiftAPI.php")
  .then((res) => res.json())
  .then((res) => {
    let weekShifts = [],
      count = 1;

    res.forEach((el) => {
      let shiftObject = {},
        weekDays = [];

      if (el.sunday) weekDays.push(0);
      if (el.monday) weekDays.push(1);
      if (el.tuesday) weekDays.push(2);
      if (el.wednesday) weekDays.push(3);
      if (el.thursday) weekDays.push(4);
      if (el.friday) weekDays.push(5);
      if (el.saturday) weekDays.push(6);

      shiftObject = {
        id: count++,
        title: `Shift: ${el.shift_number}`,
        daysOfWeek: weekDays,
      };

      weekShifts.push(shiftObject);
    });

    return weekShifts;
  })
    .then(worksOfWeek => startCalendar(worksOfWeek))
  .catch(error => {
    console.log(error); //Crea una solución para el catch
  });
