require('./bootstrap');

window.addEventListener("DOMContentLoaded", function () {
    const formsDelete = document.querySelectorAll(".form-delete");

    formsDelete.forEach(form => {
        form.addEventListener("submit", (e) => {
            e.preventDefault();


            const result = confirm("Sei sicuro di voler eliminare definitivamente il fumetto?");

            if (result) {
                form.submit();
            }
        })

    });

})