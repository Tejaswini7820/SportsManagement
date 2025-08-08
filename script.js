// Tournament Management System - JavaScript

// State management
let selectedSport = '';

// Initialize the application
document.addEventListener('DOMContentLoaded', function() {
    initializeApp();
});

function initializeApp() {
    // Create floating particles
    createFloatingParticles();
    
    // Set up event listeners for sport selection
    setupSportSelectionListeners();
    
    // Add staggered animation to cards
    addStaggeredAnimations();
    
    // Load previously selected sport if any
    loadSelectedSport();
}

// Create floating particles animation
function createFloatingParticles() {
    const particlesContainer = document.getElementById('particles-container');
    
    for (let i = 0; i < 20; i++) {
        const particle = document.createElement('div');
        particle.className = 'particle';
        
        // Random positioning
        particle.style.left = Math.random() * 100 + '%';
        particle.style.top = Math.random() * 100 + '%';
        
        // Random animation delay and duration
        particle.style.animationDelay = Math.random() * 3 + 's';
        particle.style.animationDuration = (3 + Math.random() * 2) + 's';
        
        particlesContainer.appendChild(particle);
    }
}

// Set up sport selection event listeners
function setupSportSelectionListeners() {
    const sportButtons = document.querySelectorAll('.sport-btn');
    
    sportButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            const sport = this.getAttribute('data-sport');
            handleSportSelect(sport);
        });
    });
}

// Handle sport selection
function handleSportSelect(sport) {
    selectedSport = sport;
    
    // Update the display
    updateSelectedSportDisplay(sport);
    
    // Store in localStorage
    localStorage.setItem('selectedSport', sport);
    
    // Show toast notification
    showToast(
        `${sport} Selected!`,
        `Get ready for an epic ${sport.toLowerCase()} tournament experience.`
    );
    
    // Simulate navigation after a brief delay
    setTimeout(() => {
        console.log(`Navigating to ${sport} tournament page...`);
        // In a real app, you'd navigate to another page here
    }, 1500);
}

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
        // Make sure cards are initially visible for the animation
        setTimeout(() => {
            card.style.opacity = '1';
        }, index * 150);
    });
}

// Toast notification system
function showToast(title, description, duration = 3000) {
    const toastContainer = document.getElementById('toast-container');
    
    // Create toast element
    const toast = document.createElement('div');
    toast.className = 'toast';
    
    toast.innerHTML = `
        <div class="toast-title">${title}</div>
        <div class="toast-description">${description}</div>
    `;
    
    // Add to container
    toastContainer.appendChild(toast);
    
    // Auto remove after duration
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

// Enhanced hover effects for sport cards
document.addEventListener('DOMContentLoaded', function() {
    const sportCards = document.querySelectorAll('.sport-card');
    
    sportCards.forEach(card => {
        // Add enhanced hover effects
        card.addEventListener('mouseenter', function() {
            // Add additional glow effect on hover
            this.style.transition = 'all 0.5s ease-out';
        });
        
        card.addEventListener('mouseleave', function() {
            // Reset effects when mouse leaves
            this.style.transition = 'all 0.5s ease-out';
        });
    });
});

// Smooth scroll behavior for any future navigation
function smoothScrollTo(element) {
    element.scrollIntoView({
        behavior: 'smooth',
        block: 'start'
    });
}

// Utility function for debouncing
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

// Handle window resize events (debounced)
const handleResize = debounce(() => {
    // Handle any resize-specific logic here
    console.log('Window resized');
}, 250);

window.addEventListener('resize', handleResize);

// Export functions for potential testing or external use
window.TournamentApp = {
    handleSportSelect,
    showToast,
    selectedSport: () => selectedSport
};