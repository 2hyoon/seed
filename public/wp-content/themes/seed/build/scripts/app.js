import APP from "./app/appObj";

/**
 * Get Document Ready
 */
document.addEventListener("DOMContentLoaded", () => {
  APP.helpers.initComponents(document.body, APP);
});
