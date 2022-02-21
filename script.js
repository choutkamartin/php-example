window.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById("form")
    form.addEventListener("submit", async (event) => {
        event.preventDefault();
        const formData = new FormData(form)
        await fetch("/app/server.php", {
            method: "POST",
            body: formData
        })
    })
});