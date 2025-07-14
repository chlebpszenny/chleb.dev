const content = document.getElementById("content");

async function loadPage(page) {
  document.querySelectorAll(".nav-link").forEach(link => {
    link.classList.remove("active");
    if (link.dataset.page === page) link.classList.add("active");
  });

  try {
    const res = await fetch(`pages/${page}.html`);
    content.innerHTML = await res.text();
  } catch {
    content.innerHTML = "<div class='card'><p>Page not found.</p></div>";
  }
}

document.querySelectorAll("a[data-page]").forEach(link => {
  link.addEventListener("click", e => {
    e.preventDefault();
    const page = link.dataset.page;
    loadPage(page);
    history.pushState({ page }, "", `#${page}`);
  });
});

window.addEventListener("popstate", e => {
  const page = e.state?.page || "home";
  loadPage(page);
});

const startPage = location.hash.replace("#", "") || "home";
loadPage(startPage);
