import calendar from './fullCalendar/calendar.js';
import selectShifts from './fullCalendar/selectShifts.js';

const $loader = document.getElementById('loader'),
      $calendarSection = document.querySelector('.calendar-section');

fetch('../helper/WorkShiftAPI.php')
  .then((res) => res.json())
  .then((res) => {
    let weekShifts = selectShifts(res);

    return weekShifts;
  })
  .then((worksOfWeek) => {
    $loader.style.display = 'none';

    calendar(worksOfWeek);
  })
  .catch((error) => {
    const errorMessage = `
      <div class="container-box  justify-center">
        <p>Error with Fetch connection: <span class="red-color">${error}</span></p>
      </div>
    `;

    $loader.style.display = 'none';

    $calendarSection.insertAdjacentHTML('afterend', errorMessage);

    console.log('Error with Fetch connection: ' + error);
  });
