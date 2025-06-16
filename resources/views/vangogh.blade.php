<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="images/favicon.png">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700;900&family=Exo+2:wght@300;400;600;800&display=swap" rel="stylesheet">
    <title>Vincent van Gogh - Digital Renaissance</title>
</head>

<body>
    <div class="page-wrapper">
        <div class="bg-animation">
            <div class="floating-particle"></div>
            <div class="floating-particle"></div>
            <div class="floating-particle"></div>
            <div class="floating-particle"></div>
            <div class="floating-particle"></div>
        </div>

        <nav class="navbar" id="navbar">
            <div class="nav-container">
                <div class="nav-brand">
                    <span class="brand-text">VINCENT</span>
                    <span class="brand-accent">VAN GOGH</span>
                </div>
                <div class="nav-toggle" id="nav-toggle">
                    <span class="nav-line"></span>
                    <span class="nav-line"></span>
                    <span class="nav-line"></span>
                </div>
                <ul class="nav-menu" id="nav-menu">
                    <li class="nav-item">
                        <a href="https://en.wikipedia.org/wiki/Vincent_van_Gogh" class="nav-link" data-text="Biography">
                            <span class="nav-icon">👤</span>
                            <span class="nav-text">Biography</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="https://www.vangoghmuseum.nl/en" class="nav-link" data-text="Museum">
                            <span class="nav-icon">🏛️</span>
                            <span class="nav-text">Museum</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="https://www.vangoghmuseum.nl/en/art-and-stories/art" class="nav-link" data-text="Gallery">
                            <span class="nav-icon">🎨</span>
                            <span class="nav-text">Gallery</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="https://www.vangoghmuseum.nl/en/art-and-stories/stories" class="nav-link" data-text="Stories">
                            <span class="nav-icon">📖</span>
                            <span class="nav-text">Stories</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <header class="hero-section">
            <div class="hero-content">
                <div class="hero-title-wrapper">
                    <h1 class="hero-title">
                        <span class="title-line">VINCENT</span>
                        <span class="title-line accent">VAN GOGH</span>
                    </h1>
                    <div class="hero-subtitle">
                        <span class="subtitle-text">POST-IMPRESSIONIST</span>
                        <span class="subtitle-accent">DIGITAL RENAISSANCE</span>
                    </div>
                </div>
                <div class="hero-visual">
                    <div class="hologram-frame">
                        <div class="scan-line"></div>
                    </div>
                </div>
            </div>
            <div class="scroll-indicator">
                <div class="scroll-arrow"></div>
                <span class="scroll-text">EXPLORE</span>
            </div>
        </header>

        <main class="main-content">
            <section class="content-section about-section" id="about">
                <div class="section-container">
                    <div class="section-header">
                        <h2 class="section-title">
                            <span class="title-text">WHO IS HE?</span>
                        </h2>
                        <div class="section-line"></div>
                    </div>
                    <div class="about-content">
                        <div class="about-text">
                            <p class="text-block">
                                His name is <span class="highlight">Vincent van Gogh (1853-1890)</span>; he was a post-impressionist artist from the Netherlands whose paintings are highly renowned in art history. His unique style and emotional intensity have made him one of the most celebrated artists of all time.
                            </p>
                        </div>
                        <div class="about-image">
                            <div class="image-frame">
                                <img src="https://iiif.micr.io/pMtwg/full/1500,/0/default.webp" 
                                     alt="Vincent van Gogh self-portrait" 
                                     class="portrait-img">
                                <div class="image-overlay">
                                    <div class="overlay-text">SELF-PORTRAIT 1887-88</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="content-section legacy-section">
                <div class="section-container">
                    <div class="section-header">
                        <h2 class="section-title">
                            <span class="title-text">HOW DID HE BECOME FAMOUS?</span>
                        </h2>
                        <div class="section-line"></div>
                    </div>
                    <div class="legacy-content">
                        <p class="text-block">
                            Vincent van Gogh became a legendary painter largely due to his revolutionary approach to color, brushwork, and emotional expression. Despite selling only one painting during his lifetime, his posthumous recognition transformed him into an icon of artistic genius and perseverance.
                        </p>
                    </div>
                </div>
            </section>

            <section class="content-section paintings-section" id="paintings">
                <div class="section-container">
                    <div class="section-header">
                        <h2 class="section-title">
                            <span class="title-text">MASTERPIECES</span>
                        </h2>
                        <div class="section-line"></div>
                    </div>
                    <div class="paintings-grid">
                        <div class="painting-card" data-painting="starry-night">
                            <div class="card-inner">
                                <div class="card-front">
                                    <div class="painting-frame">
                                        <img src="images/starrynightvangogh.png" alt="The Starry Night" class="painting-img">
                                        <div class="painting-overlay">
                                            <h3 class="painting-title">THE STARRY NIGHT</h3>
                                            <div class="painting-year">1889</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-back">
                                    <div class="card-info">
                                        <h3>THE STARRY NIGHT</h3>
                                        <p>A swirling night sky over a French village, painted during Van Gogh's stay at the Saint-Paul-de-Mausole asylum.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="painting-card" data-painting="sunflowers">
                            <div class="card-inner">
                                <div class="card-front">
                                    <div class="painting-frame">
                                        <img src="images/sunflowersvangogh.png" alt="Sunflowers" class="painting-img">
                                        <div class="painting-overlay">
                                            <h3 class="painting-title">SUNFLOWERS</h3>
                                            <div class="painting-year">1888</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-back">
                                    <div class="card-info">
                                        <h3>SUNFLOWERS</h3>
                                        <p>A series of still life paintings featuring sunflowers, created to decorate Paul Gauguin's room in Arles.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="painting-card" data-painting="irises">
                            <div class="card-inner">
                                <div class="card-front">
                                    <div class="painting-frame">
                                        <img src="images/irisesvangogh.png" alt="Irises" class="painting-img">
                                        <div class="painting-overlay">
                                            <h3 class="painting-title">IRISES</h3>
                                            <div class="painting-year">1889</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-back">
                                    <div class="card-info">
                                        <h3>IRISES</h3>
                                        <p>Painted in the garden of the Saint-Paul-de-Mausole asylum, showcasing Van Gogh's mastery of color and form.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="content-section gallery-section">
                <div class="section-container">
                    <div class="section-header">
                        <h2 class="section-title">
                            <span class="title-text">TOP 5 PAINTINGS</span>
                        </h2>
                        <div class="section-line"></div>
                    </div>
                    <div class="gallery-toggle">
                        <button class="toggle-btn" id="gallery-toggle">
                            <span class="toggle-text">REVEAL COLLECTION</span>
                            <span class="toggle-icon">▼</span>
                        </button>
                    </div>
                    <div class="gallery-content" id="gallery-content">
                        <div class="gallery-grid">
                            <div class="gallery-item" data-rank="1">
                                <a href="https://www.moma.org/collection/works/79802" class="gallery-link">
                                    <div class="gallery-frame">
                                        <img src="images/starrynightvangogh.png" alt="Starry Night" class="gallery-img">
                                        <div class="gallery-info">
                                            <span class="gallery-rank">#1</span>
                                            <span class="gallery-name">STARRY NIGHT</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="gallery-item" data-rank="2">
                                <a href="https://www.vangoghmuseum.nl/en/collection/s0031v1962" class="gallery-link">
                                    <div class="gallery-frame">
                                        <img src="images/sunflowersvangogh.png" alt="Sunflowers" class="gallery-img">
                                        <div class="gallery-info">
                                            <span class="gallery-rank">#2</span>
                                            <span class="gallery-name">SUNFLOWERS</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="gallery-item" data-rank="3">
                                <a href="https://www.vangoghmuseum.nl/en/collection/s0050v1962" class="gallery-link">
                                    <div class="gallery-frame">
                                        <img src="images/irisesvangogh.png" alt="Irises" class="gallery-img">
                                        <div class="gallery-info">
                                            <span class="gallery-rank">#3</span>
                                            <span class="gallery-name">IRISES</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="gallery-item" data-rank="4">
                                <a href="https://www.vangoghmuseum.nl/en/collection/s0047V1962" class="gallery-link">
                                    <div class="gallery-frame">
                                        <img src="images/bedroominarles.png" alt="Bedroom in Arles" class="gallery-img">
                                        <div class="gallery-info">
                                            <span class="gallery-rank">#4</span>
                                            <span class="gallery-name">BEDROOM IN ARLES</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="gallery-item" data-rank="5">
                                <a href="https://www.vangoghmuseum.nl/en/collection/s0005v1962" class="gallery-link">
                                    <div class="gallery-frame">
                                        <img src="images/thepotatoeatersvangogh.png" alt="The Potato Eaters" class="gallery-img">
                                        <div class="gallery-info">
                                            <span class="gallery-rank">#5</span>
                                            <span class="gallery-name">THE POTATO EATERS</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <footer class="footer">
            <div class="footer-content">
                <div class="footer-text">
                    <span class="copyright">© 2024 M. ARDHAN RAHMAN</span>
                    <span class="rights">ALL RIGHTS RESERVED</span>
                </div>
                <div class="footer-social">
                    <div class="social-line"></div>
                    <span class="social-text">DIGITAL RENAISSANCE</span>
                </div>
            </div>
        </footer>
    </div>

    <script src="js/script.js"></script>
</body>

</html>
