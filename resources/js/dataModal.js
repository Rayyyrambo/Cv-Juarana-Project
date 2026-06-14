

// data modal product
const buttonView = document.querySelectorAll(".view-button-product");
document.addEventListener("DOMContentLoaded", function () {
    const modalImg = document.getElementById("modalImg");
    const modalTitle = document.getElementById("modalTitle");
    const modalPrice = document.getElementById("modalPrice");
    const modalStock = document.getElementById("modalStock");
    const modalCategory = document.getElementById("modalCategory");
    const modalDesc = document.getElementById("modalDesc");

    buttonView.forEach((button) => {
        button.addEventListener("click", function (e) {
            e.preventDefault();
            const name = this.dataset.name;
            const price = this.dataset.price;
            const stock = this.dataset.stock;
            const category = this.dataset.category;
            const image = this.dataset.image;
            const desc = this.dataset.desc;

            modalTitle.innerText = name;
            modalPrice.innerText = "Rp" + Number(price).toLocaleString("id-ID");
            modalStock.innerText = stock + " pcs tersedia";
            modalCategory.innerText = category;
            modalDesc.innerText = desc ? desc : "tidak ada description";
            modalImg.src = image;
        });
    });
});

// data modal project
const buttonProject = document.querySelectorAll(".open-project");
document.addEventListener("DOMContentLoaded", function () {
    const imagemdl = document.getElementById("modalImgProject");
    buttonProject.forEach((button) => {
        button.addEventListener("click", function (e) {
            e.preventDefault();
            const images = this.dataset.image;
            imagemdl.src = images;
        });
    });
});
