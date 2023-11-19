function open_experience_modal(modalId) {
    var modal = document.getElementById(modalId);
    var overlay = document.getElementById("overlay");

    modal.classList.add("active");
    modal.classList.remove("out");
    overlay.style.display = "block"; // Afficher l'overlay
 }

 function close_experience_modal(modalId) {
    var modal = document.getElementById(modalId);
    var overlay = document.getElementById("overlay");

    modal.classList.remove("active");
    modal.classList.add("out");
    overlay.style.display = "none"; // Masquer l'overlay
 }