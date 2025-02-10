@extends('portfolio.layout.main')
@section('content')

<main class="container-fluid bg-dark text-white py-5">
    
    <section id="#" class="text-center  py-5">
        
        <div class="row align-items-center">
            @if(session('success'))
          <div class="alert alert-success mt-4">
        {{ session('success') }}
             </div>
       @endif

            <div class="col-md-6">
                <h2 class="mb-4">Bipana Chapain</h2>
                <p class="fs-5">I'm a <span class="text-info" id="role"></span></p>
                
                    <a href="{{ asset('storage/images/cv.pdf') }}" class="btn btn-primary" download>Download my CV</a>
                
            </div>
            
            <div class="col-md-6 py-5">
                <img src="{{ asset('storage/images/bipanachapain.jpg') }}"
                     class="img-fluid rounded shadow-lg auto-scroll" 
                     alt="My Profile Image" 
                     style="max-width: 300px;">
            </div>
        </div>
    </section>
    
    <section id="about" class="py-5 bg-dark text-white">
        <div class="container text-center">
            <h2 class="mb-5 underlined" style="text-transform: uppercase; letter-spacing: 2px;">About</h2>
            <div class="row align-items-center">
                <div class="col-12 col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('storage/images/aboutme.JPG') }}" alt="About Me" class="img-fluid rounded shadow-lg" style="max-width: 300px;">
                </div>
               
                <div class="col-12 col-md-6">
                    <p class="mb-3">
                        I am a passionate and dedicated individual with a strong foundation in coding, design, and development. 
                        My journey into technology has been fueled by curiosity and a desire to solve problems creatively.
                    </p>
                    <p class="mb-3">
                        With skills in Python, Java, Laravel, and UI/UX design, I focus on creating impactful and user-friendly digital solutions. 
                        I thrive in collaborative environments and continuously seek opportunities to grow.
                    </p>
                   
                </div>
            </div>
        </div>
    </section>
    

   
    <section id="skills" class="text-center py-5 bg-dark text-white">
        <div class="container">
            <!-- Section Title -->
            <h2 class="text-center mb-5 underlined" style="text-transform: uppercase; letter-spacing: 2px;">My Skill</h2>
    
            <div class="row g-4">
                <!-- Languages -->
                <div class="col-md-4">
                    <div class="card bg-light text-dark border-0 shadow-sm h-100 skill-card">
                        <div class="card-body">
                            <h4 class="text-center text-info mb-4">
                                <i class="fas fa-code"></i> Languages
                            </h4>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-arrow-circle-right text-info me-2"></i>HTML</li>
                                <li><i class="fas fa-arrow-circle-right text-info me-2"></i>CSS</li>
                                <li><i class="fas fa-arrow-circle-right text-info me-2"></i>PHP</li>
                                <li><i class="fas fa-arrow-circle-right text-info me-2"></i>JavaScript</li>
                                <li><i class="fas fa-arrow-circle-right text-info me-2"></i>Java</li>
                                <li><i class="fas fa-arrow-circle-right text-info me-2"></i>Python</li>
                            </ul>
                        </div>
                    </div>
                </div>
    
                <!-- Frameworks -->
                <div class="col-md-4">
                    <div class="card bg-light text-dark border-0 shadow-sm h-100 skill-card">
                        <div class="card-body">
                            <h4 class="text-center text-info mb-4">
                                <i class="fas fa-layer-group"></i> Frameworks
                            </h4>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-arrow-circle-right text-info me-2"></i>Laravel</li>
                               
                                <li><i class="fas fa-arrow-circle-right text-info me-2"></i>Bootstrap</li>
                            </ul>
                        </div>
                    </div>
                </div>
    
                <!-- Tools -->
                <div class="col-md-4">
                    <div class="card bg-light text-dark border-0 shadow-sm h-100 skill-card">
                        <div class="card-body">
                            <h4 class="text-center text-info mb-4">
                                <i class="fas fa-tools"></i> Tools
                            </h4>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-arrow-circle-right text-info me-2"></i>Git & GitHub</li>
                                <li><i class="fas fa-arrow-circle-right text-info me-2"></i>Postman</li>
                                <li><i class="fas fa-arrow-circle-right text-info me-2"></i>MySQL</li>
                                <li><i class="fas fa-arrow-circle-right text-info me-2"></i>Figma</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
    <section id="resume" class="py-5 bg-dark text-white">
        <div class="container text-center">
            <!-- Section Title -->
            <h2 class="text-center mb-5 underlined" style="text-transform: uppercase; letter-spacing: 2px;">
                My Resume
            </h2>
    
            <!-- Resume Content -->
            <div class="row justify-content-center">
                <div class="col-md-10">
    
                    <!-- Education Section -->
                    <div class="card bg-light text-dark p-4 mb-5 shadow">
                        <h3 class="text-center text-info mb-4">
                            <i class="fas fa-graduation-cap"></i> Education
                        </h3>
    
                        <div class="timeline">
                            <!-- Education Item 1 -->
                            <div class="timeline-item mb-4">
                                <h4 class="text-primary">
                                    <i class="fas fa-university me-2"></i> Bachelor of Information Management
                                </h4>
                                <p class="mb-1">
                                    <strong>2020 - Present</strong>
                                </p>
                                <p><em>Kanya Campus, Pokhara</em></p>
                                <p>
                                    Developing skills in IT and management, focusing on programming, software engineering, and business integration.
                                </p>
                            </div>
    
                            <!-- Education Item 2 -->
                            <div class="timeline-item mb-4">
                                <h4 class="text-primary">
                                    <i class="fas fa-school me-2"></i> +2 Management
                                </h4>
                                <p class="mb-1">
                                    <strong>2018 - 2020</strong>
                                </p>
                                <p><em>Pokhara Secondary School</em></p>
                                <p>
                                    Gained foundational knowledge in management, accountancy, and economics while building communication skills.
                                </p>
                            </div>
                        </div>
                    </div>
    
                    <!-- Skills Section (Optional Addition) -->
                    <div class="card bg-light text-dark p-4 shadow">
                        <h3 class="text-center text-info mb-4">
                            <i class="fas fa-cogs"></i> Skills
                        </h3>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Programming Languages: Java, Python, PHP</li>
                            <li class="list-group-item">Web Development: HTML, CSS, JavaScript, Laravel</li>
                            <li class="list-group-item">Database Management: MySQL</li>
                            <li class="list-group-item">UI/UX Design: Figma</li>
                           
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section id="services" class="text-center py-5 ">
        <div class="container">
            <h2 class="mb-4 underlined">My Services</h2>
            <div class="row mt-4">
                
                <article class="col-md-4 mb-3">
                    <div class="card shadow-sm h-100">
                        <div class="card-body">
                            <div class="icon mb-3">
                                <i class="fas fa-code fa-3x text-primary"></i>
                            </div>
                            <h4 class="card-title">Web Development</h4>
                            
                        </div>
                    </div>
                </article>
               
                <article class="col-md-4 mb-3">
                    <div class="card shadow-sm h-100">
                        <div class="card-body">
                            <div class="icon mb-3">
                                <i class="fas fa-paint-brush fa-3x text-success"></i>
                            </div>
                            <h4 class="card-title">UI/UX Design</h4>
                           
                        </div>
                    </div>
                </article>
               
                <article class="col-md-4 mb-3">
                    <div class="card shadow-sm h-100">
                        <div class="card-body">
                            <div class="icon mb-3">
                                <i class="fas fa-server fa-3x text-warning"></i>
                            </div>
                            <h4 class="card-title">Backend Development</h4>
                            
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>        

    
   
    

   
    <section id="contact" class=" py-5 bg-dark text-white">
        <div class="container">

            <h2 class="mb-4 text-center underlined">Contact Me</h2>
            
            <div class="row">
                <div class="col-md-6">
                    <form action="{{ route('contact.submit') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" pattern="[A-Za-z\s]+" placeholder="Your Name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" required>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" id="message" name="message" rows="4" placeholder="Your Message" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Send</button>
                    </form>
                    
                </div>
                <div class="col-md-6 py-5 d-flex justify-content-center align-items-center">
                    <div class="contact-links text-center">
                        <a href="https://www.facebook.com/bipana.chapain" target="_blank" class="me-3">
                            <i class="fab fa-facebook fa-2x"></i>
                        </a>
                        <a href="https://www.instagram.com/chapainbipana" target="_blank" class="me-3">
                            <i class="fab fa-instagram fa-2x"></i>
                        </a>
                        <a href="mailto:chapai.bipana65@gmail.com" target="_blank" class="me-3">
                            <i class="fas fa-envelope fa-2x"></i>
                        </a>
                        <a href="https://github.com/Chapainbipana" target="_blank" class="me-3">
                            <i class="fab fa-github fa-2x"></i>
                        </a>
                        <a href="https://np.linkedin.com/in/bipana-chapain-064036283" target="_blank">
                            <i class="fab fa-linkedin fa-2x"></i>
                        </a>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
</main>
@endsection