// ── Dark Mode ─────────────────────────────────────────────────────────────
const html = document.documentElement;
const themeBtn = document.getElementById('themeBtn');
const sunIco   = document.getElementById('sunIco');
const moonIco  = document.getElementById('moonIco');

function syncTheme() {
  const dark = html.classList.contains('dark');
  sunIco.classList.toggle('hidden', !dark);
  moonIco.classList.toggle('hidden', dark);
}
syncTheme();

themeBtn.addEventListener('click', () => {
  html.classList.toggle('dark');
  localStorage.setItem('theme', html.classList.contains('dark') ? 'dark' : 'light');
  syncTheme();
});

// ── Navbar scroll shadow ──────────────────────────────────────────────────
const navbar = document.getElementById('navbar');
window.addEventListener('scroll', () => {
  navbar.classList.toggle('scrolled', window.scrollY > 10);
}, { passive: true });

// ── Mobile menu ───────────────────────────────────────────────────────────
const hamburger  = document.getElementById('hamburger');
const mobileMenu = document.getElementById('mobileMenu');

hamburger.addEventListener('click', () => mobileMenu.classList.toggle('open'));

document.querySelectorAll('.mobile-link').forEach(l =>
  l.addEventListener('click', () => mobileMenu.classList.remove('open'))
);
document.addEventListener('click', e => {
  if (!navbar.contains(e.target)) mobileMenu.classList.remove('open');
});

// ── Smooth scroll ─────────────────────────────────────────────────────────
document.querySelectorAll('a[href^="#"]').forEach(a => {
  a.addEventListener('click', e => {
    e.preventDefault();
    const t = document.querySelector(a.getAttribute('href'));
    if (t) t.scrollIntoView({ behavior: 'smooth', block: 'start' });
  });
});

// ── Scroll spy ────────────────────────────────────────────────────────────
const navLinks = document.querySelectorAll('.nav-link');
const sections = document.querySelectorAll('section[id]');

function updateSpy() {
  let cur = '';
  sections.forEach(s => { if (window.scrollY >= s.offsetTop - 90) cur = s.id; });
  navLinks.forEach(l => l.classList.toggle('active', l.dataset.s === cur));
}
window.addEventListener('scroll', updateSpy, { passive: true });
updateSpy();

// ── Typing animation ──────────────────────────────────────────────────────
const typingEl = document.getElementById('typingText');
const phrases  = ['Full Stack Developer', 'Laravel Developer', 'REST API Expert', 'Backend Engineer'];
let pi = 0, ci = 0, deleting = false;

function type() {
  const cur = phrases[pi];
  typingEl.textContent = deleting ? cur.slice(0, ci--) : cur.slice(0, ci++);
  let delay = deleting ? 55 : 95;
  if (!deleting && ci === cur.length + 1) { delay = 1800; deleting = true; }
  else if (deleting && ci === 0) { deleting = false; pi = (pi + 1) % phrases.length; delay = 400; }
  setTimeout(type, delay);
}
type();

// ── Stat counters ─────────────────────────────────────────────────────────
const statEls = document.querySelectorAll('.stat-num[data-target]');
let counted = false;

function runCounters() {
  if (counted) return;
  const about = document.getElementById('about');
  if (!about) return;
  if (about.getBoundingClientRect().top < window.innerHeight * 0.85) {
    counted = true;
    statEls.forEach(el => {
      const target = +el.dataset.target;
      const step   = Math.ceil(target / 60);
      let cur = 0;
      const t = setInterval(() => {
        cur = Math.min(cur + step, target);
        el.textContent = cur;
        if (cur >= target) clearInterval(t);
      }, 18);
    });
  }
}
window.addEventListener('scroll', runCounters, { passive: true });
runCounters();

// ── Scroll to top ─────────────────────────────────────────────────────────
const scrollTopBtn = document.getElementById('scrollTop');
window.addEventListener('scroll', () => {
  scrollTopBtn.classList.toggle('visible', window.scrollY > 400);
}, { passive: true });
scrollTopBtn.addEventListener('click', () => window.scrollTo({ top: 0, behavior: 'smooth' }));

// ── Reveal on scroll ──────────────────────────────────────────────────────
const revealObs = new IntersectionObserver(entries => {
  entries.forEach(e => { if (e.isIntersecting) { e.target.classList.add('visible'); revealObs.unobserve(e.target); } });
}, { threshold: 0.08, rootMargin: '0px 0px -32px 0px' });
document.querySelectorAll('.reveal').forEach(el => revealObs.observe(el));

// ── Project Slider ────────────────────────────────────────────────────────
(function () {
  const track    = document.getElementById('projTrack');
  const viewport = document.getElementById('projViewport');
  const dotsWrap = document.getElementById('projDots');
  const prevBtn  = document.getElementById('projPrev');
  const nextBtn  = document.getElementById('projNext');
  const counter  = document.getElementById('projCounter');
  if (!track || !viewport) return;

  const GAP    = 20;
  const slides = Array.from(track.querySelectorAll('.proj-slide'));
  const total  = slides.length;
  let current  = 0;

  function vis() {
    const w = window.innerWidth;
    return w >= 1024 ? 3 : w >= 640 ? 2 : 1;
  }
  function pages() { return Math.ceil(total / vis()); }

  function setSizes() {
    const v = vis(), vpW = viewport.offsetWidth;
    const sw = Math.floor((vpW - GAP * (v - 1)) / v);
    slides.forEach(s => { s.style.width = sw + 'px'; });
  }

  function buildDots() {
    dotsWrap.innerHTML = '';
    for (let i = 0; i < pages(); i++) {
      const d = document.createElement('button');
      d.className = 'proj-dot' + (i === current ? ' active' : '');
      d.setAttribute('aria-label', 'Page ' + (i + 1));
      d.addEventListener('click', () => goTo(i));
      dotsWrap.appendChild(d);
    }
  }

  function goTo(page) {
    const pg = pages(), v = vis();
    current = Math.max(0, Math.min(page, pg - 1));
    const sw = parseInt(slides[0].style.width, 10);
    track.style.transform = `translateX(-${current * v * (sw + GAP)}px)`;
    dotsWrap.querySelectorAll('.proj-dot').forEach((d, i) => d.classList.toggle('active', i === current));
    const from = current * v + 1, to = Math.min(from + v - 1, total);
    if (counter) counter.textContent = from + (to > from ? '–' + to : '') + ' / ' + total;
    prevBtn.disabled = current === 0;
    nextBtn.disabled = current >= pg - 1;
  }

  function init() { setSizes(); buildDots(); goTo(0); }

  prevBtn.addEventListener('click', () => goTo(current - 1));
  nextBtn.addEventListener('click', () => goTo(current + 1));

  let tx = 0;
  viewport.addEventListener('touchstart', e => { tx = e.touches[0].clientX; }, { passive: true });
  viewport.addEventListener('touchend',   e => {
    const diff = tx - e.changedTouches[0].clientX;
    if (Math.abs(diff) > 50) goTo(diff > 0 ? current + 1 : current - 1);
  }, { passive: true });

  let rt;
  window.addEventListener('resize', () => { clearTimeout(rt); rt = setTimeout(init, 150); });

  if (document.readyState === 'complete') init();
  else window.addEventListener('load', init);
})();
