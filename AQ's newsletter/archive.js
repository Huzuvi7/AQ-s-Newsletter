function searchArticles() {
  let input = document.getElementById('searchInput');
  let filter = input.value.toLowerCase();
  let articles = document.querySelectorAll('.article-box');

  articles.forEach(article => {
    let title = article.querySelector('h2');
    let subtitle = article.querySelector('p');
    if (title.innerHTML.toLowerCase().indexOf(filter) > -1 || subtitle.innerHTML.toLowerCase().indexOf(filter) > -1) {
      article.style.display = '';
    } else {
      article.style.display = 'none';
    }
  });
}

function goToLandingPage() {
  window.location.href = "project1.html"; // Replace 'landing_page.html' with the URL of your landing page
}
