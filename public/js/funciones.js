(() => {

    const toggle = document.getElementById("toggle");
	toggle.addEventListener("click", () => {
        // añade la classe 'active' al toggle y al contenedor de los elementos del menú
        const toggle = (element) => element.classList.toggle("active");
        const items = document.querySelectorAll(".mi-navegacion-items");
        items.forEach(toggle);
        const toggleIcons = document.querySelectorAll(".mi-toggle");
        toggleIcons.forEach(toggle);
    });

})();
