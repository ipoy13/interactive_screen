// Matikan zoom
document.addEventListener('keydown', (e) => {
  if ((e.ctrlKey || e.metaKey) && ['+', '-', '0'].includes(e.key)) {
    e.preventDefault();
  }
});
document.addEventListener('wheel', (e) => {
  if (e.ctrlKey) e.preventDefault();
});

// Minta jendela masuk fullscreen saat halaman load
document.addEventListener('DOMContentLoaded', () => {
  if (document.documentElement.requestFullscreen) {
    document.documentElement.requestFullscreen();
  }
});
