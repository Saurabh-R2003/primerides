document.addEventListener('DOMContentLoaded', () => {
    let items = document.querySelectorAll('.slider .list .item');
    let next = document.getElementById('next');
    let prev = document.getElementById('prev');

    let countItem = items.length;
    let itemActive = 0;

    function showSlider() {
        items.forEach((item, index) => {
                item.classList.remove('active');
            if (index === itemActive) {
                item.classList.add('active');
            }
        });

        // Clear and restart the interval
        clearInterval(refreshInterval);
        refreshInterval = setInterval(() => {
            next.click();
        }, 5500);
    }

    next.onclick = function () {
        itemActive = (itemActive + 1) % countItem;
        showSlider();
    }

    prev.onclick = function () {
        itemActive = (itemActive - 1 + countItem) % countItem;
        showSlider();
    }

    let refreshInterval = setInterval(() => {
        next.click();
    }, 5500);

    // Pause auto slide on hover
    // document.querySelector('.slider').addEventListener('mouseover', () => {
    //     clearInterval(refreshInterval);
    // });

    // document.querySelector('.slider').addEventListener('mouseout', () => {
    //     refreshInterval = setInterval(() => {
    //         next.click();
    //     }, 3000);
    // });
});
