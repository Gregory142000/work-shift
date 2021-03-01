// import startCalendar from "./fullCalendar/calendar.js";
// import selectShifts from "./fullCalendar/selectShifts.js";

// fetch("../helper/WorkShiftAPI.php")
//   .then((res) => res.json())
//   .then((res) => {
//     let weekShifts = selectShifts(res);

//     return weekShifts;
//   })
//   .then((worksOfWeek) => startCalendar(worksOfWeek))
//   .catch((error) => {
//     console.log(error); //Crea una solución para el catch
//   });

fetch("../helper/WorkShiftAPI.php")
  .then((res) => res.json())
  .then((res) => {
    let weekShifts = [],
      count = 1;

    res.forEach((el) => {
      let shiftObject = {},
        weekDays = [],
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

      shiftObject = {
        id: count++,
        title: `${el.shift_number} | Employee: ${employeeId}`,
        daysOfWeek: weekDays,
      };

      weekShifts.push(shiftObject);
    });

    return weekShifts;

    return weekShifts;
  })
  .then((worksOfWeek) => {
    document.addEventListener("DOMContentLoaded", function () {
      var calendarEl = document.getElementById("calendar");
      var calendar = new FullCalendar.Calendar(calendarEl, {
        events: worksOfWeek,
        initialView: "dayGridMonth",
        headerToolbar: {
          end: false,
        },
        showNonCurrentDates: false,
        dayMaxEventRows: true,
        views: {
          timeGrid: {
            dayMaxEventRows: 10,
          },
        },
      });
      calendar.render();
    });
  })
  .catch((error) => {
    console.log(error); //Crea una solución para el catch
  });
