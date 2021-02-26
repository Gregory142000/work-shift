import CRUDEmployee from "./adminPanel/CRUDEmployee.js";
import selectWork from "./selectWork.js";
import headerController from "./headerController.js";

document.addEventListener("DOMContentLoaded", () => {
  CRUDEmployee();
  selectWork();
  headerController();
});
