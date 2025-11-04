function createPageTitle(title, image) {
  const pageTitleHTML = `
    <div class="page-title dark-background" data-aos="fade" 
         style="background-image: url(${image});">
      <div class="container">
        <h1>${title}</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index.php">Home</a></li>
            <li class="current">${title}</li>
          </ol>
        </nav>
      </div>
    </div>
  `;

  // Inject it at the top of the page (or a specific container)
  const container = document.getElementById("page-title-container");
  if (container) {
    container.innerHTML = pageTitleHTML;
  } else {
    // fallback: insert before main content
    document.body.insertAdjacentHTML("afterbegin", pageTitleHTML);
  }
}