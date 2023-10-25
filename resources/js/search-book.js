const input = document.getElementById("search");
const resultContainer = document.getElementById("search-results");

const fetchBooks = async (e) => {
    const data = await fetch(`/api/books/search?search=${e.target.value}`);
    const response = await data.json();

    showBooks(response);
};

const showBooks = (array) => {
    resultContainer.innerHTML = "";

    array.forEach((book) => {
        const container = document.createElement("div");
        container.className = "container";

        const authorTitle = document.createElement("h2");
        const authorName = book.authors[0].name ?? null;
        authorTitle.textContent = authorName;

        const desc = document.createElement("div");
        desc.innerHTML = book.description;

        const img = document.createElement("img");
        img.setAttribute("src", book.image);

        const details = document.createElement("small");
        details.textContent = `price: ${book.price} \$, publication date:${book.publication_date}`;

        const link = document.createElement("a");
        link.setAttribute("href", `/books/${book.id}`);
        link.textContent = "show details";

        container.append(authorTitle, desc, img, details, link);

        resultContainer.appendChild(container);
    });
};

input.addEventListener("input", fetchBooks);
