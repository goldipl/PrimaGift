document.addEventListener('DOMContentLoaded', function () {
  const container = document.querySelector('.gallery-container-small');
  const items = Array.from(container.querySelectorAll('.gallery-item.small'));
  const leftArrow = container.querySelector('.gallery-arrow-left');
  const rightArrow = container.querySelector('.gallery-arrow-right');
  const bigImg = document.querySelector('.gallery-container-big .gallery-item.big img');

  function getVisibleCount() {
    return window.innerWidth <= 760 ? 4 : 6;
  }

  let visibleCount = getVisibleCount();
  let startIdx = 0;

  function updateGallery() {
    visibleCount = getVisibleCount();
    // Clamp startIdx so we never show empty slots at the end
    if (startIdx > items.length - visibleCount) {
      startIdx = Math.max(0, items.length - visibleCount);
    }
    items.forEach((item, idx) => {
      if (idx >= startIdx && idx < startIdx + visibleCount) {
        item.style.display = '';
      } else {
        item.style.display = 'none';
      }
    });
    // Update big image to match the first visible small image
    if (items.length > 0) {
      const firstVisibleItem = items[startIdx];
      if (firstVisibleItem) {
        const imgSrc = firstVisibleItem.querySelector('img').getAttribute('src');
        bigImg.setAttribute('src', imgSrc);
      }
    }
  }

  leftArrow.addEventListener('click', function () {
    visibleCount = getVisibleCount();
    // If at the first set, wrap to the last set, else decrement
    if (startIdx === 0) {
      startIdx = Math.max(0, items.length - visibleCount);
    } else {
      startIdx = startIdx - 1;
    }
    updateGallery();
  });

  rightArrow.addEventListener('click', function () {
    visibleCount = getVisibleCount();
    // If at the last set, wrap to the first set, else increment
    if (startIdx >= items.length - visibleCount) {
      startIdx = 0;
    } else {
      startIdx = startIdx + 1;
    }
    updateGallery();
  });

  window.addEventListener('resize', function () {
    updateGallery();
  });

  // Optional: clicking a small image selects it in big image
  items.forEach((item, idx) => {
    item.addEventListener('click', function () {
      const imgSrc = item.querySelector('img').getAttribute('src');
      bigImg.setAttribute('src', imgSrc);
    });
  });

  updateGallery();
});