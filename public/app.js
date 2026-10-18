const filters = [...document.querySelectorAll('.filter')];
const projects = [...document.querySelectorAll('.repo')];
const search = document.querySelector('#repo-search');
let category = 'all';
function filterProjects() {
  const query = search.value.trim().toLocaleLowerCase();
  let count = 0;
  for (const project of projects) {
    const categories = project.dataset.category.split(' ');
    const matchesCategory = category === 'all' || categories.includes(category);
    const matchesSearch = `${project.dataset.search} ${project.textContent}`.toLocaleLowerCase().includes(query);
    project.hidden = !(matchesCategory && matchesSearch);
    if (!project.hidden) count++;
  }
  document.querySelector('#empty-state').hidden = count > 0;
  document.querySelector('#repo-status').textContent = `${count} public project${count === 1 ? '' : 's'} shown`;
}
for (const button of filters) {
  button.addEventListener('click', () => {
    category = button.dataset.filter;
    for (const option of filters) {
      const active = option === button;
      option.classList.toggle('active', active);
      option.setAttribute('aria-pressed', String(active));
    }
    filterProjects();
  });
}
search.addEventListener('input', filterProjects);
document.querySelector('#print-profile').addEventListener('click', () => window.print());
document.querySelector('#year').textContent = new Date().getFullYear();
filterProjects();
