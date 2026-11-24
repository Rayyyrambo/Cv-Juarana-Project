// modal delete products
const modalDelets = document.getElementById("modalDelete");
const buttonClikDelete = document.querySelectorAll(".tombolHapus");
const closeDelete = document.getElementById("ButtonCancel");

// open modal
buttonClikDelete.forEach((button) => {
    button.addEventListener("click", (e) => {
        e.preventDefault();
        modalDelets.classList.remove("hidden");
    });
});

// ketika tombol cancel di klik close modal
if (closeDelete) {
    closeDelete.addEventListener("click", (e) => {
        e.preventDefault();
        modalDelets.classList.add("hidden");
    });
}

// klik di luar == close modal
document.addEventListener("click", function (e) {
    if (e.target === modalDelets) {
        modalDelets.classList.add("hidden");
    }
});

// modal delete Projects
const modalProjectsdlt = document.getElementById("modalDeleteProjects");
const btndeleteProjectss = document.querySelectorAll(".btnProjectsDelete");
const btnClose = document.getElementById("ButtonCancelProjects");

btndeleteProjectss.forEach((button) => {
    button.addEventListener("click", (e) => {
        e.preventDefault();
        modalProjectsdlt.classList.remove("hidden");
    });
});

if (btnClose) {
    btnClose.addEventListener("click", (e) => {
        e.preventDefault();
        modalProjectsdlt.classList.add("hidden");
    });
}

document.addEventListener("click", (e) => {
    if (e.target === modalProjectsdlt) {
        modalProjectsdlt.classList.add("hidden");
    }
});

//Modal delete Massage
const modalMassage = document.getElementById("modalDeleteMassage");
const btnCancelMassage = document.getElementById("ButtonCancelMassage");
const btnDeleteMassage = document.querySelectorAll(".btnMassageDelete");

btnDeleteMassage.forEach((button) => {
    button.addEventListener("click", (e) => {
        e.preventDefault();
        modalMassage.classList.remove("hidden");
    });
});

if (btnCancelMassage) {
    btnCancelMassage.addEventListener("click", (e) => {
        e.preventDefault();
        modalMassage.classList.add("hidden");
    });
}

document.addEventListener("click", (e) => {
    if (e.target === modalMassage) {
        modalMassage.classList.add("hidden");
    }
});

//Modal delete Category
const modalCategory = document.getElementById("modalDeleteCategori");
const btnCancelCategory = document.getElementById("ButtonCancelCategori");
const btnDeleteCategory = document.querySelectorAll(".btnCategorieDelete");

btnDeleteCategory.forEach((button) => {
    button.addEventListener("click", (e) => {
        e.preventDefault();
        modalCategory.classList.remove("hidden");
    });
});

if (btnCancelCategory) {
    btnCancelCategory.addEventListener("click", (e) => {
        e.preventDefault();
        modalCategory.classList.add("hidden");
    });
}

document.addEventListener("click", (e) => {
    if (e.target === modalCategory) {
        e.preventDefault();
        modalCategory.classList.add("hidden");
    }
});
