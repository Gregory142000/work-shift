import CRUDEmployee from "./adminPanel/CRUDEmployee.js";
import selectWork from "./selectWorkZone/selectWork.js";
import headerController from "./headerController.js";
import noAccessShift from "./selectWorkZone/noAccessShift.js";

let pathname = window.location.pathname;

document.addEventListener("DOMContentLoaded", () => {
  noAccessShift();
  selectWork();
  headerController();
  CRUDEmployee();
});
