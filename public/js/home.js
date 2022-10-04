const btn = document.getElementById('btn');
console.log(btn);

// ✅ Works as expected
btn.addEventListener('click', () => {
  alert('btn clicked');
});