<?php get_header(); ?>

  <body>

    <main>
      <div id="hero">
        <h1>Welcome to <strong>DevDiary! </strong></h1>
        <h4>
          Join me on a journey through code, creativity, and inspiration. <br />
          Explore my thoughts, tutorials, and projects in web development.
        </h4>
        <button><a href="#blog">Explore Now </a></button>
      </div>
      <section id="section-hero" class="section-p">
        <article>
          <img src="http://localhost:81/wordpress/wp-content/themes/study/assets/html.jpg" alt="HTML Image" />
          <div>
            <h3>
              <a href="blog.html" title="Click to nevigate blog"
                >Introduction to HTML
              </a>
            </h3>
            <p>
              <abbr title="HyperText Markup Language">HTML</abbr> is the
              foundation of web development. It structures the content on the
              web, allowing developers to create visually engaging and
              interactive websites. HTML elements, such as headings, paragraphs,
              and images, form the building blocks of web pages. By learning
              HTML, you can design and structure your web content efficiently.
              Whether you're a beginner or an experienced developer, mastering
              HTML is crucial for creating well-structured and accessible
              websites.
            </p>
          </div>
        </article>
        <article>
          <img src="http://localhost:81/wordpress/wp-content/themes/study/assets/php.jpg" alt="Image" />
          <div>
            <h3>
              <a href="blog.html" title="click to nevigate blog"
                >Getting Started with PHP</a
              >
            </h3>
            <p>
              <abbr title="Hypertext Preprocessor">PHP </abbr>is a widely-used
              server-side scripting language designed for web development. It
              allows developers to create dynamic and interactive web pages by
              embedding code within HTML. PHP can interact with databases,
              manage sessions, and handle forms, making it a powerful tool for
              building complex web applications. With its ease of use and
              extensive community support, PHP remains a popular choice for
              backend development. By learning PHP, you can enhance your web
              projects with robust server-side functionalities.
            </p>
          </div>
        </article>
        <article>
          <img src="http://localhost:81/wordpress/wp-content/themes/study/assets/react.jpg" alt="Image" />
          <div>
            <h3>
              <a href="blog.html" title="Click to nevigate blog"
                >Understanding React
              </a>
            </h3>
            <p>
              React is a powerful JavaScript library for building user
              interfaces, developed by Facebook. It enables developers to create
              reusable UI components, making code more manageable and scalable.
              React’s virtual DOM efficiently updates and renders the right
              components when data changes, improving performance. Its
              component-based architecture allows for fast and efficient
              development of complex applications. By mastering React, you can
              build dynamic and responsive web applications with ease.
            </p>
          </div>
        </article>
      </section>
    </main>
    <?php get_footer(); ?>

