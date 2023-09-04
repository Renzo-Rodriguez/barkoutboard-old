const userCardTemplate = document.querySelector("[data-user-template]");
const userCardContainer = document.querySelector("[data-user-cards-container]");
const searchInput = document.querySelector("[data-search]");

let users = [];

searchInput.addEventListener("input", e => {
  const value = e.target.value.toLowerCase();
  users.forEach(user => {
    const isVisible =
      user.name.toLowerCase().includes(value) ||
      user.editor.toLowerCase().includes(value);
    user.element.classList.toggle("hide", !isVisible);
  });
});

// Get the JSON file from the current working directory
const jsonFile = `./info.json`;

fetch(jsonFile)
  .then(res => res.json())
  .then(data => {
    users = data.map(user => {
      const card = userCardTemplate.content.cloneNode(true).querySelector(".card");
      const body = card.querySelector("[data-body]");
      const link = card.querySelector("[data-link]");
      link.textContent = user.name;
      link.setAttribute('href', user.link);
      body.textContent = user.editor;
      userCardContainer.append(card);
      return { name: user.name, editor: user.editor, element: card };
    });
  })
  .catch(error => {
    console.log("Error fetching JSON:", error);
  });