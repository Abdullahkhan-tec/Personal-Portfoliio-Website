const els = document.querySelectorAll('.reveal');
const io = new IntersectionObserver((entries) => {
  entries.forEach((e, i) => {
    if (e.isIntersecting) {
      setTimeout(() => e.target.classList.add('visible'), i * 90);
      io.unobserve(e.target);
    }
  });
}, { threshold: 0.1 });
els.forEach(el => io.observe(el));

function handleSubmit(e) {
  e.preventDefault();
  const btn = document.getElementById('sbtn');
  btn.textContent = 'Message Sent ✓';
  btn.style.background = '#34d399';
  btn.disabled = true;
}