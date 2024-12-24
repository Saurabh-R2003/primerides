document.addEventListener("DOMContentLoaded", function () {
    const leftArrow = document.getElementById('left-arrow');
    const rightArrow = document.getElementById('right-arrow');
    const container = document.getElementById('featured-items');

    function updateArrows() {
        const maxScrollLeft = container.scrollWidth - container.clientWidth;
        if (container.scrollLeft > 0) {
            leftArrow.style.display = 'block';
        } else {
            leftArrow.style.display = 'none';
        }
        if (container.scrollLeft >= maxScrollLeft) {
            rightArrow.style.display = 'none';
        } else {
            rightArrow.style.display = 'block';
        }
    }

    window.scrollRight = function () {
        container.scrollBy({ left: 550, behavior: 'smooth' });
        setTimeout(updateArrows, 300); // wait for scroll to finish
    }

    window.hello = function () {
        container.scrollBy({ left: -550, behavior: 'smooth' });
        setTimeout(updateArrows, 300); // wait for scroll to finish
    }

    // Adding mouse drag functionality
    let isDown = false;
    let startX;
    let scrollLeftPos;

    container.addEventListener('mousedown', (e) => {
        isDown = true;
        container.classList.add('active');
        startX = e.pageX - container.offsetLeft;
        scrollLeftPos = container.scrollLeft;
    });

    container.addEventListener('mouseleave', () => {
        isDown = false;
        container.classList.remove('active');
    });

    container.addEventListener('mouseup', () => {
        isDown = false;
        container.classList.remove('active');
        updateArrows();
    });

    container.addEventListener('mousemove', (e) => {
        if (!isDown) return;
        e.preventDefault();
        const x = e.pageX - container.offsetLeft;
        const walk = (x - startX) * 2; //scroll-fast
        container.scrollLeft = scrollLeftPos - walk;
    });

    container.addEventListener('scroll', updateArrows);

    updateArrows(); // Initial check
});