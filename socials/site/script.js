

function filterStudents() {
  const input = document.getElementById('search').value.toLowerCase();
  const cards = document.querySelectorAll('.student-card');

  cards.forEach(card => {
    const name = card.querySelector('h2').innerText.toLowerCase();
    if (name.includes(input)) {
      card.style.display = 'block';
    } else {
      card.style.display = 'none';
    }
  });
}