document.addEventListener("DOMContentLoaded", function() {
    var btnAdicionar = document.querySelectorAll(".btnAdicionar");
    btnAdicionar.forEach(function(btn) {
        btn.classList.remove("hide");
        setTimeout(function() {
            btn.classList.add("show");
        }, 100);
    });
});
document.addEventListener("DOMContentLoaded", function() {
    var btnSumir = document.querySelectorAll(".btnSumir");
    btnSumir.forEach(function(btn) {
        setTimeout(function() {
            btn.classList.add("animate__zoomOutUp");
        }, 100);
    });
});

