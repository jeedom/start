<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Carousel Apple Style Responsive</title>
  <style>
    :root {
      --card-width: 300px;
    }

    body {
      margin: 0;
      font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
      background: #f5f5f7;
      padding: 2rem;
    }

    .carousel-wrapper {
      position: relative;
      max-width: 100%;
      margin: auto;
    }

    .carousel-container {
  overflow-x: auto; /* nécessaire pour swipe horizontal */
  scroll-snap-type: x mandatory; /* effet de snap par carte */
  display: flex;
  gap: 1rem;
  padding-bottom: 1rem;
  scroll-behavior: smooth;
  -webkit-overflow-scrolling: touch; /* iOS friendly */

}

.carousel-container::-webkit-scrollbar {
  display: none; /* cache la barre de scroll sur mobile */
}

    .card {
      flex: 0 0 auto;
      scroll-snap-align: start;
      width: var(--card-width);
      height: 200px;
      background: white;
      border-radius: 20px;
      box-shadow: 0 8px 16px rgba(0,0,0,0.1);
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.25rem;
      font-weight: 500;
      transition: transform 0.3s ease;
    }

    .card:hover {
      transform: translateY(-5px);
    }

    .arrow {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      background: rgba(0,0,0,0.05);
      border: none;
      border-radius: 50%;
      width: 40px;
      height: 40px;
      cursor: pointer;
      font-size: 1.5rem;
      display: flex;
      align-items: center;
      justify-content: center;
      transition: background 0.2s ease;
      z-index: 10;
    }

    .arrow:hover {
      background: rgba(0,0,0,0.1);
    }

    .arrow.left {
      left: -20px;
    }

    .arrow.right {
      right: -20px;
    }

    /* ----------------------- Responsive ----------------------- */

    @media (max-width: 1024px) {
      :root {
        --card-width: 250px;
      }
      .card {
        height: 180px;
      }
    }

    @media (max-width: 768px) {
      :root {
        --card-width: 200px;
      }
      .card {
        height: 160px;
      }
    }

    @media (max-width: 480px) {
      :root {
        --card-width: 75vw;
      }
      .card {
        height: 150px;
        font-size: 1rem;
      }
      .arrow {
        display: none;
      }
    }

  </style>
</head>
<body>

<div class="carousel-wrapper">
  <button class="arrow left" onclick="scrollCarousel(-1)">‹</button>
  <div class="carousel-container" id="carousel">
    <div class="card">Carte 1</div>
    <div class="card">Carte 2</div>
    <div class="card">Carte 3</div>
    <div class="card">Carte 4</div>
    <div class="card">Carte 5</div>
    <div class="card">Carte 6</div>
  </div>
  <button class="arrow right" onclick="scrollCarousel(1)">›</button>
</div>

<script>
  function scrollCarousel(direction) {
    const container = document.getElementById('carousel');
    const card = container.querySelector('.card');
    const scrollAmount = card.offsetWidth + 16; // width + gap
    container.scrollBy({ left: scrollAmount * direction, behavior: 'smooth' });
  }
</script>

</body>
</html>
