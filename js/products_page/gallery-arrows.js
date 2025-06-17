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
  let activeIdx = 0;

  function setActiveClass(idx) {
    items.forEach((item, i) => {
      if (i === idx) {
        item.classList.add('active');
      } else {
        item.classList.remove('active');
      }
    });
  }

  function updateGallery() {
    visibleCount = getVisibleCount();

    // Rotate mode applies if all images fit in visible area (<= visibleCount)
    if (items.length <= visibleCount) {
      // Show all, arrows rotate active image
      items.forEach(item => item.style.display = '');
      setActiveClass(activeIdx);
      if (items[activeIdx]) {
        const imgSrc = items[activeIdx].querySelector('img').getAttribute('src');
        bigImg.setAttribute('src', imgSrc);
      }
    } else {
      // Sliding window mode
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
      // Active image is the first visible one by default in window mode
      activeIdx = startIdx;
      setActiveClass(activeIdx);
      if (items[activeIdx]) {
        const imgSrc = items[activeIdx].querySelector('img').getAttribute('src');
        bigImg.setAttribute('src', imgSrc);
      }
    }
  }

  leftArrow.addEventListener('click', function () {
    visibleCount = getVisibleCount();
    if (items.length <= visibleCount) {
      // Rotate active index left
      activeIdx = (activeIdx - 1 + items.length) % items.length;
    } else {
      // Sliding window mode
      if (startIdx === 0) {
        startIdx = Math.max(0, items.length - visibleCount);
      } else {
        startIdx = startIdx - 1;
      }
      activeIdx = startIdx;
    }
    updateGallery();
  });

  rightArrow.addEventListener('click', function () {
    visibleCount = getVisibleCount();
    if (items.length <= visibleCount) {
      // Rotate active index right
      activeIdx = (activeIdx + 1) % items.length;
    } else {
      // Sliding window mode
      if (startIdx >= items.length - visibleCount) {
        startIdx = 0;
      } else {
        startIdx = startIdx + 1;
      }
      activeIdx = startIdx;
    }
    updateGallery();
  });

  window.addEventListener('resize', function () {
    updateGallery();
  });

  // Clicking a small image selects it as active and updates the big image
  items.forEach((item, idx) => {
    item.addEventListener('click', function () {
      activeIdx = idx;
      const imgSrc = item.querySelector('img').getAttribute('src');
      bigImg.setAttribute('src', imgSrc);
      setActiveClass(activeIdx);
    });
  });

  updateGallery();
});