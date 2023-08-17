document.addEventListener("DOMContentLoaded", function () {
    const formElement = document.querySelector("#osm_form");
    formElement.addEventListener("submit", (e) => {
        e.preventDefault();
        const formData = new FormData(formElement);

        fetch(
            "/bitrix/components/Osmenozhka/Form/templates/.default/send.php",
            {
                method: "POST",
                body: formData,
            }
        )
            .then((response) => response)
            .then((data) => {
                if (data.ok) {
                    alert("Уже лень делать форму");
                }
            });
    });
});
