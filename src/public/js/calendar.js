document.addEventListener('DOMContentLoaded', function() {
  var calendarEl = document.getElementById('calendar');
  var calendar = new FullCalendar.Calendar(calendarEl, {
    events: [
      {
        id: '1',
        title: 'my event',
        start: '2021-02-26'
      },
      {
        id: '2',
        title: 'my event 2',
        start: '2021-02-26'
      }
    ],
    initialView: 'dayGridMonth'
  });
  calendar.render();
});