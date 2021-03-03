import selectShifts from "./fullCalendar/selectShifts.js";

const $loader = document.getElementById('loader'),
  $calendarSection = document.querySelector('.calendar-section');

document.addEventListener("DOMContentLoaded", function () {
  fetch("../helper/WorkShiftAPI.php")
    .then((res) => res.json())
    .then((res) => {
      var calendarEl = document.getElementById("calendar");
      var calendar = new FullCalendar.Calendar(calendarEl, {
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

      let fetchCalendar = {
        response: res,
        calendar: calendar,
      };

      return fetchCalendar;
    })
    .then((fetchCalendar) => {
      selectShifts(fetchCalendar);

      $loader.style.display = 'none';
    })
    .catch(error => {
      let errorMessage = `
        <div class="container-box  justify-center">
          <p>Error with Fetch connection: <span class="red-color">${error}</span></p>
        </div>
      `;

      $loader.style.display = 'none';

      console.error('Error with Fetch connection: ' + error)

      $calendarSection.insertAdjacentHTML('beforeend', errorMessage)
    });
});
