// Tournament Management System - JavaScript

// State management
let selectedSport = '';

const gamePopup = document.getElementById('gamePopup');
const selectedGameElement = document.getElementById('selectedGame');
const battleMessageElement = document.getElementById('battleMessage');
const sportsCards = document.querySelectorAll('.sport-card');

// Initialize the application
document.addEventListener('DOMContentLoaded', function () {
    initializeApp();
});

function initializeApp() {
    createFloatingParticles();
    setupSportSelectionListeners();
    addStaggeredAnimations();
    loadSelectedSport();
}

// Create floating particles animation
function createFloatingParticles() {
    const particlesContainer = document.getElementById('particles-container');

    for (let i = 0; i < 20; i++) {
        const particle = document.createElement('div');
        particle.className = 'particle';
        particle.style.left = Math.random() * 100 + '%';
        particle.style.top = Math.random() * 100 + '%';
        particle.style.animationDelay = Math.random() * 3 + 's';
        particle.style.animationDuration = (3 + Math.random() * 2) + 's';
        particlesContainer.appendChild(particle);
    }
}

// Set up sport selection event listeners
function setupSportSelectionListeners() {
    document.querySelectorAll('.sport-btn').forEach(button => {
        button.addEventListener('click', function (e) {
            e.preventDefault();
            const sport = this.getAttribute('data-sport');
            handleSportSelect(sport);
            showGameSelection(sport);
        });
    });
}

// Handle sport selection
function handleSportSelect(sport) {
    selectedSport = sport;
    localStorage.setItem('selectedSport', sport);
    updateSelectedSportDisplay(sport);
}

// Show popup
function showGameSelection(sportName) {
    selectedGameElement.textContent = `You Selected ${sportName}!`;
    battleMessageElement.textContent = `Get Ready for an Epic ${sportName} Battle!`;
    battleMessageElement.style.color = '#2563eb'; // Blue text

    gamePopup.classList.add('active');
    document.body.style.overflow = 'hidden';
}

// Close popup
window.closePopup = function () {
    gamePopup.classList.remove('active');
    document.body.style.overflow = 'auto';
    sportsCards.forEach(card => {
        card.style.transform = 'scale(1) translateY(0)';
    });
};

// Close popup when clicking outside
gamePopup.addEventListener('click', function (e) {
    if (e.target === gamePopup) {
        closePopup();
    }
});

// Close popup with Escape key
document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape' && gamePopup.classList.contains('active')) {
        closePopup();
    }
});

// Update selected sport display
function updateSelectedSportDisplay(sport) {
    const selectedSportElement = document.getElementById('selected-sport');
    if (selectedSportElement) {
        selectedSportElement.textContent = sport;
    }
}

// Load previously selected sport
function loadSelectedSport() {
    const storedSport = localStorage.getItem('selectedSport');
    if (storedSport) {
        selectedSport = storedSport;
        updateSelectedSportDisplay(storedSport);
    }
}

// Add staggered animations to sport cards
function addStaggeredAnimations() {
    const sportCards = document.querySelectorAll('.sport-card-container');
    sportCards.forEach((card, index) => {
        setTimeout(() => {
            card.style.opacity = '1';
        }, index * 150);
    });
}

// Toast notification system
function showToast(title, description, duration = 3000) {
    const toastContainer = document.getElementById('toast-container');
    const toast = document.createElement('div');
    toast.className = 'toast';
    toast.innerHTML = `
        <div class="toast-title">${title}</div>
        <div class="toast-description">${description}</div>
    `;
    toastContainer.appendChild(toast);
    setTimeout(() => {
        removeToast(toast);
    }, duration);
}

// Remove toast with animation
function removeToast(toast) {
    toast.style.animation = 'slide-out 0.3s ease-out';
    setTimeout(() => {
        if (toast.parentNode) {
            toast.parentNode.removeChild(toast);
        }
    }, 300);
}

// Smooth scroll utility
function smoothScrollTo(element) {
    element.scrollIntoView({
        behavior: 'smooth',
        block: 'start'
    });
}

// Debounce utility
function debounce(func, wait) {
    let timeout;
    return function executedFunction(...args) {
        const later = () => {
            clearTimeout(timeout);
            func(...args);
        };
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
    };
}

const handleResize = debounce(() => {
    console.log('Window resized');
}, 250);

window.addEventListener('resize', handleResize);

window.TournamentApp = {
    handleSportSelect,
    showToast,
    selectedSport: () => selectedSport
};
// function setBattleMessageColor(userColor) {
//     document.documentElement.style.setProperty('--battle-message-color', userColor);
// }

// // Example: user sets it via prompt
// const userColor = prompt("Enter your preferred battle message color (e.g., red, #ff0000, rgb(0,255,0)):");
// if (userColor) {
//     setBattleMessageColor(userColor);
// }
