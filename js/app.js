const jsonData = {
    sertificate: [
        { filename: "[WEB][06][FINAL]WEBSITE DEVELOPMENT FUNDAMENTAL.webp" },
        { filename: "[FRONTEND][13][FINAL]FRONTEND - HTML.webp" },
        { filename: "[CSS][28][FINAL] FRONTEND - CSS.webp" },
        { filename: "champion-wdc.webp" },
        { filename: "competition-edusiber.webp" },
        { filename: "english-alliance-quiz.webp" },
        { filename: "sololearn-html.webp" },
        { filename: "sololearn-php.webp" },
        { filename: "sololearn-javascript.webp" },
        { filename: "sololearn-jquery.webp" },
        { filename: "indosat.webp" },
        { filename: "sololearn-sql.webp" },
        { filename: "[WEB][01]INTERNET INTRODUCTION.webp" },
        { filename: "[WEB][02]WEBSITE DEVELOPMENT INTRODUCTION.webp" },
        { filename: "[WEB][03]INTEGRATED DEVELOPMENT ENVIRONMENT AND TEXT EDITOR.webp" },
        { filename: "[WEB][04]RESPONSIVE WEBSITE DESIGN.webp" },
        { filename: "[WEB][05]CAREER IN WEBSITE DEVELOPMENT.webp" },
        { filename: "[FRONTEND][01]BROWSER, HTTP, DNS, AND HOSTING.webp" },
        { filename: "[FRONTEND][02]INTRODUCTION TO HTML.webp" },
        { filename: "[FRONTEND][03]ATRIBUTES AND BLOCK ELEMENT.webp" },
        { filename: "[FRONTEND][04]HTML IMAGES AND FORMATTED TEXT.webp" },
        { filename: "[FRONTEND][05]INLINE ELEMENTS.webp" },
        { filename: "[FRONTEND][06]SEMANTIC HTML AND GENERIC ELEMENTS.webp" },
        { filename: "[FRONTEND][07]TABLE AND THE IMPLEMENTATION.webp" },
        { filename: "[FRONTEND][08]FORMS AND THE IMPLEMENTATION.webp" },
        { filename: "[FRONTEND][09]HTML STYLES AND COLORS.webp" },
        { filename: "[FRONTEND][10]HTML CLASS AND ID.webp" },
        { filename: "[FRONTEND][11]HTML MEDIA.webp" },
        { filename: "[FRONTEND][12]PRACTICE MAKING A TO DO LIST WEBSITE.webp" },
        { filename: "[CSS][01]INTRODUCTION TO CSS.webp" },
        { filename: "[CSS][02]CSS BOX MODEL 1.webp" },
        { filename: "[CSS][03]CSS BOX MODEL 2.webp" },
        { filename: "[CSS][04]CSS SELECTOR.webp" },
        { filename: "[CSS][05]CSS CASCADE.webp" },
        { filename: "[CSS][06]CSS SPACING.webp" },
        { filename: "[CSS][07]CSS INHERITANCE.webp" },
        { filename: "[CSS][08]CSS COLOR.webp" },
        { filename: "[CSS][09]CSS PSEUDO ELEMENTS.webp" },
        { filename: "[CSS][10]CSS PSEUDO CLASS.webp" },
        { filename: "[CSS][11]CSS SIZING UNIT.webp" },
        { filename: "[CSS][12]CSS LAYOUT.webp" },
        { filename: "[CSS][13]CSS BORDERS.webp" },
        { filename: "[CSS][14]CSS SHADOWS.webp" },
        { filename: "[CSS][15]CSS FOCUS.webp" },
        { filename: "[CSS][16]CSS Z - INDEX.webp" },
        { filename: "[CSS][17]CSS FUNCTION.webp" },
        { filename: "[CSS][18]CSS GRADIENTS.webp" },
        { filename: "[CSS][19]CSS ANIMATIONS.webp" },
        { filename: "[CSS][20]CSS FILTERS.webp" },
        { filename: "[CSS][21]CSS BLEND MODES.webp" },
        { filename: "[CSS][22] CSS LISTS.webp" },
        { filename: "[CSS][23] CSS TRANSITIONS.webp" },
        { filename: "[CSS][24] CSS OVERFLOW.webp" },
        { filename: "[CSS][25] CSS BACKGROUNDS.webp" },
        { filename: "[CSS][26] CSS TEXT AND TYPOGRAPHY.webp" },
        { filename: "[CSS][27] CSS MINI PROJECT.webp" },
    ],
};

document.addEventListener('DOMContentLoaded', () => {
    initTheme();
    initNavigation();
    initAnimations();
    
    // Flexible certificate loading
    const certContainer = document.querySelector(".sertificate-place");
    if (certContainer) {
        const limit = certContainer.dataset.limit ? parseInt(certContainer.dataset.limit) : 0;
        displayCertificates(jsonData, ".sertificate-place", limit);
    }
    
    initModals();
});

/* Theme Toggle */
function initTheme() {
    const toggle = document.getElementById('themeToggle');
    if (!toggle) return;
    
    const icon = toggle.querySelector('i');
    const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
    const storedTheme = localStorage.getItem('theme');

    const setTheme = (theme) => {
        document.documentElement.setAttribute('data-theme', theme);
        localStorage.setItem('theme', theme);
        if (icon) icon.className = theme === 'dark' ? 'fas fa-sun' : 'fas fa-moon';
    };

    if (storedTheme) {
        setTheme(storedTheme);
    } else {
        setTheme(prefersDark ? 'dark' : 'light');
    }

    toggle.addEventListener('click', () => {
        const currentTheme = document.documentElement.getAttribute('data-theme');
        setTheme(currentTheme === 'dark' ? 'light' : 'dark');
    });
}

/* Navigation */
function initNavigation() {
    const nav = document.querySelector('.navbar');
    const toggle = document.querySelector('.nav-toggle');
    const menu = document.querySelector('.nav-menu');
    const links = document.querySelectorAll('.nav-link');

    if (nav) {
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                nav.classList.add('scrolled');
            } else {
                nav.classList.remove('scrolled');
            }
        });
    }

    if (toggle && menu) {
        toggle.addEventListener('click', () => {
            menu.classList.toggle('active');
            const icon = toggle.querySelector('i');
            if (icon) icon.classList.toggle('fa-times');
            if (icon) icon.classList.toggle('fa-bars');
        });

        links.forEach(link => {
            link.addEventListener('click', () => {
                menu.classList.remove('active');
                const icon = toggle.querySelector('i');
                if (icon) {
                    icon.classList.remove('fa-times');
                    icon.classList.add('fa-bars');
                }
            });
        });
    }
}

/* Scroll Animations */
function initAnimations() {
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    }, { threshold: 0.1 });

    document.querySelectorAll('.fade-in').forEach(el => observer.observe(el));
}

/* Certificates */
function displayCertificates(data, selector, max = 0) {
    const container = document.querySelector(selector);
    if (!container) return;

    let html = '';
    let count = 0;

    data.sertificate.forEach((cert, index) => {
        if (max === 0 || index < max) {
            html += `
            <div class="portfolio-item fade-in">
                <img class="portfolio-img" src="img/serti/${cert.filename}" alt="Certificate" loading="lazy">
                <div class="portfolio-overlay">
                    <i class="fas fa-search-plus fa-3x"></i>
                </div>
            </div>
            `;
        }
        count++;
    });

    container.innerHTML = `<div class="portfolio-grid">${html}</div>`;
    
    // Update count if element exists
    const countEl = document.querySelector('.count-sertificate');
    if (countEl) countEl.textContent = count;
}

/* Modal Logic */
function initModals() {
    const modal = document.getElementById('portfolioModal');
    if (!modal) return;
    
    const closeBtn = document.querySelector('.close-modal');
    const modalImg = document.getElementById('modalImg');
    const modalTitle = document.getElementById('modalTitle');
    const modalDesc = document.getElementById('modalDesc');
    const modalLink = document.getElementById('modalLink');

    // Portfolio Items Click (delegation for dynamically added items)
    document.addEventListener('click', (e) => {
        const item = e.target.closest('.portfolio-item');
        if (item) {
            // Check if it's a certificate (simple image modal) or portfolio item (details)
            const img = item.querySelector('img').src;
            
            if (item.hasAttribute('data-id')) {
                // Portfolio Project
                const title = item.querySelector('h4').textContent;
                const desc = item.getAttribute('data-desc');
                const link = item.getAttribute('data-link');

                if (modalTitle) modalTitle.textContent = title;
                if (modalImg) modalImg.src = img;
                if (modalDesc) {
                    modalDesc.innerHTML = desc;
                    modalDesc.style.display = 'block';
                }
                
                if (modalLink) {
                    if (link && link !== '#') {
                        modalLink.href = link;
                        modalLink.style.display = 'inline-flex';
                    } else {
                        modalLink.style.display = 'none';
                    }
                }
            } else {
                // Certificate (Image only)
                if (modalTitle) modalTitle.textContent = "Certificate";
                if (modalImg) modalImg.src = img;
                if (modalDesc) modalDesc.style.display = 'none';
                if (modalLink) modalLink.style.display = 'none';
            }

            modal.classList.add('active');
            document.body.style.overflow = 'hidden';
        }
    });

    // Close Modal
    const closeModal = () => {
        modal.classList.remove('active');
        document.body.style.overflow = '';
    };

    if (closeBtn) closeBtn.addEventListener('click', closeModal);
    modal.addEventListener('click', (e) => {
        if (e.target === modal) closeModal();
    });
}
