<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sports Tournament Management | Select Your Sport</title>
    <meta name="description" content="Join the ultimate multi-sports tournament experience. Choose from Cricket, Basketball, Football, Table Tennis, Kabaddi, and Volleyball.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700;900&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <video class="back-vid" autoplay loop muted plays-inline src="videos/galaxy.mp4"></video>
    <!-- Toast Container -->
     <header style="background-color: #42ade6ff; color: white; padding: 15px 20px; display: flex; align-items: center; justify-content: space-between;">
    <div style="display: flex; align-items: center;">
        <img src="assets/tt.jpg" alt="Logo" style="height: 40px; margin-right: 10px;">
        <h1 style="margin: 0; font-size: 1.5rem;">Sports Club</h1>
    </div>
    <nav>
        <a href="index.html" style="color: white; margin: 0 10px; text-decoration: none;">Home</a>
        <a href="about.html" style="color: white; margin: 0 10px; text-decoration: none;">About</a>
        <a href="contact.html" style="color: white; margin: 0 10px; text-decoration: none;">Contact</a>
        <a href="loginpage.html" style="color: white; margin: 0 10px; text-decoration: none;">Login</a>
    </nav>
</header>
    <div id="toast-container" class="toast-container"></div>

    <div class="min-h-screen relative overflow-hidden">
        <!-- Background Effects -->
        <div class="absolute inset-0 bg-gradient-hero"></div>
        <div class="absolute inset-0 bg-radial-gradient opacity-10"></div>
        
        <!-- Floating particles -->
        <div class="absolute inset-0" id="particles-container"></div>

        <!-- Main Content -->
        <div class="relative z-10 container mx-auto px-4 py-12">
            <!-- Tournament Header -->
            <header class="text-center mb-16 animate-fade-in">
                <div class="mb-8">
                    <h1 class="text-6xl">
                        SRKR TOURNAMENT
                    </h1>
                    <div class="flex items-center justify-center gap-4 mb-6">
                        <div class="h-1 w-20 bg-gradient-primary rounded-full animate-pulse-glow"></div>
                        <i class="fas fa-trophy text-4xl text-primary animate-float"></i>
                        <div class="h-1 w-20 bg-gradient-primary rounded-full animate-pulse-glow"></div>
                    </div>
                    <p class="text-xl ">
                        Choose your battlefield  Master your sport<br>
                        Dominate the competition.
                    </p>
                </div>
            </header>
            
            <!-- Sports Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-7xl mx-auto" id="sports-grid">
                <!-- Cricket -->
                <div class="sport-card-container animate-fade-in" style="animation-delay: 0ms;">
                    <div class="sport-card group cursor-pointer" style="background-image: url('./assets/cricket.jpg'); background-size: cover; background-position: center;">
                        <div class="absolute inset-0 bg-black/40 backdrop-blur-[2px]"></div>
                        <div class="gradient-border absolute inset-0 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500" style="background: linear-gradient(45deg, #8B5CF640, transparent, #8B5CF640); padding: 2px;"></div>
                        <div class="relative z-10 h-full flex flex-col justify-between p-6">
                            <div class="flex justify-center mb-4">
                                <div class="w-16 h-16 rounded-full glassmorphism flex items-center justify-center text-3xl animate-float group-hover:animate-pulse-glow transition-all duration-300" style="color: #8B5CF6;">
                                    <i class="fas fa-baseball-ball"></i>
                                </div>
                            </div>
                            <div class="text-center mb-6">
                                <h3 class="text-2xl font-bold font-orbitron text-white glow-text mb-2">Cricket</h3>
                                <div class="h-1 w-16 mx-auto rounded-full opacity-80 group-hover:opacity-100 transition-opacity" style="background-color: #8B5CF6;"></div>
                            </div>
                            <div class="text-center">
                                <button class="sport-btn relative overflow-hidden" style="background: linear-gradient(135deg, #8B5CF6, #8B5CF6CC);" data-sport="Cricket">
                                    <span class="relative z-10">Select Sport</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Table Tennis -->
                <div class="sport-card-container animate-fade-in" style="animation-delay: 150ms;">
                    <div class="sport-card group cursor-pointer" style="background-image: url('./assets/tt.jpg'); background-size: cover; background-position: center;">
                        <div class="absolute inset-0 bg-black/40 backdrop-blur-[2px]"></div>
                        <div class="gradient-border absolute inset-0 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500" style="background: linear-gradient(45deg, #06D6A040, transparent, #06D6A040); padding: 2px;"></div>
                        <div class="relative z-10 h-full flex flex-col justify-between p-6">
                            <div class="flex justify-center mb-4">
                                <div class="w-16 h-16 rounded-full glassmorphism flex items-center justify-center text-3xl animate-float group-hover:animate-pulse-glow transition-all duration-300" style="color: #06D6A0;">
                                    <i class="fas fa-table-tennis"></i>
                                </div>
                            </div>
                            <div class="text-center mb-6">
                                <h3 class="text-2xl font-bold font-orbitron text-white glow-text mb-2">Table Tennis</h3>
                                <div class="h-1 w-16 mx-auto rounded-full opacity-80 group-hover:opacity-100 transition-opacity" style="background-color: #06D6A0;"></div>
                            </div>
                            <div class="text-center">
                                <button class="sport-btn relative overflow-hidden" style="background: linear-gradient(135deg, #06D6A0, #06D6A0CC);" data-sport="Table Tennis">
                                    <span class="relative z-10">Select Sport</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Basketball -->
                <div class="sport-card-container animate-fade-in" style="animation-delay: 300ms;">
                    <div class="sport-card group cursor-pointer" style="background-image: url('./assets/basket\ ball.jpg'); background-size: cover; background-position: center;">
                        <div class="absolute inset-0 bg-black/40 backdrop-blur-[2px]"></div>
                        <div class="gradient-border absolute inset-0 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500" style="background: linear-gradient(45deg, #F9731640, transparent, #F9731640); padding: 2px;"></div>
                        <div class="relative z-10 h-full flex flex-col justify-between p-6">
                            <div class="flex justify-center mb-4">
                                <div class="w-16 h-16 rounded-full glassmorphism flex items-center justify-center text-3xl animate-float group-hover:animate-pulse-glow transition-all duration-300" style="color: #F97316;">
                                    <i class="fas fa-basketball-ball"></i>
                                </div>
                            </div>
                            <div class="text-center mb-6">
                                <h3 class="text-2xl font-bold font-orbitron text-white glow-text mb-2">Basketball</h3>
                                <div class="h-1 w-16 mx-auto rounded-full opacity-80 group-hover:opacity-100 transition-opacity" style="background-color: #F97316;"></div>
                            </div>
                            <div class="text-center">
                                <button class="sport-btn relative overflow-hidden" style="background: linear-gradient(135deg, #F97316, #F97316CC);" data-sport="Basketball">
                                    <span class="relative z-10">Select Sport</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Football -->
                <div class="sport-card-container animate-fade-in" style="animation-delay: 450ms;">
                    <div class="sport-card group cursor-pointer" style="background-image: url('./assets/ftball.jpg'); background-size: cover; background-position: center;">
                        <div class="absolute inset-0 bg-black/40 backdrop-blur-[2px]"></div>
                        <div class="gradient-border absolute inset-0 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500" style="background: linear-gradient(45deg, #0EA5E940, transparent, #0EA5E940); padding: 2px;"></div>
                        <div class="relative z-10 h-full flex flex-col justify-between p-6">
                            <div class="flex justify-center mb-4">
                                <div class="w-16 h-16 rounded-full glassmorphism flex items-center justify-center text-3xl animate-float group-hover:animate-pulse-glow transition-all duration-300" style="color: #0EA5E9;">
                                    <i class="fas fa-futbol"></i>
                                </div>
                            </div>
                            <div class="text-center mb-6">
                                <h3 class="text-2xl font-bold font-orbitron text-white glow-text mb-2">Football</h3>
                                <div class="h-1 w-16 mx-auto rounded-full opacity-80 group-hover:opacity-100 transition-opacity" style="background-color: #0EA5E9;"></div>
                            </div>
                            <div class="text-center">
                                <button class="sport-btn relative overflow-hidden" style="background: linear-gradient(135deg, #0EA5E9, #0EA5E9CC);" data-sport="Football">
                                    <span class="relative z-10">Select Sport</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Kabaddi -->
                <div class="sport-card-container animate-fade-in" style="animation-delay: 600ms;">
                    <div class="sport-card group cursor-pointer" style="background-image: url('./assets/kabaddi.jpg'); background-size: cover; background-position: center;">
                        <div class="absolute inset-0 bg-black/40 backdrop-blur-[2px]"></div>
                        <div class="gradient-border absolute inset-0 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500" style="background: linear-gradient(45deg, #EC489940, transparent, #EC489940); padding: 2px;"></div>
                        <div class="relative z-10 h-full flex flex-col justify-between p-6">
                            <div class="flex justify-center mb-4">
                                <div class="w-16 h-16 rounded-full glassmorphism flex items-center justify-center text-3xl animate-float group-hover:animate-pulse-glow transition-all duration-300" style="color: #EC4899;">
                                    <i class="fas fa-users"></i>
                                </div>
                            </div>
                            <div class="text-center mb-6">
                                <h3 class="text-2xl font-bold font-orbitron text-white glow-text mb-2">Kabaddi</h3>
                                <div class="h-1 w-16 mx-auto rounded-full opacity-80 group-hover:opacity-100 transition-opacity" style="background-color: #EC4899;"></div>
                            </div>
                            <div class="text-center">
                                <button class="sport-btn relative overflow-hidden" style="background: linear-gradient(135deg, #EC4899, #EC4899CC);" data-sport="Kabaddi">
                                    <span class="relative z-10">Select Sport</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Volleyball -->
                <div class="sport-card-container animate-fade-in" style="animation-delay: 750ms;">
                    <div class="sport-card group cursor-pointer" style="background-image: url('./assets/vbball.jpg'); background-size: cover; background-position: center;">
                        <div class="absolute inset-0 bg-black/40 backdrop-blur-[2px]"></div>
                        <div class="gradient-border absolute inset-0 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500" style="background: linear-gradient(45deg, #06B6D440, transparent, #06B6D440); padding: 2px;"></div>
                        <div class="relative z-10 h-full flex flex-col justify-between p-6">
                            <div class="flex justify-center mb-4">
                                <div class="w-16 h-16 rounded-full glassmorphism flex items-center justify-center text-3xl animate-float group-hover:animate-pulse-glow transition-all duration-300" style="color: #06B6D4;">
                                    <i class="fas fa-volleyball-ball"></i>
                                </div>
                            </div>
                            <div class="text-center mb-6">
                                <h3 class="text-2xl font-bold font-orbitron text-white glow-text mb-2">Volleyball</h3>
                                <div class="h-1 w-16 mx-auto rounded-full opacity-80 group-hover:opacity-100 transition-opacity" style="background-color: #06B6D4;"></div>
                            </div>
                            <div class="text-center">
                                <button class="sport-btn relative overflow-hidden" style="background: linear-gradient(135deg, #06B6D4, #06B6D4CC);" data-sport="Volleyball">
                                    <span class="relative z-10">Select Sport</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Background video -->






<div class="game-selection-popup" id="gamePopup">
    <div class="popup-content">
        <h2 id="selectedGame">You Selected</h2>
        <p id="battleMessage" class="battle-message">Get Ready for an Epic Cricket Battle!</p>
        
        <!-- Link to login page -->
        <a href="loginpage.html">
            <button class="close-popup">REGISTER NOW!</button>
        </a>
    </div>
</div>

            <!-- Footer Info -->
            <div class="text-center mt-16 animate-fade-in" style="animation-delay: 1s;">
                <!-- <p class="text-muted-foreground font-inter"> -->
                    SRKR ENGINEERING COLLEGE
                </p>
                <div class="flex justify-center items-center gap-2 mt-4 text-sm text-muted-foreground">
                    <i class="fas fa-trophy text-primary"></i>
                    <span>TOURNMENT MANAGEMENT SYSTEM</span>
                    <i class="fas fa-medal text-accent"></i>
                </div>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>