import startCalendar from './fullCalendar/calendar.js';
import selectShifts from './fullCalendar/selectShifts.js';

fetch('../helper/WorkShiftAPI.php')
  .then((res) => res.json())
  .then((res) => {
    let weekShifts = selectShifts(res);

    return weekShifts;
  })
  .then((worksOfWeek) => {
    const $loader = document.getElementById('loader');

    $loader.style.display = 'none';
    
    startCalendar(worksOfWeek)
  })
  .catch((error) => {
    console.log(error); //Crea una solución para el catch
  });
