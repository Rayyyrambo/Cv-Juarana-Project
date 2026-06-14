// Modal box Maps
const modalMaps = document.querySelector("#mapsModal");
const buttonMaps = document.querySelectorAll(".button-location");
const closemaps = document.querySelector("#closeMapsBtn");

// Open modal ketika check button diklik
buttonMaps.forEach((button) => {
    button.addEventListener("click", (e) => {
        e.preventDefault();
        modalMaps.classList.remove("hidden");
    });
});

// Close modal ketika X button diklik
if (closemaps) {
    closemaps.addEventListener("click", (e) => {
        e.preventDefault();
        modalMaps.classList.add("hidden");
    });
}

// Close modal ketika tekan ESC
document.addEventListener("keydown", (e) => {
    if (e.key === "Escape" && !modalMaps.classList.contains("hidden")) {
        modalMaps.classList.add("hidden");
    }
});

document.addEventListener("click", function (e) {
    if (e.target === modalMaps) {
        modalMaps.classList.add("hidden");
    }
});

// modal box message
const pesanModal = document.querySelector("#masageModal");
const massageButton = document.querySelectorAll(".button-Massage");
const closeMassage = document.querySelector("#closeMassageBtn");

// Open modal ketika button diklik
massageButton.forEach((button) => {
    button.addEventListener("click", (e) => {
        e.preventDefault();
        pesanModal.classList.remove("hidden");
    });
});

//ketika tombol close di klik
if (closeMassage) {
    closeMassage.addEventListener("click", (e) => {
        e.preventDefault();
        pesanModal.classList.add("hidden");
    });
}

// ketika esc di klik
document.addEventListener("keydown", (e) => {
    if (e.key === "Escape" && !pesanModal.classList.contains("hidden")) {
        pesanModal.classList.add("hidden");
    }
});

document.addEventListener("click", function (e) {
    if (e.target === pesanModal) {
        pesanModal.classList.add("hidden");
    }
});

// modal box product
const detailModal = document.querySelector("#modalProduct");
const buttonView = document.querySelectorAll(".view-button-product");
const closeBtn = document.querySelector("#closeModalBtn");

// Open modal ketika check button diklik
buttonView.forEach((button) => {
    button.addEventListener("click", (e) => {
        e.preventDefault();
        detailModal.classList.remove("hidden");
    });
});

// Close modal ketika X button diklik
if (closeBtn) {
    closeBtn.addEventListener("click", (e) => {
        e.preventDefault();
        detailModal.classList.add("hidden");
    });
}

// Close modal ketika tekan ESC
document.addEventListener("keydown", (e) => {
    if (e.key === "Escape" && !detailModal.classList.contains("hidden")) {
        detailModal.classList.add("hidden");
    }
});

document.addEventListener("click", function(e){
 if(e.target===detailModal){
    detailModal.classList.add("hidden");
 }
});

// modal box project
const modalProjetcs = document.querySelector("#modalProject");
const buttonProject = document.querySelectorAll(".open-project");
const closeProject = document.querySelector("#closeProjectBtn");

buttonProject.forEach((button) => {
    button.addEventListener("click", (e) => {
        e.preventDefault();
        modalProjetcs.classList.remove("hidden");
    });
});

if (closeProject) {
    closeProject.addEventListener("click", (e) => {
        e.preventDefault();
        modalProjetcs.classList.add("hidden");
    });
}

document.addEventListener("keydown", (e) => {
    if (e.key === "Escape" && !modalProjetcs.classList.contains("hidden")) {
        modalProjetcs.classList.add("hidden");
    }
});

document.addEventListener("click", function(e){
    if(e.target===modalProjetcs){
        modalProjetcs.classList.add("hidden");
    }
})


