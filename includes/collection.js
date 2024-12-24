// const carData = {
//     'Brand1': ['Car1', 'Car2', 'Car3','car4','car5','car6','car'],
//     'Brand2': ['Car8', 'Car9', 'Car10'],
//     'Brand3': ['Car7', 'Car8', 'Car9'],
//     'Brand4': ['Car10', 'Car11', 'Car12'],
//     'Brand5': ['Car13', 'Car14', 'Car15'],
//     'Brand6': ['Car16', 'Car17', 'Car18']
// };

// function filterCars(brand) {
//     const carGrid = document.getElementById('carGrid');
//     carGrid.innerHTML = '';
    
//     // Highlight the selected brand
//     document.querySelectorAll('.slider .item').forEach(item => {
//         item.classList.remove('active');
//     });
//     event.target.classList.add('active');

//     carData[brand].forEach(car => {
//         const carItem = document.createElement('div');
//         carItem.className = 'item';
//         carItem.textContent = car;
//         carGrid.appendChild(carItem);
//     });
// }

// function slideLeft() {
//     const slider = document.getElementById('brandSlider');
//     slider.scrollBy({ left: -1080, behavior: 'smooth' });
// }

// function slideRight() {
//     const slider = document.getElementById('brandSlider');
//     slider.scrollBy({ left: 1080, behavior: 'smooth' });
// }

const carData = {
    'Brand1': ['Car1', 'Car2', 'Car3', 'Car4', 'Car5', 'Car6', 'Car'],
    'Brand2': ['Car8', 'Car9', 'Car10'],
    'Brand3': ['Car7', 'Car8', 'Car9'],
    'Brand4': ['Car10', 'Car11', 'Car12'],
    'Brand5': ['Car13', 'Car14', 'Car15'],
    'Brand6': ['Car16', 'Car17', 'Car18']
};

function filterCars(brand) {
    const carGrid = document.getElementById('carGrid');
    carGrid.innerHTML = '';
    
    // Highlight the selected brand
    document.querySelectorAll('.slider .item').forEach(item => {
        item.classList.remove('active');
    });
    event.target.classList.add('active');

    carData[brand].forEach(car => {
        const carItem = document.createElement('div');
        carItem.className = 'item';
        carItem.textContent = car;
        carGrid.appendChild(carItem);
    });
}

function slideLeft() {
    const slider = document.getElementById('brandSlider');
    slider.scrollBy({ left: -1080, behavior: 'smooth' });
}

function slideRight() {
    const slider = document.getElementById('brandSlider');
    slider.scrollBy({ left: 1080, behavior: 'smooth' });
}

document.addEventListener('DOMContentLoaded', function() {
    const firstItem = document.querySelector('.slider .item');
    if (firstItem) {
        firstItem.click();
    }
});