<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tokha Film Studio</title>
    <style>
      body {
        margin: 0;
        font-family: "Segoe UI", sans-serif;
        background-color: #398f9b;
        color: #fff;
      }
      header {
        background: #111111;
        padding: 20px;
        text-align: center;
      }
      header h1 {
        margin: 0;
        font-size: 2.5rem;
        color: #a09798;
      }
      nav {
        background: #222;
        display: flex;
        justify-content: center;
        gap: 30px;
        padding: 10px 0;
      }
      nav a {
        color: #fff;
        text-decoration: none;
        font-weight: bold;
        transition: 0.3s;
      }
      nav a:hover {
        color: #e50914;
      }
      .hero {
        background: url("yesoo.JPG") center/cover no-repeat;
        height: 70vh;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        color: #fff;
      }
      .hero h2 {
        background-color: rgba(0, 0, 0, 0.6);
        padding: 20px;
        font-size: 2rem;
      }
      section {
        padding: 40px 20px;
        max-width: 900px;
        margin: auto;
      }
      .footer {
        text-align: center;
        padding: 20px;
        background: #222;
        color: #aaa;
      }
      #contact {
        background: #c49393;
        color: #2b2222;
        padding: 50px 20px;
        max-width: 600px;
        margin: auto;
      }

      .contact-form {
        display: flex;
        flex-direction: column;
        gap: 15px;
      }

      .contact-form input,
      .contact-form textarea {
        width: 100%;
        padding: 10px;
        border: none;
        border-radius: 4px;
        font-size: 1rem;
      }

      .contact-form button {
        padding: 12px;
        background: #4b363a;
        color: white;
        border: none;
        font-weight: bold;
        border-radius: 4px;
        cursor: pointer;
        transition: background 0.3s;
      }

      .contact-form button:hover {
        background: #753838;
      }
      footer {
        text-align: center;
        padding: 30px;
        background-color: #111;
        color: #fff;
      }

      .social-icons {
        display: flex;
        justify-content: center;
        gap: 20px;
        margin-bottom: 20px;
      }

      .social-icon img {
        width: 30px;
        height: 30px;
        transition: transform 0.3s ease;
      }

      .social-icon img:hover {
        transform: scale(1.2);
      }
    </style>
  </head>
  <body>
    <header>
      <h1>Tokha Film Studio</h1>
    </header>

    <nav>
      <a href="#about">About</a>
      <a href="#portfolio">Portfolio</a>
      <a href="#services">Services</a>
      <a href="#contact">Contact</a>
    </nav>

    <div class="hero">
      <h2>Capturing Moments. Telling Stories.</h2>
    </div>

    <section id="about">
      <h2>About Us</h2>
      <p>
        We are a creative film studio based in Tokha, Kathmandu. From
        commercials to indie films, Tokha Film Studio brings visions to life
        through cinematic storytelling.
      </p>
    </section>

    <section id="portfolio">
      <h2>Our Work</h2>
      <p>linking to YouTube/Vimeo</p>
    </section>

    <section id="services">
      <h2>Our Services</h2>
      <ul>
        <li>Commercial Filmmaking</li>
        <li>Music Video Production</li>
        <li>Post-Production Editing</li>
        <li>Event Coverage</li>
      </ul>
    </section>

    <section id="contact">
      <section id="contact">
        <h2>Contact Us</h2>
        <form
          action="https://formspree.io/f/YOUR_FORM_ID"
          method="POST"
          class="contact-form"
        >
          <label>
            Your Name:
            <input type="text" name="name" required />
          </label>
          <label>
            Your Email:
            <input type="email" name="email" required />
          </label>
          <label>
            Message:
            <textarea name="message" rows="5" required></textarea>
          </label>
          <button type="submit">Send Message</button>
        </form>
      </section>

      <h2>Contact Us</h2>
      <p>Email: contact@tokhafilms.com</p>
      <p>Phone: +977-98XXXXXXXX</p>
    </section>
    <div class="social-icons">
      <a
        href="https://www.instagram.com/yourusername"
        target="_blank"
        class="social-icon"
      >
        <img
          src="https://upload.wikimedia.org/wikipedia/commons/9/95/Instagram_logo_2022.svg"
          alt="Instagram"
        />
      </a>
      <a
        href="https://www.youtube.com/channel/yourchannel"
        target="_blank"
        class="social-icon"
      >
        <img
          src="https://upload.wikimedia.org/wikipedia/commons/4/42/YouTube_icon_%282013-2017%29.svg"
          alt="YouTube"
        />
      </a>
      <a
        href="https://www.facebook.com/yourusername"
        target="_blank"
        class="social-icon"
      >
        <img
          src="https://upload.wikimedia.org/wikipedia/commons/5/51/Facebook_f_logo_%282019%29.svg"
          alt="Facebook"
        />
      </a>
    </div>

    <div class="footer">
      &copy; 2025 Tokha Film Studio. All rights reserved.
    </div>
  </body>
</html>
