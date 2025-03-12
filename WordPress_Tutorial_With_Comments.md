
# WordPress Tutorial: Installation, Headless Setup, Theme, and Plugin Development

## Table of Contents
1. [WordPress Installation](#wordpress-installation)
2. [Using WordPress as a Headless CMS](#using-wordpress-as-a-headless-cms)
3. [Creating a WordPress Theme from Scratch](#creating-a-wordpress-theme-from-scratch)
4. [Creating a WordPress Plugin](#creating-a-wordpress-plugin)

---

## WordPress Installation

### 1. Download and Setup
- Download WordPress from [https://wordpress.org](https://wordpress.org).
- Extract and place it in your web server's root directory:
  - **MAMP/XAMPP/WAMP**: `htdocs` or `www`.

### 2. Database Creation
- Run web server.
- Open **phpMyAdmin** and create a database.

### 3. WordPress Installation Wizard
- Navigate to `http://localhost:PORT/YOUR_FOLDER_NAME/wp-admin`.
- Complete setup (database and admin account).

### 4. Create a Post
- Go to **Posts → Add New**.

---

## Using WordPress as a Headless CMS

### 1. Permalink Settings
- Set **Post name** in **Settings → Permalinks**.

### 2. API Endpoints
- Posts JSON: `http://localhost:PORT/YOUR_FOLDER_NAME/wp-json/wp/v2/posts`

### 3. Fetch WordPress Posts in React

```jsx
// Import React hooks and CSS
import { useEffect, useState } from 'react';
import './App.css';

function App() {
  const [posts, setPosts] = useState([]); // Initialize posts array

  useEffect(() => {
    // Fetch posts from WordPress REST API with embedded data
    fetch('http://localhost:8888/classof26/wp-json/wp/v2/posts?_embed')
      .then((res) => {
        if (!res.ok) throw new Error('Network error');
        return res.json(); // Parse JSON
      })
      .then((data) => setPosts(data)) // Save to state
      .catch((error) => console.error('Fetch error:', error)); // Handle error
  }, []);

  return (
    <ul>
      {posts.map((post) => (
        // Render post content safely using dangerouslySetInnerHTML
        <li key={post.id} dangerouslySetInnerHTML={{ __html: post.content.rendered }}></li>
      ))}
    </ul>
  );
}

export default App;
```

---

## Creating a WordPress Theme from Scratch

### 1. Create Theme Folder
- Inside `wp-content/themes`, create `mytheme`.

### 2. Add Required `style.css`
```css
/*
Theme Name: wp-theme
Author: Nilma Abbas
Author URI: www.example.com
Description: Custom theme
Version: 1.0
*/
```

### 3. Create Basic `index.php`
```php
<h1>My First Custom Theme!</h1>
```

### 4. Loop for Displaying Posts with Comments
```php
<?php
// Check if posts exist
if (have_posts()) :
    while (have_posts()) : the_post(); ?>
        <!-- Post title with link -->
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <!-- Post content -->
        <?php the_content(); ?>
    <?php endwhile;
else :
    echo '<p>There are no posts!</p>'; // No posts message
endif;
?>
```

---

### 5. `header.php` with Comments
```php
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?> <!-- WordPress head hook -->
</head>
<body <?php body_class(); ?>>
<header>
    <h1><?php bloginfo('name'); ?></h1> <!-- Site name -->
    <span><?php bloginfo('description'); ?></span> <!-- Tagline -->
</header>
```

### 6. `footer.php` with Comments
```php
<footer>
    <p>This is my footer &copy; Nilma Abbas</p> <!-- Footer text -->
</footer>
<?php wp_footer(); ?> <!-- WordPress footer hook -->
</body>
</html>
```

### 7. Include Header & Footer in `index.php`
```php
<?php get_header(); ?> <!-- Include header.php -->
<div class="container">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <?php the_content(); ?>
    <?php endwhile; endif; ?>
</div>
<?php get_footer(); ?> <!-- Include footer.php -->
```

---

## Creating a WordPress Plugin

### 1. Plugin Header with Comments
```php
<?php
/*
Plugin Name: Footer Text Plugin
Author: Nilma Abbas
Author URI: www.example.com
Description: Adds text at bottom of posts.
Version: 1.0
*/
?>
```

### 2. Add Content via Filter with Comments
```php
<?php
// Function to add custom text to post content
function add_footer_text($content) {
    return $content . '<p>Custom footer text by Nilma Abbas.</p>';
}
// Hook function to 'the_content'
add_filter('the_content', 'add_footer_text');
?>
```

---

## Bonus: `functions.php` (Theme Enhancements)

```php
<?php
// Enqueue theme CSS
function custom_theme_assets() {
    wp_enqueue_style('style', get_stylesheet_uri());
}
// Hook to enqueue scripts and styles
add_action('wp_enqueue_scripts', 'custom_theme_assets');
?>
```

---

## ✅ Summary

- ✅ Install WordPress and create content.
- ✅ Use REST API with React.
- ✅ Build a custom theme.
- ✅ Extend WordPress via a plugin.

---

> **Tip**: See [Hostinger Tutorial](https://www.hostinger.com/tutorials/how-to-create-wordpress-plugin) for more plugin ideas.
