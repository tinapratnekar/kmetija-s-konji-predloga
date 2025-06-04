<head>
    <meta charset="UTF-8">
    <title>Kmetija Podkev</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>

.fade-in {
  opacity: 0;
  transition: opacity 1s ease-in-out;
}

.fade-visible {
  opacity: 1;
}

#scrollBtn {
  display: none;
  position: fixed;
  bottom: 40px;
  right: 40px;
  z-index: 99;
  font-size: 22px;
  border: none;
  outline: none;
  background-color: #53563C;
  color: #EDE7DD;
  cursor: pointer;
  padding: 12px 16px;
  border-radius: 50%;
  box-shadow: 0 4px 6px rgba(0,0,0,0.3);
}

#scrollBtn:hover {
  background-color: #383737;
}

      body {
        font-family: 'Montserrat', sans-serif;
        font-size: 1rem;
        line-height: 1.6;
      }

      body {
        background-color: #EDE7DD;
      }
    
      #logo {
        color: #EDE7DD;
      }
      h2, h5 {
        font-weight: 600;
      }
    
      h1 {
        font-weight: 400;
      }
    
      .navbar-nav .nav-link {
        padding: 0.75rem 1rem;
        font-size: 1.1rem;
      }
    
      .navbar-toggler {
        padding: 0.6rem;
        font-size: 1.25rem;
      }
    
      @media (max-width: 991.98px) {
        .navbar-collapse {
          text-align: center;
        }
    
        .navbar-nav {
          flex-direction: column;
          align-items: center;
        }
    
        .navbar-nav .nav-link {
          font-size: 1.25rem;
          padding: 1rem;
        }
      }
    
      @media (max-width: 576px) {
        body {
          font-size: 1.1rem;
        }
        h1 {
          font-size: 1.9rem;
        }
        h2 {
          font-size: 1.6rem;
        }
        .card-text {
          font-size: 1rem;
        }
    
        .section-heading {
          font-size: 2.5rem;
        }
    
        .team-card .overlay-box p {
          font-size: 0.95rem;
        }
      }
    
      .container, .container-fluid {
        padding-left: 3rem;
        padding-right: 3rem;
      }
    
      .navbar .container-fluid {
        padding-left: 1rem;
        padding-right: 1rem;
      }
    
      .section-heading {
        text-align: center;
        text-transform: uppercase;
        position: relative;
        margin-bottom: 2rem;
      }
    
      .overlay-box {
        background-color: rgba(237, 231, 221, 0.85);
        padding: 1rem;
        border-radius: 8px;
      }
    
      .team-card {
        display: flex;
        flex-direction: column;
        gap: 1.5rem;
        align-items: center;
        padding: 1rem;
        background-color: rgba(248, 249, 250, 0.9);
        border-radius: 8px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
      }
    
      .team-card img {
        width: 200px;
        height: 200px;
        object-fit: cover;
        border-radius: 6px;
      }
    
      #tina .team-card .overlay-box {
        text-align: center;
        background-color: red;
      }
    
      section img {
        width: 100%;
        height: auto;
        object-fit: cover;
        border-radius: 0;
        max-height: 400px;
      }
    
      footer img {
        max-height: 60px;
      }
    
      hr.border-success {
        height: 3px;
        opacity: 1;
        border: none;
        border-radius: 1px;
      }
    
      #ekipa .section-heading {
        font-size: 2rem;
        color:#53563C
      }
    
      #ekipa .row.g-4 {
        row-gap: 2rem;
      }
    
      footer {
        color: #EDE7DD;
        background-color: #53563C
      }
    
      footer a {
        color: #EDE7DD;
      }
      
      .navbar {
        background-color: #53563C;
      }

      .navbar-nav .nav-link {
        color: #EDE7DD;
      }

      .navbar-nav .nav-link:hover {
        color: #ede7ddb7;
      }

      footer a:hover {
        color: #ede7ddb7;
      }

      .section-heading {
        color: #198754;
      }

      .overlay-box {
        background-color: rgba(237, 231, 221, 0.85);
      }

      #kdo .section-heading {
        color: #A37146;
      }

      #kmetija .section-heading {
        color: #53563C;
      }

      .team-card .overlay-box {
    text-align: center;
  }
  .team-card img {
    width: 200px;
    height: 200px;
    object-fit: cover;
    border-radius: 6px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
  }

  .team-card h5, .team-card p {
    text-align: center;
  }
  #kmetija p {
    text-align: justify;
  }

  .fade-in {
  opacity: 0;
  transition: opacity 1s ease-in-out;
}

.fade-visible {
  opacity: 1;
}

      #scrollBtn {
  display: none;
  position: fixed;
  bottom: 40px;
  right: 40px;
  z-index: 99;
  font-size: 22px;
  border: none;
  outline: none;
  background-color: #53563C;
  color: #EDE7DD;
  cursor: pointer;
  padding: 12px 16px;
  border-radius: 50%;
  box-shadow: 0 4px 6px rgba(0,0,0,0.3);
}

#scrollBtn:hover {
  background-color: #383737;
}

      body {
        background-color: #EDE7DD;
        margin: 0;
        padding: 0;
      }

      .hero-image {
        background-image: url(src/images/naslovna2.png);
        background-size: cover;
        background-position: center;
        height: 500px;
        width: 100%;
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
      }

      .hero-text {
        position: absolute;
        opacity: 75%;
        top: 85%;
        left: 20%;
        transform: translate(-50%, -50%);
        color: white;
        font-size: 24px;
        font-weight: 600;
        text-align: left;
        text-shadow: 2px 2px 4px rgba(0,0,0,0.6);
      }

      .section-title {
        background-color: #b4b991;
        color: white;
        text-align: center;
        margin: 0 auto 32px auto;
        width: 100%;
        box-sizing: border-box;
        height: 300px;
        padding: 32px 24px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
      }
    

      .section-title .naslov {
        font-size: 25.6px;
        font-weight: bold;
        margin-bottom: 8px;
      }

      .section-title .naslov-linija {
        width: 80%;
        height: 2px;
        background-color: #e6e6e6;
        border: none;
        margin: auto;
      }

      .section-title p {
        font-size: 15.2px;
        line-height: 1.6;
        max-width: 90%;
        margin: 0;
        text-align: justify; 
      }

      .flip-card {
        background-color: transparent;
        width: 150px;
        height: 150px;
        perspective: 1000px;
        margin: auto;
      }

      .flip-card-inner {
        position: relative;
        width: 100%;
        height: 100%;
        text-align: center;
        transition: transform 0.6s;
        transform-style: preserve-3d;
      }

      .flip-card:hover .flip-card-inner {
        transform: rotateY(180deg);
      }

      .flip-card-front,
      .flip-card-back {
        position: absolute;
        width: 100%;
        height: 100%;
        backface-visibility: hidden;
        border-radius: 10px;
        overflow: hidden;
      }

      .flip-card-front img {
        width: 100%;
        height: 100%;
        object-fit: cover;
      }

      .flip-card-back {
        background-color: #D9D9D9;
        color: #333;
        transform: rotateY(180deg);
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 10px;
        font-size: 13.6px;
      }

      .caption {
        text-align: center;
        width: 120px;
        margin-top: 10px;
        font-weight: bold;
        background-color: #d9cfc0;
        padding: 4px 0;
        border-radius: 5px;
      }

      .quote-box {
        background-color: #b4b991;
        width: 75%;
        height: 200px;
        color: white;
        padding: 24px;
        text-align: center;
        margin-top: 50px;
        margin-bottom: 50px;
        border-radius: 5px;
        display: flex;
        align-items: center;
        justify-content: center;
      }
      body {
        font-family: 'Montserrat', sans-serif;
        background-color: #EDE7DD;
      }

      .navbar {
        background-color: #53563C;
      }

      #logo {
        color: #EDE7DD;
      }

      .navbar-nav .nav-link {
        padding: 0.75rem 1rem;
        font-size: 1.1rem;
        color: #EDE7DD;
      }

      .navbar-nav .nav-link:hover {
        color: #ede7ddb7;
      }

      .navbar-toggler {
        padding: 0.6rem;
        font-size: 1.25rem;
      }

      @media (max-width: 991.98px) {
        .navbar-collapse {
          text-align: center;
        }

        .navbar-nav {
          flex-direction: column;
          align-items: center;
        }

        .navbar-nav .nav-link {
          font-size: 1.25rem;
          padding: 1rem;
        }
      }

      footer {
        color: #EDE7DD;
        background-color: #53563C;
      }

      footer a {
        color: #EDE7DD;
      }

      footer a:hover {
        color: #ede7ddb7;
      }

      footer img {
        max-height: 60px;
      }

      @media (max-width: 991.98px) {
         }


         .fade-in {
  opacity: 0;
  transition: opacity 1s ease-in-out;
}

.fade-visible {
  opacity: 1;
}

#scrollBtn {
  display: none;
  position: fixed;
  bottom: 40px;
  right: 40px;
  z-index: 99;
  font-size: 22px;
  border: none;
  outline: none;
  background-color: #53563C;
  color: #EDE7DD;
  cursor: pointer;
  padding: 12px 16px;
  border-radius: 50%;
  box-shadow: 0 4px 6px rgba(0,0,0,0.3);
}

#scrollBtn:hover {
  background-color: #383737;
}

      body {
        font-family: 'Montserrat', sans-serif;
        background-color: #EDE7DD;
      }

      .navbar {
        background-color: #53563C;
      }

      #logo {
        color: #EDE7DD;
      }

      .navbar-nav .nav-link {
        padding: 0.75rem 1rem;
        font-size: 1.1rem;
        color: #EDE7DD;
      }

      .navbar-nav .nav-link:hover {
        color: #ede7ddb7;
      }

      .navbar-toggler {
        padding: 0.6rem;
        font-size: 1.25rem;
      }

      @media (max-width: 991.98px) {
        .navbar-collapse {
          text-align: center;
        }

        .navbar-nav {
          flex-direction: column;
          align-items: center;
        }

        .navbar-nav .nav-link {
          font-size: 1.25rem;
          padding: 1rem;
        }
      }

      footer {
        color: #EDE7DD;
        background-color: #53563C;
      }

      footer a {
        color: #EDE7DD;
      }

      footer a:hover {
        color: #ede7ddb7;
      }

      footer img {
        max-height: 60px;
      }

      footer {
        color: #EDE7DD;
        background-color: #53563C;
        width: 100%;
        margin: 0;
        padding: 1.5rem 0;
      }

      .footer-inner {
        width: 100%;
        margin: 0 auto;
        padding: 0 2rem;
        display: flex;
        justify-content: space-between;
        align-items: center;
      }

      body {
        background-color: #EDE7DD;
        margin: 0;
        padding: 0;
      }

      .hero-image {
        background-image: url(src/images/naslovna3.png);
        background-size: cover;
        background-position: center;
        height: 500px;
        width: 100%;
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
      }

      .hero-text {
        position: absolute;
        opacity: 75%;
        top: 75%;
        left: 38%;
        transform: translate(-50%, -50%);
        color: white;
        font-size: 24px;
        font-weight: 600;
        text-align: left;
        text-shadow: 2px 2px 4px rgba(0,0,0,0.6);
      }

      .hero-text h2 {
  font-size: 16px;
  font-weight: bold;
  line-height: 1.2;
  color: 383737;
}

.hero-text hr {
  width: 100px;
  height: 2px;
  background-color: white;
  border: none;
}

.hero-text p {
  font-size: 10px;
}

.ponudba-polovica {
  position: relative;
  max-width: 600px;
  margin: 10px;
  margin-top: 10%;
}

.ponudba-polovica img {
  width: 100%;
  display: block;
  border-radius: 8px 8px 0 0;
}

.ponudba-box {
    opacity: 75%;
  color: white;
  padding: 30px 20px;
  text-align: center;
  border-radius: 0 0 8px 8px;
}

.ponudba-box h4 {
  font-weight: bold;
  margin-bottom: 15px;
}

.ponudba-box p {
  font-size: 14px;
  line-height: 1.6;
  margin-bottom: 0;
  max-width: 500px;
  margin-left: auto;
  margin-right: auto;
  text-align: justify;
}

.ponudba-box .cena {
  margin-top: 15px;
  font-weight: 600;
  text-align: right;
}

.rezerviraj-dolgme {
  background-color: #6e4b3a;
  border: none;
  border-radius: 25px;
  padding: 12px 30px;
  font-weight: 600;
  text-transform: uppercase;
  text-decoration: none;
  font-size: 16px;
  color: white;
  display: inline-block;
}
      @media (max-width: 991.98px) {
         }
         footer {
  width: 100%;
  margin: 0;
  padding: 1.5rem 0;
}

footer > div {
  max-width: 100%;
  margin: 0 auto;
  padding: 0 2rem;
}

.fade-in {
  opacity: 0;
  transition: opacity 1s ease-in-out;
}

.fade-visible {
  opacity: 1;
}
      body {
        font-family: 'Montserrat', sans-serif;
        background-color: #EDE7DD;
      }

      .navbar {
        background-color: #53563C;
      }

      #logo {
        color: #EDE7DD;
      }

      .navbar-nav .nav-link {
        padding: 0.75rem 1rem;
        font-size: 1.1rem;
        color: #EDE7DD;
      }

      .navbar-nav .nav-link:hover {
        color: #ede7ddb7;
      }

      .navbar-toggler {
        padding: 0.6rem;
        font-size: 1.25rem;
      }

      @media (max-width: 991.98px) {
        .navbar-collapse {
          text-align: center;
        }

        .navbar-nav {
          flex-direction: column;
          align-items: center;
        }

        .navbar-nav .nav-link {
          font-size: 1.25rem;
          padding: 1rem;
        }
      }

      footer {
        color: #EDE7DD;
        background-color: #53563C;
      }

      footer a {
        color: #EDE7DD;
      }

      footer a:hover {
        color: #ede7ddb7;
      }

      footer img {
        max-height: 60px;
      }

      .form-container {
        max-width: 600px;
        margin: 3rem auto;
        background-color: color: #EDE7DD;
        padding: 2rem;
        border-radius: 10px;
      }

      .form-check-label {
        text-transform: capitalize;
      }

      .btn-submit {
        background-color: #53563C;
        color: #EDE7DD;
        border: none;
      }

      .btn-submit:hover {
        background-color: #43452e;
      }
      

    </style>
  </head>
  <body>