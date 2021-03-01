import CRUDEmployee from "./adminPanel/CRUDEmployee.js";
import selectWork from "./selectWorkZone/selectWork.js";
import headerController from "./headerController.js";
import noAccessShift from "./selectWorkZone/noAccessShift.js"

let pathname = window.location.pathname;

document.addEventListener("DOMContentLoaded", () => {
  if(pathname === '/') {
    noAccessShift();
    selectWork();
    headerController();
  } 
  if(pathname === '/admin.php') CRUDEmployee();
});
