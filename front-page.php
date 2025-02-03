<?php
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contablemente Asesores</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <?php get_header(); 
    class="header">
    <?php echo get_template_directory_uri(); ?>/logo.png
        <nav class="nav-menu">
            <a href="#inicio">Inicio</a>
            <a href="#nosotros">Nosotros</a>
            <a href="#servicios">Servicios</a>
        </nav>
            <div class="header-buttons">
            <div> 
                <a href="https://wa.me/3217523626" class="whatsapp-button"><img src="lwhatsapp.png" alt="WhatsApp" class="whatsapp-icon"> 3217523626</a>
            </div>
            <a href="https://calendar.google.com/calendar/u/0/selfsched?sstoken=TU_TOKEN" class="cta-button" target="_blank">
                Agendar asesoría
            </a>
        
    </header>?>

    <section id="nosotros" class="hero-section">
        <img src="fotoppal.png" alt="Equipo de Contablemente Asesores" class="hero-image">
        <div class="hero-content">
            <h3>Tus aliados contables</h3>
            <h1>Líderes en gerencia contable y tributaria</h1>
            <h3>Emprendedores, Pymes, Medianas y Grandes Empresas</h3>
            <button class="cta-button" style="margin: 20px":>Hablar con un asesor</button>
        </div>
    </section>

    <section class="about-us">
        <span>CONTABLEMENTE ASESORES, 15 años impactando empresas. Somos una firma de gerencia contable y
            tributaria en búsqueda de satisfacer las necesidades de nuestros clientes con valores agregados en nómina,
            servicios jurídicos laborales, apoyo administrativo y consultoría en salud y seguridad en el trabajo.</span>
    </section>

    <section class="why-choose-us">
        <div><h1>¿Por qué elegirnos?</h1></div>
        <div>    
            <span>Recibe asesoría especializada y confiable, accedes a los
                servicios de una amplia gama de profesionales de distintas
                ramas y obtienes acompañamiento continuo.
            </span>
        </div>
        <div class="features">
            <div class="feature-card">
                <i class="fas fa-dollar-sign"></i>
                <h3>Reducción de costos</h3>
                <p>Tenemos a tu disposición todo el equipo humano y tecnológico que requiere un área contable.</p>
            </div>
            <div class="feature-card">
                <i class="fas fa-bullseye"></i>
                <h3>Foco</h3>
                <p>Podrás ser más eficiente y competitivo en tu actividad principal. Nosotros nos encargamos del resto.</p>
            </div>
            <div class="feature-card">
                <i class="fas fa-box"></i>
                <h3>Ocupas menos espacio</h3>
                <p>Destina tus espacios para funciones propias de tu actividad principal. Tu equipo estará en nuestras oficinas.</p>
            </div>
        </div>
    </section>

    <Section class="plans-tittle">
        <h2>Nuestros Planes</h2>
        <div>
            <p>Elige el plan que más se ajuste a tus necesidades. Si requieres un servicio más personalizado,
            comunícate con nuestros asesores para diseñar una solución a tu medida.</p>
        </div>
    </Section>

    <section class="plans">
        <div>
            <div class="plan-cards">
            <div class="plan-card">
                <h3>Emprendedor</h3>
                <h4>Pyme</h4>
                <p><strong>Soporte contable en línea, Gestión Contable, Gestión de nómina (1 a 3 empleados), Gestión tributaria.</strong></p>
                <p>*Gestión Administrativa (opcional) consulte valor con nuestros asesores 
                   *Soporte Jurídico laboral y comercial virtual (Opcional) consulte valor con nuestros asesores</p>
                <a href="#" class="cta-button">Adquirir plan</a>
            </div>
    
            <div class="plan-card">
                <h3>Básico</h3>
                <h4>Empresas Pequeñas</h4>
                <p><strong>Soporte contable en línea, Gestión Contable, Gestión de nómina (hasta 10 empleados), Gestión tributaria.</strong></p>
                <p>*Gestión Administrativa (opcional) consulte valor con nuestros asesores 
                   *Soporte Jurídico laboral y comercial virtual (Opcional) consulte valor con nuestros asesores</p>
                <a href="#" class="cta-button">Adquirir plan</a>
            </div>
    
            <div class="plan-card">
                <h3>Intermedio</h3>
                <h4>Empresa Mediana</h4>
                <p><strong>Soporte contable en línea, Gestión Contable, Gestión de nómina (1 a 3 empleados), Gestión tributaria.</strong></p>
                <p>*Gestión Administrativa (opcional) consulte valor con nuestros asesores 
                   *Soporte Jurídico laboral y comercial virtual (Opcional) consulte valor con nuestros asesores</p>
                <a href="#" class="cta-button">Adquirir plan</a>
            </div>
    
            <div class="plan-card">
                <h3>Full</h3>
                <h4>Empresa Grande</h4>
                <p><strong>Soporte contable en línea, Gestión Contable, Gestión de nómina (1 a 3 empleados), Gestión tributaria.</strong></p>
                <p>*Gestión Administrativa (opcional) consulte valor con nuestros asesores 
                   *Soporte Jurídico laboral y comercial virtual (Opcional) consulte valor con nuestros asesores</p>
                <a href="#" class="cta-button">Adquirir plan</a>
            </div>
        </div>
    </div>
    </section>

    <Section class="tittle">
        <h1>¡Lo hacemos por ti!</h1>
    </Section>

    <section class="services">
        <h2>Servicios</h2>
        <div>    
            <span>Recibe asesoría especializada y confiable, accedes a los
                servicios de una amplia gama de profesionales de distintas
                ramas y obtienes acompañamiento continuo.
            </span>
        </div>
        <div class="features">
            <div class="feature-card">
                <h3>Consultoría Tributaria</h3>
                <p>Planificamos y proyectamos sus
                    impuestos de persona natural o
                    jurídica mediante la correcta
                    aplicación de las normas tributarias
                    vigentes.</p>
                <a href="#" class="srv-button">Cotizar servicio</a>
            </div>
            <div class="feature-card">
                <h3>Contadores Freelancer</h3>
                <h5>En nuestras instalaciones</h5>
                <p>Preparamos y presentamos tus
                    impuestos, emitimos y certificamos
                    estados financieros.</p>
                <a href="#" class="srv-button">Cotizar servicio</a>
            </div>
            <div class="feature-card">
                <h3>Ocupas menos espacio</h3>
                <p>Destina tus espacios para funciones propias de tu actividad principal. Tu equipo estará en nuestras oficinas.</p>
                <a href="#" class="srv-button">Cotizar servicio</a>
            </div>
        </div>
    </section>

    <Section class="tittle">
        <h1>Clientes que han confiado en nosotros</h1>
    </Section>

<section class="testimonials">
    <h3>Testimonios</h3>
    <h2>Lo que dicen nuestros clientes</h2>
    <p>Valoramos enormemente las relaciones sólidas y en Contablemente Asesores Contables
        nos encargamos de construir historias para toda la vida.</p>
    <div class="testimonial-cards">
        <div class="testimonial-card">
            <!-- Información y detalles del testimonio -->
        </div>
        <!-- Agrega más tarjetas de testimonio aquí -->
    </div>
</section>

<section class="newsletter">
    <h2>Suscríbete y recibe 10% en tu primer mes de servicio</h2>
    <form class="newsletter-form">
        <input type="email" placeholder="Ingresa tu e-mail">
        <button type="submit" class="cta-button">Suscribirse</button>
    </form>
</section>

<?php get_footer(); 
class="footer">
    <p>&copy; 2024 Contablemente Asesores. Todos los derechos reservados.</p>
</footer>?>

</body>
</html>