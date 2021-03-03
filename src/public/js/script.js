import CRUDEmployee from './adminPanel/CRUDEmployee.js';
import selectWork from './selectWorkZone/selectWork.js';
import headerController from './headerController.js';
import noAccessShift from './selectWorkZone/noAccessShift.js';
import clearSessionStorage from './clearSessionStorage.js';

let pathname = window.location.pathname;

document.addEventListener("DOMContentLoaded", () => {
  if(pathname === '/') {
    clearSessionStorage();
    noAccessShift();
    selectWork();
    headerController();
  } 
  if(pathname === '/admin.php') CRUDEmployee();
});
