var button = document.getElementById("search");
var input = document.getElementById("search-input");

button.onclick = function () {
  window.location.href = `https://idirectpromo.24livehost.com/product-search?search=${input.value}`;
};
