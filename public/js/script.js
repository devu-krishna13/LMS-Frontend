// 1. Header scroll effect
window.addEventListener('scroll', () => {
    const header = document.getElementById('header');
    if (window.scrollY > 50) {
        header.classList.add('scrolled');
    } else {
        header.classList.remove('scrolled');
    }
});

// 2. Premium Reveal Animations
const revealElements = document.querySelectorAll('[data-premium-reveal]');
const revealOnScroll = () => {
    revealElements.forEach(el => {
        const rect = el.getBoundingClientRect();
        const windowHeight = window.innerHeight;
        if (rect.top < windowHeight * 0.9) {
            el.classList.add('active');
        }
    });
};
window.addEventListener('scroll', revealOnScroll);
window.addEventListener('load', revealOnScroll);

// 3. Interactive Module Tabs
const tabs = document.querySelectorAll('.module-tab');
const contents = document.querySelectorAll('.module-content');
const moduleImg = document.getElementById('module-img');

const imageMap = {
    admin: 'assets/Modules/premium_admin.png',
    tutor: 'assets/Modules/premium_trainer.png',
    student: 'assets/Modules/premium_student.png'
};

tabs.forEach(tab => {
    tab.addEventListener('click', () => {
        tabs.forEach(t => t.classList.remove('active'));
        tab.classList.add('active');

        const target = tab.getAttribute('data-target');
        contents.forEach(content => {
            content.classList.remove('active');
            if (content.id === target) content.classList.add('active');
        });

        // Update central image with animation
        moduleImg.style.opacity = '0';
        moduleImg.style.transform = 'translateY(20px)';
        setTimeout(() => {
            moduleImg.src = imageMap[target];
            moduleImg.style.opacity = '1';
            moduleImg.style.transform = 'translateY(0)';
        }, 300);
    });
});


// 4. Bento Card Mouse Glow Effect
document.querySelectorAll('.bento-card').forEach(card => {
    card.addEventListener('mousemove', e => {
        const rect = card.getBoundingClientRect();
        const x = e.clientX - rect.left;
        const y = e.clientY - rect.top;

        card.style.setProperty('--x', `${x}px`);
        card.style.setProperty('--y', `${y}px`);
    });
});

// 5. Mouse Parallax for Background Floaties
const floaties = document.querySelectorAll('.floaty');
document.addEventListener('mousemove', (e) => {
    const { clientX, clientY } = e;
    const centerX = window.innerWidth / 2;
    const centerY = window.innerHeight / 2;
    
    floaties.forEach((floaty, index) => {
        const speed = (index + 1) * 30;
        const x = (clientX - centerX) / speed;
        const y = (clientY - centerY) / speed;
        floaty.style.transform = `translate(${x}px, ${y}px)`;
    });
});

// 6. Smooth Scroll
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            window.scrollTo({
                top: target.offsetTop - 100,
                behavior: 'smooth'
            });
        }
    });
});

// 7. Watch Demo Modal Logic
const demoBtn = document.getElementById('watch-demo-btn');
const demoModal = document.getElementById('demo-modal');
const closeModal = document.querySelector('.close-modal');
const roleBtns = document.querySelectorAll('.role-btn');
const demoForm = document.getElementById('demo-info-form');
const step1 = document.getElementById('demo-step-1');
const step2 = document.getElementById('demo-step-2');

if (demoBtn) {
    demoBtn.addEventListener('click', (e) => {
        e.preventDefault();
        demoModal.classList.add('active');
        document.body.style.overflow = 'hidden';

        const savedLead = localStorage.getItem('lms_demo_lead');
        
        if (savedLead) {
            // Skip to Step 2 if user already provided info
            step1.style.display = 'none';
            step2.style.display = 'block';
            step2.style.opacity = '1';
        } else {
            // Show Step 1
            step1.style.display = 'block';
            step1.style.opacity = '1';
            step2.style.display = 'none';
        }
    });
}

// 7.1 Role Access Link Logic
let pendingRedirect = null;
const roleAccessBtns = document.querySelectorAll('.role-access-btn');

roleAccessBtns.forEach(btn => {
    btn.addEventListener('click', (e) => {
        const savedLead = localStorage.getItem('lms_demo_lead');
        
        if (!savedLead) {
            e.preventDefault();
            pendingRedirect = btn.getAttribute('href');
            demoModal.classList.add('active');
            document.body.style.overflow = 'hidden';
            step1.style.display = 'block';
            step1.style.opacity = '1';
            step2.style.display = 'none';
        }
    });
});

if (closeModal) {
    closeModal.addEventListener('click', () => {
        demoModal.classList.remove('active');
        document.body.style.overflow = 'auto';
    });
}

// Handle Form Submission
if (demoForm) {
    demoForm.addEventListener('submit', (e) => {
        e.preventDefault();
        
        // Capture data and persist in localStorage
        const formData = {
            name: document.getElementById('inst-name').value,
            location: document.getElementById('inst-location').value,
            phone: document.getElementById('country-code').value + ' ' + document.getElementById('inst-phone').value,
            email: document.getElementById('inst-email').value,
        };
        
        localStorage.setItem('lms_demo_lead', JSON.stringify(formData));
        console.log('Lead Captured & Persisted:', formData);

        // If there was a pending redirect, go there immediately
        if (pendingRedirect) {
            window.open(pendingRedirect, '_blank');
            demoModal.classList.remove('active');
            document.body.style.overflow = 'auto';
            pendingRedirect = null;
            return;
        }

        // Transition to Step 2 (Normal flow)
        step1.style.opacity = '0';
        setTimeout(() => {
            step1.style.display = 'none';
            step2.style.display = 'block';
            step2.style.opacity = '0';
            setTimeout(() => {
                step2.style.opacity = '1';
                step2.style.transition = '0.5s';
            }, 50);
        }, 300);
    });
}

// 8. Gallery Lightbox Logic
const galleryItems = document.querySelectorAll('.gallery-item');
const lightboxModal = document.getElementById('lightbox-modal');
const lightboxImg = document.getElementById('lightbox-img');
const closeLightbox = document.querySelector('.close-lightbox');

galleryItems.forEach(item => {
    item.addEventListener('click', () => {
        const img = item.querySelector('img');
        if (img) {
            lightboxImg.src = img.src;
            lightboxModal.classList.add('active');
            document.body.style.overflow = 'hidden';
        }
    });
});

if (closeLightbox) {
    closeLightbox.addEventListener('click', () => {
        lightboxModal.classList.remove('active');
        document.body.style.overflow = 'auto';
    });
}

// Close on background click
if (lightboxModal) {
    lightboxModal.addEventListener('click', (e) => {
        if (e.target === lightboxModal) {
            lightboxModal.classList.remove('active');
            document.body.style.overflow = 'auto';
        }
    });
}

// Close modal on outside click
demoModal.addEventListener('click', (e) => {
    if (e.target === demoModal) {
        demoModal.classList.remove('active');
        document.body.style.overflow = 'auto';
    }
});

const baseUrl = window.location.origin;
const demoLinks = {
    admin: `${baseUrl}/demo/auto-login/admin`,
    tutor: `${baseUrl}/demo/auto-login/tutor`,
    student: `${baseUrl}/demo/auto-login/student`
};

roleBtns.forEach(btn => {
    btn.addEventListener('click', () => {
        const role = btn.getAttribute('data-role');
        window.open(demoLinks[role], '_blank');
        demoModal.classList.remove('active');
        document.body.style.overflow = 'auto';
    });
});
