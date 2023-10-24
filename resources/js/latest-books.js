const div = document.getElementById("latest-books");
div.innerHTML = "<h1 style='font-size: 8rem; margin-top: 2em'>LOADING</h1>";
div.classList.add("rotate");

const fetchBooks = async () => {
    const data = await fetch("/api/books/latest");
    const response = await data.json();
    console.log(response);
    showBooks(response);
};

const showBooks = (array) => {
    div.innerHTML = "";
    div.classList.remove("rotate");

    array.forEach((book) => {
        const container = document.createElement("div");
        container.className = "container";

        const authorTitle = document.createElement("h2");
        const authorName = book.authors[0].name;
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

        div.appendChild(container);
    });
};

fetchBooks();
