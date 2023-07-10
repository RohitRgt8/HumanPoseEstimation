// dropdown selection
// var dir_path = "test/";
//     var options = "";
//     var dropdown = document.getElementById("dropdown");

//     fetchFiles();

//     function fetchFiles() {
//         var xhttp = new XMLHttpRequest();
//         xhttp.onreadystatechange = function() {
//             if (this.readyState == 4 && this.status == 200) {
//                 var fileNames = JSON.parse(this.responseText);
//                 fileNames.forEach(function(fileName) {
//                     options += "<option value='" + fileName + "'>" + fileName + "</option>";
//                 });
//                 dropdown.innerHTML += options;
//             }
//         };
//         xhttp.open("GET", "fetch_files.php", true);
//         xhttp.send();
//     }

//     function getSelectedValue() {
//         var selectedFile = dropdown.value;
//         document.getElementById("demo").innerHTML = "Selected File: " + selectedFile;
//     }


var swiper = new Swiper(".home-slider", {
  speed:  400,
  spaceBetween: 10,
  slidesPerView: 2,
  pagination: {
      el: ".swiper-pagination",
      type: "bullets",
      clickable: true
  },
  navigation: {
  nextEl: ".swiper-button-next",
  prevEl: ".swiper-button-prev",
},
});

var file_selected = ""; 

function getSelectedValue() {
  fetch('/upload', { method: 'POST' })
    .then(response => response.json())
    .then(data => {
      console.log(data.message)
      const outputElement = document.getElementById('output');
      outputElement.textContent = data.message;
    })
    .catch(error => console.error(error));
}  