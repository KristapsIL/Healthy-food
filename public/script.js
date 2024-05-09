const html = document.getElementById("html");
function toggleMode() {
    if (html.dataset.togl === "light") {
        html.dataset.togl = "dark";
    } else {
        html.dataset.togl = "light";
    }
  }