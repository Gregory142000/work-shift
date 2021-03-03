import CRUDEmployee from './adminPanel/CRUDEmployee.js';
import selectWork from './selectWorkZone/selectWork.js';
import headerController from './headerController.js';
import noAccessShift from './selectWorkZone/noAccessShift.js';
import clearSessionStorage from './clearSessionStorage.js';

let pathname = window.location.pathname,
  $consoleSection = document.querySelector('.console-section');

document.addEventListener("DOMContentLoaded", () => {
  console.log($consoleSection)
  if(pathname === '/') {
    if($consoleSection) noAccessShift();
    
    clearSessionStorage();
    selectWork();
    headerController();
  } 
  if(pathname === '/admin.php') CRUDEmployee();
});
