export default function selectShifts(fetchCalendar) {
  let count = 1;

  fetchCalendar.response.forEach((el) => {
    let weekDays = [],
      employeeId = null;

    if (el.sunday) {
      weekDays.push(0);
      employeeId = el.sunday;
    }
    if (el.monday) {
      weekDays.push(1);
      employeeId = el.monday;
    }
    if (el.tuesday) {
      weekDays.push(2);
      employeeId = el.tuesday;
    }
    if (el.wednesday) {
      weekDays.push(3);
      employeeId = el.wednesday;
    }
    if (el.thursday) {
      weekDays.push(4);
      employeeId = el.thursday;
    }
    if (el.friday) {
      weekDays.push(5);
      employeeId = el.friday;
    }
    if (el.saturday) {
      weekDays.push(6);
      employeeId = el.saturday;
    }

    fetchCalendar.calendar.addEvent({
      id: count++,
      title: `${el.shift_number} | Employee: ${employeeId}`,
      daysOfWeek: weekDays,
    });
  });
}
