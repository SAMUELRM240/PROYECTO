
// ===== PLESHMARK - JavaScript Principal =====

// Variables globales
let currentJobTitle = '';
let jobs = [
    {
        id: 1,
        title: 'Desarrollador de Aplicaciones',
        category: 'Tecnología',
        description: 'Desarrolla aplicaciones móviles y web usando tecnologías modernas.',
        requirements: ['JavaScript', 'React', 'Node.js'],
        salary: '$2,500,000 - $3,500,000',
        location: 'Bogotá',
        company: 'TechCorp'
    },
    {
        id: 2,
        title: 'Gestor de Bases de Datos',
        category: 'Tecnología',
        description: 'Administra y optimiza bases de datos empresariales.',
        requirements: ['SQL', 'MySQL', 'PostgreSQL'],
        salary: '$2,000,000 - $3,000,000',
        location: 'Bogotá',
        company: 'DataSolutions'
    },
    {
        id: 3,
        title: 'Desarrollador de Código',
        category: 'Tecnología',
        description: 'Programa soluciones backend robustas y escalables.',
        requirements: ['Python', 'Java', 'Docker'],
        salary: '$2,800,000 - $4,000,000',
        location: 'Bogotá',
        company: 'CodeFactory'
    },
    {
        id: 4,
        title: 'Ayudante de Mesero',
        category: 'Servicios',
        description: 'Asiste en el servicio de mesa y atención al cliente.',
        requirements: ['Experiencia en servicio', 'Buena comunicación'],
        salary: '$1,200,000 - $1,500,000',
        location: 'Bogotá',
        company: 'RestauranteTop'
    },
    {
        id: 5,
        title: 'Bombero',
        category: 'Seguridad',
        description: 'Responde a emergencias y previene incendios.',
        requirements: ['Certificación bombero', 'Examen físico'],
        salary: '$2,200,000 - $2,800,000',
        location: 'Bogotá',
        company: 'Bomberos Unidos'
    },
    {
        id: 6,
        title: 'Profesor',
        category: 'Educación',
        description: 'Imparte clases y forma a estudiantes de secundaria.',
        requirements: ['Licenciatura en Educación', 'Experiencia docente'],
        salary: '$1,800,000 - $2,500,000',
        location: 'Bogotá',
        company: 'Colegio San Marcos'
    }
];

//  FUNCIONES PRINCIPALES 

// Función para inicializar la aplicación
function initializeApp() {
    console.log('🚀 Iniciando PLESHMARK...');
    
    // Cargar trabajos dinámicamente
    loadJobCards();
    
    // Configurar event listeners
    setupEventListeners();
    
    // Configurar búsqueda
    setupSearch();
    
    console.log('✅ PLESHMARK inicializado correctamente');
}

// Función para cargar las tarjetas de trabajo dinámicamente
function loadJobCards() {
    const jobGrid = document.querySelector('.job-grid');
    if (!jobGrid) return;
    
    jobGrid.innerHTML = ''; // Limpiar contenido existente
    
    jobs.forEach(job => {
        const jobCard = createJobCard(job);
        jobGrid.appendChild(jobCard);
    });
}

// Función para crear una tarjeta de trabajo
function createJobCard(job) {
    const card = document.createElement('div');
    card.className = 'job-card';
    card.setAttribute('data-category', job.category.toLowerCase());
    
    // Determinar color del header basado en la categoría
    let headerClass = 'purple';
    if (job.category === 'Tecnología') headerClass = 'blue';
    else if (job.category === 'Servicios') headerClass = 'purple';
    else if (['Seguridad', 'Educación'].includes(job.category)) headerClass = 'dark';
    
    card.innerHTML = `
        <div class="job-header ${headerClass}">
            ${job.title}
        </div>
        <div class="job-content">
            <h3 class="job-title">${job.title}</h3>
            <p class="job-description">${job.description}</p>
            <div class="job-details">
                <span class="job-salary">${job.salary}</span>
                <span class="job-location">📍 ${job.location}</span>
            </div>
            <button class="apply-btn" onclick="openJobApplication('${job.title}', ${job.id})">
                Aplicar
            </button>
        </div>
    `;
    
    return card;
}

// ===== GESTIÓN DEL SIDEBAR =====

// Función para abrir el sidebar de aplicación
function openJobApplication(jobTitle, jobId = null) {
    currentJobTitle = jobTitle;
    const job = jobs.find(j => j.title === jobTitle);
    
    // Actualizar título del sidebar
    const sidebarTitle = document.getElementById('sidebarTitle');
    if (sidebarTitle) {
        sidebarTitle.textContent = `Aplicar a: ${jobTitle}`;
    }
    
    // Llenar información adicional del trabajo si existe
    if (job) {
        fillJobDetails(job);
    }
    
    // Mostrar sidebar
    showSidebar();
    
    console.log(`📋 Abriendo aplicación para: ${jobTitle}`);
}

// Función para llenar detalles del trabajo en el sidebar
function fillJobDetails(job) {
    // Crear o actualizar sección de detalles del trabajo
    const sidebarContent = document.querySelector('.sidebar-content');
    let jobDetailsSection = document.querySelector('.job-details-section');
    
    if (!jobDetailsSection) {
        jobDetailsSection = document.createElement('div');
        jobDetailsSection.className = 'job-details-section';
        sidebarContent.insertBefore(jobDetailsSection, sidebarContent.firstChild);
    }
    
    jobDetailsSection.innerHTML = `
        <div class="job-info">
            <h4>Detalles del Puesto</h4>
            <p><strong>Empresa:</strong> ${job.company}</p>
            <p><strong>Salario:</strong> ${job.salary}</p>
            <p><strong>Ubicación:</strong> ${job.location}</p>
            <p><strong>Requisitos:</strong> ${job.requirements.join(', ')}</p>
        </div>
        <hr style="margin: 20px 0;">
    `;
}

// Función para mostrar el sidebar
function showSidebar() {
    const sidebar = document.getElementById('sidebar');
    const overlay = document.getElementById('overlay');
    const mainContent = document.getElementById('mainContent');
    
    if (sidebar) sidebar.classList.add('open');
    if (overlay) overlay.classList.add('active');
    if (mainContent) mainContent.classList.add('sidebar-open');
    
    document.body.style.overflow = 'hidden';
}

// Función para cerrar el sidebar
function closeSidebar() {
    const sidebar = document.getElementById('sidebar');
    const overlay = document.getElementById('overlay');
    const mainContent = document.getElementById('mainContent');
    
    if (sidebar) sidebar.classList.remove('open');
    if (overlay) overlay.classList.remove('active');
    if (mainContent) mainContent.classList.remove('sidebar-open');
    
    document.body.style.overflow = 'auto';
    
    // Limpiar formulario
    const form = document.getElementById('applicationForm');
    if (form) form.reset();
    
    // Limpiar detalles del trabajo
    const jobDetailsSection = document.querySelector('.job-details-section');
    if (jobDetailsSection) jobDetailsSection.remove();
}

// ===== BÚSQUEDA Y FILTROS =====

// Función para configurar la búsqueda
function setupSearch() {
    const searchButton = document.querySelector('.search-button');
    const searchInput = document.querySelector('.search-input');
    const filterBtn = document.querySelector('.filter-btn');
    
    if (searchButton) {
        searchButton.addEventListener('click', performSearch);
    }
    
    if (searchInput) {
        // Convertir a input funcional
        searchInput.innerHTML = `
            <input type="text" id="searchField" placeholder="Buscar trabajos..." />
            <span onclick="performSearch()" style="cursor: pointer;">🔍</span>
        `;
        
        // Búsqueda en tiempo real
        const searchField = document.getElementById('searchField');
        if (searchField) {
            searchField.addEventListener('input', debounce(performSearch, 300));
            searchField.addEventListener('keypress', function(e) {
                if (e.key === 'Enter') performSearch();
            });
        }
    }
    
    if (filterBtn) {
        filterBtn.addEventListener('click', toggleFilters);
    }
}

// Función para realizar búsqueda
function performSearch() {
    const searchField = document.getElementById('searchField');
    const query = searchField ? searchField.value.toLowerCase().trim() : '';
    
    const jobCards = document.querySelectorAll('.job-card');
    let visibleCount = 0;
    
    jobCards.forEach(card => {
        const title = card.querySelector('.job-title').textContent.toLowerCase();
        const description = card.querySelector('.job-description').textContent.toLowerCase();
        
        const isVisible = query === '' || title.includes(query) || description.includes(query);
        
        if (isVisible) {
            card.style.display = 'block';
            visibleCount++;
        } else {
            card.style.display = 'none';
        }
    });
    
    // Mostrar mensaje si no hay resultados
    showSearchResults(visibleCount, query);
    
    console.log(`🔍 Búsqueda: "${query}" - ${visibleCount} resultados`);
}

// Función para mostrar resultados de búsqueda
function showSearchResults(count, query) {
    let resultsMessage = document.querySelector('.search-results-message');
    
    if (!resultsMessage) {
        resultsMessage = document.createElement('div');
        resultsMessage.className = 'search-results-message';
        document.querySelector('.offers-section').insertBefore(
            resultsMessage, 
            document.querySelector('.main-content')
        );
    }
    
    if (query && count === 0) {
        resultsMessage.innerHTML = `
            <p style="text-align: center; color: #666; padding: 20px;">
                No se encontraron trabajos para "${query}". 
                <span onclick="clearSearch()" style="color: #8B5CF6; cursor: pointer; text-decoration: underline;">
                    Ver todos los trabajos
                </span>
            </p>
        `;
        resultsMessage.style.display = 'block';
    } else if (query) {
        resultsMessage.innerHTML = `
            <p style="text-align: center; color: #666; padding: 10px;">
                Mostrando ${count} resultado(s) para "${query}"
            </p>
        `;
        resultsMessage.style.display = 'block';
    } else {
        resultsMessage.style.display = 'none';
    }
}

// Función para limpiar búsqueda
function clearSearch() {
    const searchField = document.getElementById('searchField');
    if (searchField) {
        searchField.value = '';
        performSearch();
    }
}

// Función para alternar filtros
function toggleFilters() {
    console.log('🔧 Abriendo filtros...');
    // Aquí puedes implementar un modal de filtros más avanzado
    alert('Función de filtros en desarrollo. Próximamente disponible.');
}

// ===== GESTIÓN DE FORMULARIOS =====

// Función para configurar el formulario de aplicación
function setupApplicationForm() {
    const form = document.getElementById('applicationForm');
    if (!form) return;
    
    form.addEventListener('submit', handleApplicationSubmit);
    
    // Validación en tiempo real
    const inputs = form.querySelectorAll('input, textarea, select');
    inputs.forEach(input => {
        input.addEventListener('blur', validateField);
        input.addEventListener('input', clearFieldError);
    });
}

// Función para manejar el envío del formulario
function handleApplicationSubmit(e) {
    e.preventDefault();
    
    const formData = new FormData(e.target);
    const applicationData = Object.fromEntries(formData.entries());
    
    // Validar formulario
    if (!validateForm(applicationData)) {
        return;
    }
    
    // Mostrar loading
    showLoadingState(true);
    
    // Simular envío (aquí integrarías con tu backend)
    setTimeout(() => {
        showLoadingState(false);
        showSuccessMessage(currentJobTitle);
        closeSidebar();
        
        // Guardar aplicación localmente para demo
        saveApplication(currentJobTitle, applicationData);
        
    }, 1500);
}

// Función para validar formulario
function validateForm(data) {
    const errors = [];
    
    if (!data.fullName || data.fullName.trim().length < 2) {
        errors.push('El nombre completo debe tener al menos 2 caracteres');
    }
    
    if (!data.email || !isValidEmail(data.email)) {
        errors.push('Ingresa un correo electrónico válido');
    }
    
    if (!data.phone || data.phone.trim().length < 10) {
        errors.push('El teléfono debe tener al menos 10 dígitos');
    }
    
    if (!data.experience) {
        errors.push('Selecciona tus años de experiencia');
    }
    
    if (!data.motivation || data.motivation.trim().length < 20) {
        errors.push('La motivación debe tener al menos 20 caracteres');
    }
    
    if (errors.length > 0) {
        showFormErrors(errors);
        return false;
    }
    
    return true;
}

// Función para validar campo individual
function validateField(e) {
    const field = e.target;
    const value = field.value.trim();
    let isValid = true;
    let message = '';
    
    switch (field.type) {
        case 'email':
            isValid = isValidEmail(value);
            message = isValid ? '' : 'Correo electrónico inválido';
            break;
        case 'tel':
            isValid = value.length >= 10;
            message = isValid ? '' : 'Teléfono debe tener al menos 10 dígitos';
            break;
        default:
            isValid = value.length > 0;
            message = isValid ? '' : 'Este campo es requerido';
    }
    
    showFieldValidation(field, isValid, message);
}

// ===== FUNCIONES AUXILIARES =====

// Función para validar email
function isValidEmail(email) {
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
}

// Función debounce para búsqueda
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

// Función para mostrar estado de loading
function showLoadingState(show) {
    const submitBtn = document.querySelector('.submit-btn');
    if (!submitBtn) return;
    
    if (show) {
        submitBtn.disabled = true;
        submitBtn.textContent = 'Enviando...';
        submitBtn.style.opacity = '0.6';
    } else {
        submitBtn.disabled = false;
        submitBtn.textContent = 'Enviar Aplicación';
        submitBtn.style.opacity = '1';
    }
}

// Función para mostrar mensaje de éxito
function showSuccessMessage(jobTitle) {
    const message = `
        ¡Gracias por aplicar a ${jobTitle}!
        
        Hemos recibido tu aplicación exitosamente.
        Te contactaremos pronto.
    `;
    
    alert(message);
    console.log(`✅ Aplicación enviada para: ${jobTitle}`);
}

// Función para mostrar errores del formulario
function showFormErrors(errors) {
    alert('Por favor corrige los siguientes errores:\n\n• ' + errors.join('\n• '));
}

// Función para mostrar validación de campo
function showFieldValidation(field, isValid, message) {
    // Remover validación anterior
    clearFieldError(field);
    
    if (!isValid && message) {
        field.style.borderColor = '#ef4444';
        
        const errorElement = document.createElement('span');
        errorElement.className = 'field-error';
        errorElement.textContent = message;
        errorElement.style.color = '#ef4444';
        errorElement.style.fontSize = '12px';
        errorElement.style.display = 'block';
        errorElement.style.marginTop = '5px';
        
        field.parentNode.appendChild(errorElement);
    } else if (isValid) {
        field.style.borderColor = '#10b981';
    }
}

// Función para limpiar error de campo
function clearFieldError(field) {
    if (typeof field === 'object' && field.target) {
        field = field.target;
    }
    
    field.style.borderColor = '#E5E7EB';
    const errorElement = field.parentNode.querySelector('.field-error');
    if (errorElement) {
        errorElement.remove();
    }
}

// Función para guardar aplicación (demo)
function saveApplication(jobTitle, data) {
    const applications = JSON.parse(localStorage.getItem('pleshmarkApplications') || '[]');
    
    const application = {
        id: Date.now(),
        jobTitle,
        ...data,
        appliedAt: new Date().toISOString()
    };
    
    applications.push(application);
    localStorage.setItem('pleshmarkApplications', JSON.stringify(applications));
    
    console.log('💾 Aplicación guardada:', application);
}

// ===== CONFIGURACIÓN DE EVENT LISTENERS =====

function setupEventListeners() {
    // Cerrar sidebar con Escape
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            closeSidebar();
        }
    });
    
    // Click en overlay para cerrar sidebar
    const overlay = document.getElementById('overlay');
    if (overlay) {
        overlay.addEventListener('click', closeSidebar);
    }
    
    // Configurar formulario
    setupApplicationForm();
    
    // Smooth scroll para navegación
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth'
                });
            }
        });
    });
    
    // Animaciones al hacer scroll
    setupScrollAnimations();
}

// Función para configurar animaciones de scroll
function setupScrollAnimations() {
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, observerOptions);
    
    // Observar tarjetas de trabajo
    document.querySelectorAll('.job-card').forEach(card => {
        card.style.opacity = '0';
        card.style.transform = 'translateY(20px)';
        card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        observer.observe(card);
    });
}

// ===== INICIALIZACIÓN =====

// Inicializar cuando el DOM esté cargado
document.addEventListener('DOMContentLoaded', initializeApp);

// También inicializar si el documento ya está cargado
if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initializeApp);
} else {
    initializeApp();
}

// PRUEBA

        

        function openSidebar(jobTitle) {
            currentJobTitle = jobTitle;
            document.getElementById('sidebarTitle').textContent = `Aplicar a: ${jobTitle}`;
            document.getElementById('sidebar').classList.add('open');
            document.getElementById('overlay').classList.add('active');
            document.getElementById('mainContent').classList.add('sidebar-open');
            document.body.style.overflow = 'hidden';
        }

        function closeSidebar() {
            document.getElementById('sidebar').classList.remove('open');
            document.getElementById('overlay').classList.remove('active');
            document.getElementById('mainContent').classList.remove('sidebar-open');
            document.body.style.overflow = 'auto';
            
            // Reset form
            document.getElementById('applicationForm').reset();
        }

        // Handle form submission
        document.getElementById('applicationForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            alert('¡Gracias por aplicar a ${currentJobTitle}!\n\nHemos recibido tu aplicación.');
            closeSidebar();
        });

        // Close sidebar with Escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closeSidebar();
            }
        });