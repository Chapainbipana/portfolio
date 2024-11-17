<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-info fixed-top shadow-sm">
            <div class="container">
                
                <a class="navbar-brand fw-bold" href="/"><h1>BIPANA</h1></a>
    
               
                <button 
                    class="navbar-toggler" 
                    type="button" 
                    data-bs-toggle="collapse" 
                    data-bs-target="#navbarNav" 
                    aria-controls="navbarNav" 
                    aria-expanded="false" 
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
    
              
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#skills">Skills</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#resume">Resume</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#services">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contact Me</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main class="container-fluid bg-dark text-white py-5">
      
        <section id="#" class="text-center  py-5">
            <div class="row align-items-center">
                
                <div class="col-md-6">
                    <h2 class="mb-4">Bipana Chapain</h2>
                    <p class="fs-5">I'm a <span class="text-info" id="role"></span></p>
                    
                        <a href="{{ asset('storage/images/cv.pdf') }}" class="btn btn-primary" download>Download my CV</a>
                    
                </div>
                
                <div class="col-md-6 py-5">
                    <img src="{{ asset('storage/images/profile.jpg') }}"
                         class="img-fluid rounded shadow-lg auto-scroll" 
                         alt="My Profile Image" 
                         style="max-width: 300px;">
                </div>
            </div>
        </section>
        
        <section id="about" class="py-5 bg-dark text-white">
            <div class="container text-center">
                <h2 class="mb-4">About</h2>
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
                <h2 class="mb-5 underlined">My Skills</h2>
                <div class="row hover-shadow shadow-lg bg-white ">
                   
                    <div class="col-12 col-md-4 mb-4">
                        <div class="card border-0">
                            <div class="card-body">
                                <h4 class="text-dark">Languages</h4>
                                <ul class="list-unstyled">
                                    <li><i class="fa fa-arrow-right"></i>HTML</li>
                                    <li><i class="fa fa-arrow-right"></i> CSS</li>
                                    <li><i class="fa fa-arrow-right"></i> PHP</li>
                                    <li><i class="fa fa-arrow-right"></i> JavaScript</li>
                                    <li><i class="fa fa-arrow-right"></i> Java</li>
                                    <li><i class="fa fa-arrow-right"></i> Python</li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                  
                    <div class="col-12 col-md-4 mb-4">
                        <div class="card  border-0 ">
                            <div class="card-body">
                                <h4 class="text-dark">Frameworks</h4>
                                <ul class="list-unstyled">
                                    <li><i class="fa fa-arrow-right"></i> Laravel</li>
                                    <li><i class="fa fa-arrow-right"></i> Django</li>
                                    <li><i class="fa fa-arrow-right"></i> React</li>
                                    <li><i class="fa fa-arrow-right"></i> Bootstrap</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                  
                    <div class="col-12 col-md-4 mb-4">
                        <div class="card  border-0">
                            <div class="card-body">
                                <h4 class="text-dark">Tools</h4>
                                <ul class="list-unstyled">
                                    <li><i class="fa fa-arrow-right"></i> Git & GitHub</li>
                                    <li><i class="fa fa-arrow-right"></i> Postman</li>
                                    <li><i class="fa fa-arrow-right"></i> MySQL</li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        
        <section id="resume" class="py-5 bg-dark text-white">
            <div class="container">
                <h2 class="text-center mb-4 underlined">My Resume</h2>
        
              
                <div class="card row mb-5 shadow-sm">
                    <div class="col-md-12">
                        <h3 class="mb-4">Education</h3>
                        
                       
                        <div class="education-item mb-4">
                            <h4 class="text-primary">Bachelor of Information Management</h4>
                            <p><strong>2020 - Present</strong></p>
                            <p><em>Kanya Campus, Pokhara</em></p>
                            
                        </div>
        
                        
                        <div class="education-item mb-4">
                            <h4 class="text-primary">+2 Management</h4>
                            <p><strong>2018 - 2020</strong></p>
                            <p><em>Pokhara Secondary School</em></p>
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
                        <form action="" method="post">
                            @csrf
                            
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required>
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
                            <a href="https://www.instagram.com/bipanachapain" target="_blank" class="me-3">
                                <i class="fab fa-instagram fa-2x"></i>
                            </a>
                            <a href="mailto:chapai.bipana65@gmail.com"target="_blank" class="me-3">
                                <i class="fas fa-envelope fa-2x"></i>
                            </a>
                            <a href="tel:9841034429">
                                <i class="fas fa-phone-alt fa-2x"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    
  
    <footer class="bg-muted text-center text-dark py-3">
        <p>&copy; 2024 Bipana Chapain. All rights reserved.</p>
    </footer>

</body>
</html>
<script>
    const roles = ['UI/UX Designer', 'Web Developer', 'Laravel Developer'];
    let currentIndex = 0;

    function rotateText() {
        const roleElement = document.getElementById('role');
        roleElement.textContent = roles[currentIndex];
        currentIndex = (currentIndex + 1) % roles.length; 
    }

   
    setInterval(rotateText, 2000);

    rotateText();
</script>
    