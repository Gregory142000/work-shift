export default function calendar(worksOfWeek) {
  document.addEventListener("DOMContentLoaded", function () {
    var calendarEl = document.getElementById("calendar");
    var calendar = new FullCalendar.Calendar(calendarEl, {
      events: worksOfWeek,
      initialView: "dayGridMonth",
      headerToolbar: {
        end: false,
      },
      showNonCurrentDates: false,
    });
    calendar.render();
  });
}
